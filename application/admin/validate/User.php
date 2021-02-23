<?php
namespace app\admin\validate;
use think\Validate;

class User extends Validate
{
	protected $rule =[
            'username'=>'require|min:1|max:15',
            'number'=>'require|number|length:11',
            'password'=>'require',
            'password'=>'require|min:6|max:10',
           'repassword'=>'require|confirm:password'
           
             

             
	];
	protected $message =[
          'username.require'=>'用户名不能为空',
          'username.min'=>'用户名长度不能少于1位',
          'username.max'=>'用户名长度不能多于15位',
          'number.require'=>'号码不能为空',
          'number.number'=>'号码必须是数字',
          'number.length'=>'号码长度为11',
          'password.require'=>'密码不能为空',
          'password.min'=>'密码长度不能少于6位',
          'password.max'=>'密码长度不能多于10位',
          'repassword.require'=>'重复密码不能为空',
          'repassword.confirm'=>'重复密码必须与密码一致',
        
        
	];
}