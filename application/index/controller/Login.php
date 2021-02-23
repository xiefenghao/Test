<?php

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use think\cache\driver\Redis;
use think\Loader;
use app\index\model\Deal as DealyModel;

class Login extends Controller
{
	//空操作
	public function _empty()
	{
		$this->redirect('index/index');
	}
	public function cart(){
		$data = input();

		$data['ptid'] = session::get('id');
		$date =  Db::name('cart')->where('ptid',$data['ptid'])->where('gid',$data['gid'])->find();
		if ($date ) {
			$this->success('已收藏');
		}
		$ret = Db::name('cart')->insert($data);
		if ($ret ==1) {
			$this->success('收藏成功');
		}


		return $this->fetch();
	}
	public function collect(){
		$ptid = session::get('id');
		$data =Db::name('cart')->field('gid,num')->where('ptid',$ptid)->select();
		foreach ($data as $key => $value) {
			$gid[] = $value['gid'];
			$num[] = $value['num'];

		}
		foreach ($gid as $key => $value) {
			$pass[] = Db::name('goods')->field('id,name,curprice,imagepath')->where('id',$value)->select();

		}
		foreach($pass as $k => $v){
			foreach($v as $k1 => $v1){
				$date[] = $v1;
			}
		}
		foreach($date as $k=>$v){
			$date[$k]['num']=$num[$k]; //引用方式插入第三个项bai。
		}
		foreach ($date as $key => $value) {
       $image[] = str_replace("\\","/",substr($value['imagepath'],0,52));
   }   

   for($i=0; $i<count($image); $i++){
    $date[$i]['image'] = $image[$i];
}

$this->assign('date',$date);

return $this->fetch();
}
public function collect1(){
$ptid = session::get('id');
		$data =Db::name('cart')->field('gid,num')->where('ptid',$ptid)->select();
		
		
		if(!$data){
           
		}else{
			foreach ($data as $key => $value) {
			$gid[] = $value['gid'];
			$num[] = $value['num'];

		}
		foreach ($gid as $key => $value) {
			$pass[] = Db::name('goods')->field('id,name,curprice,imagepath')->where('id',$value)->select();

		}
		foreach($pass as $k => $v){
			foreach($v as $k1 => $v1){
				$date[] = $v1;
			}
		}
		foreach($date as $k=>$v){
			$date[$k]['num']=$num[$k]; //引用方式插入第三个项bai。
		}
		foreach ($date as $key => $value) {
       $image[] = str_replace("\\","/",substr($value['imagepath'],0,52));
   }   

   for($i=0; $i<count($image); $i++){
    $date[$i]['image'] = $image[$i];
}

$this->assign('date',$date);

return $this->fetch();
}
	}
public function collect2(){
		$ptid = session::get('id');
		$data =Db::name('cart')->field('gid,num')->where('ptid',$ptid)->select();
		
		
		if(!$data){
           
		}else{
			foreach ($data as $key => $value) {
			$gid[] = $value['gid'];
			$num[] = $value['num'];

		}
		foreach ($gid as $key => $value) {
			$pass[] = Db::name('goods')->field('id,name,curprice,imagepath')->where('id',$value)->select();

		}
		foreach($pass as $k => $v){
			foreach($v as $k1 => $v1){
				$date[] = $v1;
			}
		}
		foreach($date as $k=>$v){
			$date[$k]['num']=$num[$k]; //引用方式插入第三个项bai。
		}
		foreach ($date as $key => $value) {
       $image[] = str_replace("\\","/",substr($value['imagepath'],0,52));
   }   

   for($i=0; $i<count($image); $i++){
    $date[$i]['image'] = $image[$i];
}

$this->assign('date',$date);

return $this->fetch();
		}
		}
public function deallist(){
   $id = session::get('id');
   $data = Db::name('deal')->field('gid,out_trade_no,total_amount,num,refund,trade_no')->where('ptid',$id)->select();
   var_dump($data);

   foreach ($data as $key => $value) {
   	$name[] = Db::name('goods')->field('name,imagepath')->where('id',$value['gid'])->find();
   }
   
   foreach ($name as $key1 => $value1) {
   	
   

   		$image[] = str_replace("\\","/",substr($value1['imagepath'],0,52));
   		$data[$key1]['image'] = str_replace("\\","/",substr($value1['imagepath'],0,52));
   		$data[$key1]['name'] = $value1['name']; 
   }
    
   $this->assign('data',$data);
   //$this->assign('data1',$data1);
  return $this->fetch();
}
		

public function del(){
	$date = input();
	$ret = Db::table('shop_cart')->where('gid',$date['gid'])->delete();

	if($ret){
		$data = '移除成功';

	}else{
		$data = '移除失败';
	}

	 return json($data);
}
//ajax
// public function del1(){
// 	$date = input();
// 	//$comma_separated = implode(",", $array);
// $ptid = session::get('id');
// $data = Db::name('cart')->field('gid,ptid')->where('ptid',$ptid)->select();
// //print_r($data);

// $price = explode(",", $date['price']);
	
// 	$num =$date['num'];
	
// 		print_r($date);
//数组有空取有数据的下标
// 	foreach ($num as $key => $value) {
// 		if($value){
// 			$num1[] =$data[$key];
// 		}
// 	}
// 	foreach ($price as $key => $value) {
// 		$num1[$key]['price'] = $value;
// 	}
// 	foreach ($num as $key => $value) {
// 		$num1[$key]['num'] = $value;
// 	}

//  print_r($num1);

// 	 return json($date);
// }
public function pay(){
	$data = input();
	
$id = session::get('id');
	$date=Db::name('goods')->where('id',$data['gid'])->field('name,imagepath,curprice')->find();
	$data['img']=str_replace("\\","/",substr($date['imagepath'],0,52));
	$data['name'] = $date['name'];
	$data['curprice'] = $date['curprice'];

	$data['all'] = $data['curprice']*$data['num1'];
	$this->assign('data',$data);
	

	return $this->fetch();
}
 public function pay1()
{
	$data = input();

$id = session::get('id');
	
		$date = Db::name('cart')->where('ptid',$id)->field('gid')->select();
		$gid = explode(",", $data['num1']);
		foreach ($gid as $key => $value) {
		if($value){
			$num1[] =$gid[$key];
		}
	}

	 foreach ($gid as $key => $value) {
		if($value){
			$num2[] =$key;
		}
	}
	
	 	foreach ($num2 as $key => $value) {
	 		$gid1[] =$date[$value];
	 	}
	 	
	 	// 
	 	foreach ($gid1 as $key => $value) {
	 		
	 		foreach ($value as $key1 => $value1) {
	 			$date1[]=Db::name('goods')->where('id',$value1 )->field('id,name,imagepath,curprice')->find();
	 		}
	 		
	 	}
	 	foreach ($date1 as $key2 => $value2) {
	 			$date1[$key2]['image'] = str_replace("\\","/",substr($value2['imagepath'],0,52));
	 			unset($date1[$key2]['imagepath']);

	 		}
	 		foreach($date1 as $k=>$v){
			$date1[$k]['num']=$num1[$k]; //引用方式插入第三个项bai。
		}
	 	

	$this->assign('data',$date1);
     return	$this->fetch();
	// $data['ptid'] = secho 11;ssion::get('id');
	// var_dump($data);

}
public function pay2()
{
	$id = session::get('id');
	$data = input();

	foreach ($data as $key => $value) {
		
			$v[] = explode(",", $value);
		
		
	}
	 	foreach ($v as $key => $value) {
		foreach ($value as $key1 => $value1) {
			if(strlen($value1)!=0){
     $date[$key1][] = $value1;
			}
		}
	}
	$date = array_values($date);

		
	foreach ($date as $key => $value) {
		
		$params1 = [
                //商户订单号，商户网站订单系统中唯一订单号，必填
			'out_trade_no'  =>  $value[2].date('YmdHimi'),
                //订单名称，必填
			'trade_name'       => $value[2].date('Himi').$value[0],
                //付款金额，必填
			'total_amount'  =>   $value[1],
                //描述
			't_body'        =>  $value[0],
			'num'           =>$value[0],
			'ptid'          =>$id,
			'gid'           =>$value[2],
			'trade_no'      =>date('YmdHimi'),
			
		];
		
		
		Db::name('deal')->insert($params1);
	
	}
		 
 $params = [
                //商户订单号，商户网站订单系统中唯一订单号，必填
			'out_trade_no'  =>  $date[0][2].date('YmdHimi'),
                //订单名称，必填
			'trade_name'       => $date[0][2].date('Himi').$date[0][0],
                //付款金额，必填
			     
			'total_amount'  =>  0,
                //描述
			
			
			't_body'      =>$id.md5(sizeof($date)),
		];
	
for ($i=0; $i <sizeof($date); $i++) { 
	
		
                //付款金额，必填
			$params['total_amount']  =   $date[$i][1]+$params['total_amount'] ;
         
}
	
	

		//$ret = Db::name('deal')->insert($params);
import('alipay.pagepay.pagepay',EXTEND_PATH);
		
		\Pagepay::pay($params);
//   foreach ($date as $key => $value) {
//   	var_dump($value);
     
//   	$total_amount = $value[2];
// 	if($total_amount){
// 		$params = [
//                 //商户订单号，商户网站订单系统中唯一订单号，必填
// 			'out_trade_no'  =>  $value[2].date('YmdHismi'),
//                 //订单名称，必填
// 			'trade_name'       => $value[3].date('Hismi').$value[0],
//                 //付款金额，必填
// 			'total_amount'  =>  $total_amount,
//                 //描述
// 			't_body'        =>  $value[0],
// 			'num'           =>$value[1],
// 		];
// 		//$ret = Db::name('deal')->insert($params);
// import('alipay.pagepay.pagepay',EXTEND_PATH);
// 		var_dump($params);
// 		\Pagepay::pay($params);
	// }

 //  }

	

			
		
		
	

}


