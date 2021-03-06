<?php
namespace app\index\validate;
use think\Validate;
class Party extends Validate
{
	protected $rule = [
		'name' => 'require|min:1|max:25',
		'password' => 'require|max:6|max:10|confirm',
		'number' => 'number|length:11',
	];
	protected $message = [
		' name.require'=> '用户名不能为空',
		 'name.min'=> '用户名最少不能少于1个字符',
		'name.max' => '用户名最多不能超过25个字符',
		' password.require'=> '密码不能为空',
		 'password.min'=> '密码最少不能少于6个字符',
		'password.max' => '密码最多不能超过10个字符',
		'password.confirm' => '密码不一致',
		'number.number' => '手机号必须是数字',
		
	];
}