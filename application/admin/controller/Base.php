<?php
namespace app\admin\controller;
use think\Controller;
use think\Loader;
use think\Db;


class Base extends Controller
{
     public function _initialize()
		{
			$id = session('id');
			// var_dump($id);
			$name = session('name');
			$data =Db::name('user')->where('id',$id)->find();
			if (!$data||$name!=$data['username']) {
				$this->error('请先登录','admin/admin/login');
			}
			
			
		
		}

	// public function _initialize()
	// 	{
	// 		Loader::import("org/Auth",EXTEND_PATH);
	// 		parent::_initialize();
		 
	// 	}
		// public function att(){
		// 	$shop_auth_rule1=<<<DOC
		// 		CREATE TABLE `shop_auth_rule1` (
		// 		    `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
		// 		    `name` char(80) NOT NULL DEFAULT '',
		// 		    `title` char(20) NOT NULL DEFAULT '',
		// 		    `type` tinyint(1) NOT NULL DEFAULT '1',
		// 		    `status` tinyint(1) NOT NULL DEFAULT '1',
		// 		    `condition` char(100) NOT NULL DEFAULT '',  # 规则附件条件,满足附加条件的规则,才认为是有效的规则
		// 		    PRIMARY KEY (`id`),
		// 		    UNIQUE KEY `name` (`name`)
		// 		) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
		// 		DOC;
		// 		$num =Db::execute($shop_auth_rule1);
		// 		var_dump($num);
		// 	}
}