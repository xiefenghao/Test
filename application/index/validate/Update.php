<?php
namespace app\index\validate;
use think\Validate;
class Update extends Validate
{
	protected $rule = [
		
		'password' => 'require|min:6|max:10',
		  'repassword'=>'require|confirm:password',
	
	];
	protected $message = [
		
		' password.require'=> '密码不能为空',
		 'password.min'=> '密码最少不能少于6个字符',
		'password.max' => '密码最多不能超过10个字符',
		' repassword.require'=> '重复密码不能为空',
		'repassword.confirm' => '重复密码和密码不一致',
		
	];
}