	//签到页面
public function signin()
{
	$id = session::get('id');
$redis = new Redis();
$handle =$redis->handler();
$ret = $handle->BITCOUNT($id);
$this->assign('num',$ret);
return $this->fetch();
}
public function signin1()
{
	$id = session::get('id');
	$redis = new Redis();

	$handle =$redis->handler();
	$time = date('d');
	$ret = $handle->setbit ($id,$time,1);
	if ($ret!=1) {
		return $this->success('签到成功','login/signin');	
	} else {
		return $this->error('今天已经签到');
	}

}

public function index(){
	return $this->fetch();
}

    //电脑支付宝接口
public function index2(){
        //付款金额

	$total_amount = input('WIDtotal_amount');
	if($total_amount){
		$params = [
                //商户订单号，商户网站订单系统中唯一订单号，必填
			'out_trade_no'  =>  input('gid').date('YmdHimi'),
                //订单名称，必填
			'trade_name'       => input('gid').input('WIDsubject'),
                //付款金额，必填
			'total_amount'  =>  $total_amount,
                //描述
			't_body'        =>  input('WIDbody'),
			'num'           =>  input('num'),
		];
		import('alipay.pagepay.pagepay',EXTEND_PATH);
		$ret = Db::name('deal')->insert($params);

		\Pagepay::pay($params);
	}
}

