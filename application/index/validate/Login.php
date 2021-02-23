<?php
namespace app\index\validate;
use think\Validate;
class Login extends Validate
{
	protected $rule = [
		'name' => 'require|min:1|max:25',
		'password' => 'require|min:6|max:10',

		'captcha' => 'require',
	];
	protected $message = [
		' name.require'=> '用户名不能222为空',
		'name.min'=> '用户名最少不能少于1个字符',
		'name.max' => '用户名最多不能超过25个字符',
		' password.require'=> '密码不1能为空',
		'password.min'=> '密码最少不能少于6个字符',
		'password.max' => '密码最多不能超过10个字符',
		'require.require'=> '验证码不能为空',
		
	];
}