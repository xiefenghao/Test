<?php

namespace Yansongda\Pay\Gateways\Wechat;

use Yansongda\Pay\Support\Config;
use Yansongda\Pay\Traits\HasHttpRequest;
use Yansongda\Pay\Contracts\GatewayInterface;
use Yansongda\Pay\Exceptions\GatewayException;
use Yansongda\Pay\Exceptions\InvalidArgumentException;

abstract class Wechat implements GatewayInterface
{
    use HasHttpRequest;

    /**
     * 支付订单.
     *
     * @var string
     */
    protected $gateway = 'https://api.mch.weixin.qq.com/pay/unifiedorder';

    /**
     * 查询订单.
     * 
     * @var string
     */
    protected $gateway_query = 'https://api.mch.weixin.qq.com/pay/orderquery';

    /**
     * 关闭订单.
     * 
     * @var string
     */
    protected $gateway_close = 'https://api.mch.weixin.qq.com/pay/closeorder';

    /**
     * 退款.
     * 
     * @var string
     */
    protected $gateway_refund = 'https://api.mch.weixin.qq.com/secapi/pay/refund';

    /**
     * 配置项.
     *
     * @var array
     */
    protected $config;

    /**
     * 用户传参配置项.
     *
     * @var \Yansongda\Pay\Support\Config
     */
    protected $user_config;

    /**
     * [__construct description].
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-14
     *
     * @param   array      $config [description]
     */
    public function __construct(array $config)
    {
        $this->user_config = new Config($config);

        $this->config = [
            'appid' => $this->user_config->get('app_id', ''),
            'mch_id' => $this->user_config->get('mch_id', ''),
            'nonce_str' => $this->createNonceStr(),
            'sign_type' => 'MD5',
            'notify_url' => $this->user_config->get('notify_url', ''),
            'trade_type' => $this->getTradeType(),
        ];
    }

    /**
     * 对外支付接口.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-15
     *
     * @param   array      $config_biz [description]
     *
     * @return  mixed                  [description]
     */
    abstract public function pay(array $config_biz = []);

    /**
     * 对外接口 - 退款.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-15
     *
     * @return  string|boolean     [description]
     */
    public function refund($config_biz = [])
    {
        $this->config = array_merge($this->config, $config_biz);
        $this->config['total_fee'] = intval($this->config['total_fee'] * 100);
        $this->config['refund_fee'] = intval($this->config['refund_fee'] * 100);
        $this->config['op_user_id'] = isset($this->config['op_user_id']) ?: $this->user_config->get('mch_id', '');

        $this->unsetTradeTypeAndNotifyUrl();

        return $this->getResult($this->gateway_refund, true);
    }

    /**
     * 对外接口 - 关闭订单.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-15
     *
     * @return  array|boolean     [description]
     */
    public function close($out_trade_no = '')
    {
        $this->config['out_trade_no'] = $out_trade_no;

        $this->unsetTradeTypeAndNotifyUrl();

        return $this->getResult($this->gateway_close);
    }

    /**
     * 对外接口 - 订单查询
     * @author yansongda <me@yansongda.cn>
     * 
     * @version 2017-08-19
     * 
     * @param   string     $out_trade_no 商家订单号
     * 
     * @return  array|boolean            [description]
     */
    public function find($out_trade_no = '')
    {
        $this->config['out_trade_no'] = $out_trade_no;

        $this->unsetTradeTypeAndNotifyUrl();

        return $this->getResult($this->gateway_query);
    }

    /**
     * 验证签名.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-15
     *
     * @param   string     $data 待验证 xml 数据
     * @param   string     $sign 服务器返回的签名
     * @param   bool       $sync is sync sign
     *
     * @return  array|boolean    是否相符
     */
    public function verify($data, $sign = null, $sync = false)
    {
        $data = $this->fromXml($data);

        $sign = is_null($sign) ? $data['sign'] : $sign;

        return $this->getSign($data) === $sign ? $data : false;
    }

    /**
     * 获取交易类型.
     * @author yansongda <me@yansongda.cn>
     * 
     * @version 2017-08-17
     * 
     * @return  string     [description]
     */
    abstract protected function getTradeType();

