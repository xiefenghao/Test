<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\validate\User as UserValidate;


class Admin extends Controller
{

    public function login()
    {
        return $this->fetch();
    }

    public function login1()
    {
        $data = input();
        $data['password'] = md5($data['password']);
        //var_dump($data);
        $ret = Db::name('user')->where('binary username = :username', ['username' => $data['username']])->find();
        if (!$ret) {
            $this->error('用户名不存在');
        } elseif ($data['password'] != $ret['password']) {
            // var_dump($ret);
            $this->error('密码错误');
        } else {
            session('name', $data['username']);
            session('id', $ret['id']);
            $this->success('登陆成功', 'admin/index/index');
        }
    }
     public  function  out(){
         session(null);
         $this->success('退出成功', 'admin/admin/login');
     }
}

