﻿<?php
return [	
		//应用ID,您的APPID。
		'app_id' => "",

		//商户私钥
		'merchant_private_key' => "",
		
		//异步通知地址
		'notify_url' => "http://alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://alipay.trade.page.pay-PHP-UTF-8/return_url.php",
// 'notify_url' => "http://localhost/ht/public/notify_url.php",
		
// 		//同步跳转
// 		'return_url' => "http://localhost/ht/public/return_url.php",
		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "",
];