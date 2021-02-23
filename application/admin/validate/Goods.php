<?php
namespace app\admin\validate;
use think\Validate;

class Goods extends Validate
{
	protected $rule =[
            'name'=>'require|min:1|max:15',
            'tid'=>'require',
          
            'curprice'=>'require',
            'inventory'=>'require',
            'stauts'=>'require',
            //'text'=> 'require',
           
             

             
	];
	protected $message =[
          'name.require'=>'商品名称不能为空',
          'name.min'=>'商品名称长度不能少于1位',
          'name.max'=>'商品名称长度不能多于15位',
          'curprice.require'=>'现价不能为空',
           'inventory.require'=>'库存量不能为空',
           'stauts.require'=>'状态不能为空',
           //'text.require'=>'商品描述不能为空',
           'tid.require'=>'分类id不能为空',
          
         
        
	];
}