    //异步通知地址
public function notify_url(){
        /* *
         *************************页面功能说明*************************
         * 创建该页面文件时，请留心该页面文件中无任何HTML代码及空格。
         * 该页面不能在本机电脑测试，请到服务器上做测试。请确保外部可以访问该页面。
         * 如果没有收到该页面返回的 success 信息，支付宝会在24小时内按一定的时间策略重发通知
         */
        import('alipay.pagepay.service.AlipayTradeService',EXTEND_PATH);

        //$arr = $this->request->param();使用这个无法接受数据
        $arr = $_POST;
        $alipaySevice = new \AlipayTradeService(config('alipay'));
        $alipaySevice->writeLog(var_export($arr, true));
        $result = $alipaySevice->check($arr);

        /* 实际验证过程建议商户添加以下校验。
        1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
        2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
        3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
        4、验证app_id是否为该商户本身。
        */
        if ($result) {//验证成功
            //商户订单号
        	$out_trade_no = $arr['out_trade_no'];
            //支付宝交易号
        	$trade_no = $arr['trade_no'];
            //交易状态
        	$trade_status = $arr['trade_status'];

            //TRADE_FINISHED：交易完成，  TRADE_SUCCESS：支付成功
        	if ($arr['trade_status'] == 'TRADE_FINISHED' || $arr['trade_status'] == 'TRADE_SUCCESS') {
                //做逻辑处理，例如：保存数据
        		file_put_contents("../extend/sites.txt",implode("，",$arr).PHP_EOL,FILE_APPEND | LOCK_EX);
        	}
        	echo "success";
        } else {
            //验证失败
        	echo "fail";
        }
    }