    /**
     * 预下单.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-15
     *
     * @param   array  $config_biz  业务参数
     *
     * @return  array               服务器返回结果数组
     */
    protected function preOrder($config_biz = [])
    {
        $this->config = array_merge($this->config, $config_biz);
        $this->config['total_fee'] = intval($this->config['total_fee'] * 100);

        return $this->getResult($this->gateway);
    }

    /**
     * 获取 API 结果.
     * 
     * @author yansongda <me@yansongda.cn>
     * 
     * @version 2017-08-19
     * 
     * @param   string     $end_point [description]
     * @param   bool       $cert      是否使用证书
     * 
     * @return  array                 [description]
     */
    protected function getResult($end_point, $cert = false)
    {
        $this->config['sign'] = $this->getSign($this->config);

        if ($cert) {
            $data = $this->fromXml($this->post($end_point, $this->toXml($this->config), ['cert' => $this->user_config->get('cert_client', ''), 'ssl_key' => $this->user_config->get('cert_key', '')]));
        } else {
            $data = $this->fromXml($this->post($end_point, $this->toXml($this->config)));
        }

        if (!isset($data['return_code']) || $data['return_code'] !== 'SUCCESS' || $data['result_code'] !== 'SUCCESS') {
            $error = 'getResult error:' . $data['return_msg'];
            $error .= isset($data['err_code_des']) ? ' - ' . $data['err_code_des'] : '';
        }

        if (!isset($error) && $this->getSign($data) !== $data['sign']) {
            $error = 'getResult error: return data sign error';
        }

        if (isset($error)) {
            throw new GatewayException(
                $error,
                20000,
                $data);
        }

        return $data;
    }

    /**
     * 签名.
     *
     * @author yansongda <me@yansongda.cn>
     * 
     * @version 2017-08-15
     *
     * @param   array      $data 带签名数组
     *
     * @return  string           [description]
     */
    protected function getSign($data)
    {
        if (is_null($this->user_config->get('key'))) {
            throw new InvalidArgumentException("Missing Config -- [key]");
        }

        ksort($data);

        $string = md5($this->getSignContent($data) . "&key=" . $this->user_config->get('key'));

        return strtoupper($string);
    }

    /**
     * 将数组转换成 URL 格式.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-15
     *
     * @param   array      $data [description]
     *
     * @return  string           [description]
     */
    protected function getSignContent($data)
    {
        $buff = "";

        foreach ($data as $k => $v)
        {
            if ($k != "sign" && $v != "" && !is_array($v)) {
                $buff .= $k . "=" . $v . "&";
            }
        }
        
        return trim($buff, "&");
    }

    /**
     * 生成随机字符串.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-14
     *
     * @param   integer    $length [description]
     *
     * @return  string             [description]
     */
    protected function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }

        return $str;
    }

    /**
     * 转化为 xml.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-14
     *
     * @param   array      $data 带转化数组
     *
     * @return  string           转化后的xml字符串
     */
    protected function toXml($data)
    {
        if (!is_array($data) || count($data) <= 0) {
            throw new InvalidArgumentException("convert to xml error!invalid array!");
        }
        
        $xml = "<xml>";
        foreach ($data as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "</" . $key . ">";
            } else {
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
            }
        }
        $xml .= "</xml>";

        return $xml; 
    }

    /**
     * xml 转化为 array.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @version 2017-08-14
     *
     * @param   string     $xml xml字符串
     *
     * @return  array           转化后的数组
     */
    protected function fromXml($xml)
    {   
        if (!$xml) {
            throw new InvalidArgumentException("convert to array error !invalid xml");
        }

        libxml_disable_entity_loader(true);

        return json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA), JSON_UNESCAPED_UNICODE), true);        
    }

    /**
     * 删除 trade_type and notify_url.
     * 
     * @author yansongda <me@yansongda.cn>
     * 
     * @version 2017-08-19
     * 
     * @return  boolean     [description]
     */
    protected function unsetTradeTypeAndNotifyUrl()
    {
        unset($this->config['notify_url']);
        unset($this->config['trade_type']);

        return true;
    }
}
