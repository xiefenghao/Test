<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => false,
    // 应用模式状态
    'app_status'             => '',
    // 是否支持多模块
    'app_multi_module'       => true,
    // 入口自动绑定模块
    'auto_bind_module'       => false,
    // 注册的根命名空间
    'root_namespace'         => [],
    // 扩展函数文件
    'extra_file_list'        => [THINK_PATH . 'helper' . EXT],
    // 默认输出类型
    'default_return_type'    => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return'    => 'json',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler'  => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler'      => 'callback',
    // 默认时区
    'default_timezone'       => 'PRC',
    // 是否开启多语言
    'lang_switch_on'         => false,
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter'         => '',
    // 默认语言
    'default_lang'           => 'zh-cn',
    // 应用类库后缀
    'class_suffix'           => false,
    // 控制器类后缀
    'controller_suffix'      => false,

    // +----------------------------------------------------------------------
    // | 模块设置
    // +----------------------------------------------------------------------

    // 默认模块名
    'default_module'         => 'index',
    // 禁止访问模块
    'deny_module_list'       => ['common'],
    // 默认控制器名
    'default_controller'     => 'Index',
    // 默认操作名
    'default_action'         => 'index',
    // 默认验证器
    'default_validate'       => '',
    // 默认的空控制器名
    'empty_controller'       => 'Error',
    // 操作方法后缀
    'action_suffix'          => '',
    // 自动搜索控制器
    'controller_auto_search' => false,

    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------

    // PATHINFO变量名 用于兼容模式
    'var_pathinfo'           => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo分隔符
    'pathinfo_depr'          => '/',
    // URL伪静态后缀
    'url_html_suffix'        => 'html',
    // URL普通方式参数 用于自动生成
    'url_common_param'       => false,
    // URL参数方式 0 按名称成对解析 1 按顺序解析
    'url_param_type'         => 0,
    // 是否开启路由
    'url_route_on'           => true,
    // 路由使用完整匹配
    'route_complete_match'   => false,
    // 路由配置文件（支持配置多个）
    'route_config_file'      => ['route'],
    // 是否开启路由解析缓存
    'route_check_cache'      => false,
    // 是否强制使用路由
    'url_route_must'         => false,
    // 域名部署
    'url_domain_deploy'      => false,
    // 域名根，如thinkphp.cn
    'url_domain_root'        => '',
    // 是否自动转换URL中的控制器和操作名
    'url_convert'            => true,
    // 默认的访问控制器层
    'url_controller_layer'   => 'controller',
    // 表单请求类型伪装变量
    'var_method'             => '_method',
    // 表单ajax伪装变量
    'var_ajax'               => '_ajax',
    // 表单pjax伪装变量
    'var_pjax'               => '_pjax',
    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache'          => false,
    // 请求缓存有效期
    'request_cache_expire'   => null,
    // 全局请求缓存排除规则
    'request_cache_except'   => [],

    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------

    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写
        'auto_rule'    => 1,
        // 模板路径
        'view_path'    => '',
        // 模板后缀
        'view_suffix'  => 'html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
    ],
     
    // 视图输出字符串内容替换
    'view_replace_str'       => [],
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',
    'dispatch_error_tmpl'    => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',

    // +----------------------------------------------------------------------
    // | 异常及错误设置
    // +----------------------------------------------------------------------

    // 异常页面的模板文件
    'exception_tmpl'         => THINK_PATH . 'tpl' . DS . 'think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message'          => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'         => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '',

    // +----------------------------------------------------------------------
    // | 日志设置
    // +----------------------------------------------------------------------

    'log'                    => [
        // 日志记录方式，内置 file socket 支持扩展
        'type'  => 'File',
        // 日志保存目录
        'path'  => LOG_PATH,
        // 日志记录级别
        'level' => [],
    ],

    // +----------------------------------------------------------------------
    // | Trace设置 开启 app_trace 后 有效
    // +----------------------------------------------------------------------
    'trace'                  => [
        // 内置Html Console 支持扩展
        'type' => 'Html',
    ],

    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------

    // 'cache'                  => [
    //     // 驱动方式
    //     'type'   => 'File',
    //     // 缓存保存目录
    //     'path'   => CACHE_PATH,
    //     // 缓存前缀
    //     'prefix' => '',
    //     // 缓存有效期 0表示永久缓存
    //     'expire' => 0,
    // ],
  'cache' => [
// 使用复合缓存类型
'type' => 'complex',
// 默认使用的缓存

'default' => [
// 驱动方式
'type' => 'File',
// 缓存保存目录
'path' => CACHE_PATH,
],
// 文件缓存
'file' => [
// 驱动方式
'type' => 'file',
// 设置不同的缓存保存目录
'path' => RUNTIME_PATH . 'file/',
],
// redis缓存
'redis' => [
// 驱动方式
'type' => 'redis',
// 服务器地址
'host' => '127.0.0.1',
],
],
    // +----------------------------------------------------------------------
    // | 会话设置
    // +----------------------------------------------------------------------

    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'think',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
    ],

    // +----------------------------------------------------------------------
    // | Cookie设置
    // +----------------------------------------------------------------------
    'cookie'                 => [
        // cookie 名称前缀
        'prefix'    => '',
        // cookie 保存时间
        'expire'    => 0,
        // cookie 保存路径
        'path'      => '/',
        // cookie 有效域名
        'domain'    => '',
        //  cookie 启用安全传输
        'secure'    => false,
        // httponly设置
        'httponly'  => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ],
   
    //分页配置
    'paginate'               => [
        'type'      => 'bootstrap',
        'var_page'  => 'page',
        'list_rows' => 15,
    ],
      'captcha' => [
        'fontSize' => 12,
        'imageH' => 0 ,
        'imageW' => 0,
        'length' =>4
    ],

    'auth'  => [
    'auth_on'           => 1, // 权限开关
    'auth_type'         => 1, // 认证方式，1为实时认证；2为登录认证。
    'auth_group'        => 'auth_group', // 用户组数据不带前缀表名
    'auth_group_access' => 'auth_group_access', // 用户-用户组关系不带前缀表
    'auth_rule'         => 'auth_rule', // 权限规则不带前缀表
    'auth_user'         => 'user', // 用户信息不带前缀表
],
'alipay' => [
    'app_id' => '2016102600766363',
    'notify_url' => 'http://localhost/ht/public/index/login/notify_url.php',
    'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhiverBC7gnOwOBmDNiYehFUZmhXq3Uzx9+sT/YHNrexbzB6jdKHSTc9MrMZ/PjQhSqBtrwO5boW2gvOYlUkXEyoDU1KWJc+Y37u2FVB4xYusbzbqYIQE3zxy/bvDzk/OHfD3Vjh07KAg8g8fIi63Uq/RJTUXKs1FhJ6SaIclShMQYY/O6U4qSvchjdrqv8AeZrXf3UiAQaLRSC08fs+093zVeym1LyBKhXfm2VPlPvBioyTeaFsUeaPcftF+CkJW9YogqRIdqM4RNVAMOTmVLpO3ZIE0Ie+zY2FDdZC3G+qWo/W8LTf6cMOwEDpPuWok1sCNg5u58j2TNSldZv7ESwIDAQAB',
    'private_key' => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCGK96sELuCc7A4GYM2Jh6EVRmaFerdTPH36xP9gc2t7FvMHqN0odJNz0ysxn8+NCFKoG2vA7luhbaC85iVSRcTKgNTUpYlz5jfu7YVUHjFi6xvNupghATfPHL9u8POT84d8PdWOHTsoCDyDx8iLrdSr9ElNRcqzUWEnpJohyVKExBhj87pTipK9yGN2uq/wB5mtd/dSIBBotFILTx+z7T3fNV7KbUvIEqFd+bZU+U+8GKjJN5oWxR5o9x+0X4KQlb1iiCpEh2ozhE1UAw5OZUuk7dkgTQh77NjYUN1kLcb6paj9bwtN/pww7AQOk+5aiTWwI2Dm7nyPZM1KV1m/sRLAgMBAAECggEAVRN0On7Rp0JcNvZWcPty1k5v0XicWH7131I8dr7cALCi9Kdo1gfWJmiQIe4ruPGtOnjHk/Y0mpRGynpUAjU6YHh/a1IuywL72MJaDuHb8sdCK7MSouiTfkoCUEnDOwr3k5y7+PwLiA9xVIuqHi6pJ9E8OO+VJRrMPe+evpETYAgSh+Ayzm+LtF/Rn9M/BPHXQKiDzy9+y5AqZwJqDpgiY3w7LeI5Xtskarnuxwqmq9PsGudmSb7wsFfypgil+v8wuMbuBP4v0OFWkNB+Flc/kuL8hWymvUlaofu772m/h5eitwmzH9qFUURYbEoFF52dNkVOdT09A8rwrnjeMbm3AQKBgQDLdFqFR3b9Wo3kW9m3DDLNfInaaVuHNJH5alS8bmxBycvjqCaWXkhy67Eyytl3ruTKqAeh3eQQdQj8Hn/yKztIl5MGzSE5rnm+EIZnAemWET2GRJWstIR+cNy2DvTQe4uTE6G++8jJeD1YHhNJ+ZelAwV2yLY/hnNlxVKwvrnl4QKBgQCo0saU65Pww+MN1i9vug1TwfuyUH7c16ZIEG33/NvkKW/NBYS9LgJguAV7AW8hs3a14NMoLhOY21OenuMzroBX0srghNtZU3/rPfofMst82MS2YhM5skQzLV8igu+wNbplFAJpmxyDE9E37slA1FT4fzhDSm9IsDHXVLky/IsXqwKBgBXxKoINPwv75CmorkZLjn8S21su2awvQz7+9LyNvCcsOE0JKYA2EuIyAR5VOjbqKcqhbJFMePg9Zwap02qutuoRTs4A+YBbDM4uwhAB6MtCeLwuUWYa4d8xFNydqFGDwX3PNDaAuRrhWNxUAgiMXopxVPmGlAEt4uwq58wgBbSBAoGBAJ8QGLJvU7BhoCiFSaSHM89a0f8sAJurQ6xaboJc6AGNWR1eubZVB0CBoghHTaH/KTYsYkdVQnmfDKZDJean35zfqu7nvpPnLHtEpcmHXlp/EriUp3CRGdjuQtiNbbAkrz5VIADIeJC3t0Rv44cFiBmqJCSimT9vY0ZzORtk/tiJAoGAXIfDruKzrHLOd3YWgO7C+kEOb0UpStClcteWaRSeVr2AgoXKON2lNV7k/EU5mp8vHHTua1piIYN9l0nk06Z3PnOcJyj0i5EB4PmOj2MbefMRlpBqvvkI0kih9QUJ/SYWr+pLog9iCjZSi828tOjS8gLmLO+08pDauMs74Ihbr6A=',
    // 使用公钥证书模式，请配置下面两个参数，同时修改ali_public_key为以.crt结尾的支付宝公钥证书路径，如（./cert/alipayCertPublicKey_RSA2.crt）
    // 'app_cert_public_key' => './cert/appCertPublicKey.crt', //应用公钥证书路径
    // 'alipay_root_cert' => './cert/alipayRootCert.crt', //支付宝根证书路径
    'log' => [ // optional
        'file' => './logs/alipay.log',
        'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
//            'type' => 'daily', // optional, 可选 daily.
        'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
    ],
    'sign_type' => "RSA2",
    'http' => [ // optional
        'timeout' => 5.0,
        'connect_timeout' => 5.0,
        // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
    ],
//        'mode' => 'dev', // optional,设置此参数，将进入沙箱模式
],
];