    //同步跳转，支付成功,由客户的浏览器触发的一个通知
    public function return_url(){
        /* *
         * 功能：支付宝页面跳转同步通知页面
         * 版本：2.0
         * 修改日期：2017-05-01
         * 说明：
         * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。

         *************************页面功能说明*************************
         * 该页面可在本机电脑测试
         * 可放入HTML等美化页面的代码、商户业务逻辑程序代码
         */
        import('alipay.pagepay.service.AlipayTradeService',EXTEND_PATH);

        //$arr = $this->request->param();
        $arr = $_GET;

        $alipaySevice = new \AlipayTradeService(config('alipay'));
        $result = $alipaySevice->check($arr);

        /* 实际验证过程建议商户添加以下校验。
        1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
        2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
        3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
        4、验证app_id是否为该商户本身。
        */
        if ($result) {//验证成功
            //做逻辑处理，例如：保存数据
            // echo "<pre>";
            //  echo 11;
                 $data['ptid'] = session::get('id');//用户id
                 

 $data['out_trade_no'] = $arr['out_trade_no'];//商户订单号 ：
 $data['trade_no'] = $arr['trade_no'];
 $data['total_amount'] = $arr['total_amount'];
 $data['app_id'] = $arr['app_id'];
 $data['gid'] = substr($arr['out_trade_no'],0,-16);

 $deal =new DealyModel();


 $ta = Db::name('deal')->where('ptid',$data['ptid'])->field('gid')-> where('trade_no',substr($arr['out_trade_no'],-16))->select();


 if(sizeof($ta)!=0){
$ret = Db::name('deal')->where('trade_no',substr($arr['out_trade_no'],-16))->update(['trade_no'=>$data['trade_no']]);


for ($i=0; $i <sizeof($ta) ; $i++) { 
	Db::name('cart')->where('gid',$ta[$i]['gid'])->delete();
}
Db::name('deal')->where('gid',substr($arr['out_trade_no'],-16))->update(['trade_no'=>$data['trade_no']]);
$this->success('支付成功',url('login/collect1'));
 } 
 else {
 	$ret1 = $deal->allowField(true)->save($data,['out_trade_no' => $data['out_trade_no']]);
 if ($ret1) {
 	
 	$this->success('支付成功',url('index/shop6',array('id'=> $data['gid'])));
     	# code...
 } else {
 	$this->error('支付失败');
 }
 }
 
 

 


 //款项
 //total_amount
 // auth_app_id app_id 2016102600766363 商家收款码
 // seller_id 2088102181176458  商户UID2088102181176458
 //trade_no] => 2020102722001440800501086253 支付宝交易号
 print_r($arr);
            //file_put_contents("../extend/sites.txt",implode("，",$arr).PHP_EOL,FILE_APPEND | LOCK_EX);
} else {
            //验证失败
	echo "验证失败";
}
}
    //交易查询
public function query(){

        //商户订单号
	$trade_no = input('WIDTQout_trade_no');
	echo $trade_no;
//        return;

	if($trade_no){
		import('alipay.pagepay.query',EXTEND_PATH);
		$response = \Query::exec($trade_no);
		print_r($response);
	}
}
    //退款
public function refund(){
        //付款金额
	var_dump(input());
	$total_amount = input('price');
	if($total_amount){
		$params = [
                //商户订单号，商户网站订单系统中唯一订单号，必填
			'out_trade_no'      =>  input('out_trade_no'),
                //付款金额，必填
			'refund_amount'     =>  $total_amount,
                //退款单号，如果是部分退款，必填
			'out_request_no'    =>  input('trade_no'),
		];
var_dump($params);

		import('alipay.pagepay.refund',EXTEND_PATH);
		
		$res = \Refund::exec($params);
if($res['msg'] =='Success'){
	var_dump(1);
	Db::name('deal')->where('out_trade_no',input('out_trade_no'))->update(['refund'=>1]);
	//echo "<pre>";
		// print_r($res);
	$this->success('已提交申请','login/deallist');
}else {
	var_dump('sb');
	$this->error('失败');
}

		

	}
}
    //退款查询
public function refundquery(){
        //商户订单号
	$params['out_trade_no'] = input('WIDRQout_trade_no');
        //退款请求号
	$params['out_request_no'] = input('WIDRQout_request_no');

	if($params['out_trade_no']){
		import('alipay.pagepay.RefundQuery',EXTEND_PATH);
		$response = \RefundQuery::exec($params);
		echo "<pre>";
		print_r($response);
	}
}

}
