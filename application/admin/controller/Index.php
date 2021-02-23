<?php

namespace app\admin\controller;

use think\Controller;use app\admin\controller\Base;
use think\Db;
use app\admin\validate\Goods as GoodsValidate;
use app\admin\validate\User as UserValidate;
use think\Loader;
use app\admin\model\Goods as Goods;

class Index extends Base
{
    public function _initialize()
    {
        Loader::import("org/Auth", EXTEND_PATH);
        parent::_initialize();
    }

    public function addrole()
    {
        $data = $_POST;
        //var_dump($data);
        $ret = Db::name('auth_rule')->where('name', $data['name'])->find();
        if ($ret) {
            $this->error('节点已存在');
        } else {
            $ret1 = Db::name('auth_rule')->insert($data);
            if ($ret1) {
                var_dump($ret1);
                $this->success('添加成功', 'admin/index/adminroleadd1');
            }
        }
    }

    public function add()
    {
        return $this->fetch();
    }

    //注册页面
    public function register()
    {
        return $this->fetch();
    }

    //注册管理员
    public function register1()
    {
        $data = input();

        $data['create_time'] = date('Y-m-d H:i:s', time());
        var_dump($data);


        $validate = new UserValidate();
        $result = $validate->check($data);
        if (!$result) {
            $this->error($validate->getError());
        }
        $data['password'] = md5($data['password']);
        $data['repassword'] = md5($data['repassword']);
        unset($data['repassword']);
        $ret = Db::name('user')->where('binary username = :username', ['username' => $data['username']])->find();
        if ($ret) {
            $this->error('用户名已存在');
        }
        $ret1 = Db::name('user')->field('number')->where('number', $data['number'])->find();
        var_dump($ret1);
        if ($data['number'] == $ret1['number']) {
            $this->error('手机号码已存在');
        }

        $ret2 = Db::name('user')->insert($data);
        if ($ret2) {
            $this->success('添加管理员成功', 'admin/index/register', 1);
        }

    }

    public function liu()
    {
        var_dump($_GET);
    }

    //商品图片上传
    public function app()
    {
        $num = Db::name('goods')->field('id')->where('attributes', 8)->select();
        //var_dump(count($num));
        $num1 = count($num);
        if ($num1 > 3) {
            //$str= '已有图片';
            $num1 = 0;
            echo json_encode($num1);
        } else {


            // 获取表单上传文件
            $files = request()->file();
            // echo 1;
            // dump($files);exit;

            foreach ($files as $file) {
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->rule('date')->move(ROOT_PATH . 'public' . DS . 'upImg');
                $keyName = $file->getInfo()['name'];
                if ($info) {

                    $save = $info->getSaveName();
                    $save = str_replace("\\", '/', $save);
                    // $db=Db::name('shop');
                    $filename = '\\' . 'upImg' . '/' . $save;
                    // $data['keyno']=$keyName;
                    // $data['path']=$filename;
                    $id = [1, 2, 3, 4];
                    $data = ['id' => $id, 'path' => $filename];

                    //var_dump($filename);
                    //echo $filename;
                    //$res=Db::name('shop')->insert($data);
                    // select * from table order by id DESC limit 1
                    //$ret= Db::name('goods')->where('id',2)->find();
                    $dete = [
                        'name' => 11,
                        'tid' => 113,
                        'tpid' => 0,
                        'unit' => 1,
                        'attributes' => '8',
                        'imagepath' => $filename,
                        'number' => 2,
                        'curprice' => 12,
                        'oriprice' => 13,
                        'inventory' => 11,
                        'strict' => 0,
                        'already' => 2,
                        'freight' => 2,
                        'stauts' => '0',
                        'text' => '<p>22</p>',
                        'datemin' => null,
                        'datemax' => null,];
                    //  $ret1= Db::name('goods')->field('imagepath')->where('id',$ret);
                    //  if($ret1==null){
                    //  	Db::name('goods')->insert($data['path']);
                    //  }else{
                    $ret1 = Db::name('goods')->insert($dete);
                    //var_dump($ret1);
                    //  }
                    // $filedata=['keyn'=>$data['keyno'],'paths'=>$data['path']];
                    //$path=$data['path'].','.$data['path'];
                    //echo  json_encode($info->getSaveName());

                    //var_dump( $data);
                    //dump($filename.length);
                } else {
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }

            $num1 = 1;
            echo json_encode($num1);
        }  //dump($filename);
        //echo json_encode(    $data['path']);  //dump($data['path']);
    }

    public function a404()
    {
        return $this->fetch();
    }

    public function adminadd()
    {
        return $this->fetch();
    }

    public function adminadd1()
    {
        $data = input();
        var_dump($data);
        $str = implode(",", $data['rules']);
        var_dump($str);
        $data['rules'] = $str;
        var_dump($data);
        $ret = Db::name('auth_group')->insert($data);
        if ($ret) {
            $this->success('添加角色成功');
        } else {
            $this->error('添加角色失败');
        }
    }

    public function footer()
    {
        return $this->fetch();
    }

    public function adminpasswordedit()
    {
        return $this->fetch();
    }

    public function adminlist()
    {
        return $this->fetch();
    }

    public function adminpermission()
    {
        $data = Db::name('auth_rule')->select();
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function adminrole()
    {
        return $this->fetch();
    }

    public function adminroleadd()
    {
        $data = Db::name('auth_rule')->select();
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function adminroleadd1()
    {
        return $this->fetch();
    }

    public function articleadd()
    {
        return $this->fetch();
    }

    public function articleclass()
    {
        return $this->fetch();
    }

    public function articleclassedit()
    {
        return $this->fetch();
    }

    public function articlelist()
    {
        return $this->fetch();
    }

    public function blank()
    {
        return $this->fetch();
    }

    public function changepassword()
    {
        return $this->fetch();
    }

    public function charts1()
    {
        return $this->fetch();
    }

    public function charts2()
    {
        return $this->fetch();
    }

    public function charts3()
    {
        return $this->fetch();
    }

    public function charts4()
    {
        return $this->fetch();
    }

    public function charts5()
    {
        return $this->fetch();
    }

    public function charts6()
    {
        return $this->fetch();
    }

    public function charts7()
    {
        return $this->fetch();
    }

    public function codeing()
    {
        return $this->fetch();
    }

    public function feedbacklist()
    {
        return $this->fetch();
    }

    public function header()
    {
        return $this->fetch();
    }

    public function index()
    {
        return $this->fetch();
    }

    public function index2()
    {
        return $this->fetch();
    }

    public function menu()
    {
        return $this->fetch();
    }

    public function memberlist()
    {
        return $this->fetch();
    }

    public function memberadd()
    {
        return $this->fetch();
    }

    public function memberdel()
    {
        return $this->fetch();
    }

    public function memberrecordbrowse()
    {
        return $this->fetch();
    }

    public function memberrecorddownload()
    {
        return $this->fetch();
    }

    public function memberrecordshare()
    {
        return $this->fetch();
    }

    public function membershow()
    {
        return $this->fetch();
    }

    public function memu()
    {
        return $this->fetch();
    }

    public function meta()
    {
        return $this->fetch();
    }

    public function pictureadd()
    {
        return $this->fetch();
    }

    //添加商品
    public function productaddadd()
    {
        $auth = \Auth::instance();
        $list = $auth->getGroups(39);
        // var_dump(request()->module().'/'.request()->controller().'/'.lcfirst(request()->action()));
        $bool = $auth->check(request()->module() . '/' . request()->controller() . '/' . lcfirst(request()->action()), 39);

        var_dump($list);
        var_dump($bool);
        if ($bool) {

            $image = Db::name('goods')->field('imagepath')->where('attributes', 8)->select();
            if (!$image) {
                return $this->error('先上传图片');
            }

            $data = input();
            $val = new GoodsValidate();

            if (!$val->check($data)) {
                $this->error($val->getError());
                exit;
            }
            $tid = explode(',', $data['tid']);
            $data['tid'] = $tid['0'];
            $data['tpid'] = $tid['1'];
            dump($data);
            //包邮
            if ($data['attributes'] == 5) {
                $data['freight'] = 0;
            }
            //促销限购
            if ($data['attributes'] != 4) {
                $data['strict'] = 0;
            } elseif ($data['curprice'] > $data['oriprice']) {
                $curprice = $data['curprice'];
                $data['curprice'] = $data['oriprice'];
                $data['oriprice'] = $curprice;
            }
            //限时

            if ($data['attributes'] != 6) {
                $data['datemin'] = null;
                $data['datemax'] = null;
            }
            dump($data);
            //   	exit;
            //图片删除
            unset($data['file']);
            $imagepath = Db::name('goods')->field('imagepath')->where('attributes', 8)->select();
            dump($imagepath);
            foreach ($imagepath as $val) {
                $val = join(",", $val);
                $path[] = $val;
            }
            dump($path);
            $data['imagepath'] = implode(",", $path);
            Db::name('goods')->where('attributes', 8)->delete();
            $ret = Db::name('goods')->insert($data);
            if ($ret) {
                return $this->success('添加商品成功!');
            } else {
                return $this->error('添加商品失败!');
            }
        } else {
            return $this->error('没有权限!');
        }
    }

//x修改商品信息
    public function productaddadd1()
    {
        $data = input();

        $val = new GoodsValidate();

        if (!$val->check($data)) {
            $this->error($val->getError());
            exit;
        }
        $tid = explode(',', $data['tid']);
        $data['tid'] = $tid['0'];
        $data['tpid'] = $tid['1'];
        dump($data);
        //包邮
        if ($data['attributes'] == 5) {
            $data['freight'] = 0;
        }
        //促销限购
        if ($data['attributes'] != 4) {
            $data['strict'] = 0;
        } elseif ($data['curprice'] > $data['oriprice']) {
            $curprice = $data['curprice'];
            $data['curprice'] = $data['oriprice'];
            $data['oriprice'] = $curprice;
        }
        //限时

        if ($data['attributes'] != 6) {
            $data['datemin'] = null;
            $data['datemax'] = null;
        }
        dump($data);
        //    exit;
        //图片删除
        unset($data['file']);
        $imagepath = Db::name('goods')->field('imagepath')->where('attributes', 8)->select();
        dump($imagepath);

        if ($imagepath) {
            foreach ($imagepath as $val) {
                $val = join(",", $val);
                $path[] = $val;
            }
            dump($path);
            $data['imagepath'] = implode(",", $path);
            Db::name('goods')->where('attributes', 8)->delete();
        } else {
            $imagepath = Db::name('goods')->field('imagepath')->where('id', $data['id'])->find();

            var_dump($imagepath);
            $data['imagepath'] = implode(',', $imagepath);
        }
        var_dump($data);

        $ret = Db::name('goods')->where('id', $data['id'])->update($data);
        if ($ret) {
            return $this->success('修改商品成功!');
        } else {
            return $this->error('修改商品失败!');
        }
    }

    public function picturelist()
    {
        return $this->fetch();
    }

    public function pictureshow()
    {
        return $this->fetch();
    }

    //删除多余图片
    public function picturedel()
    {
        $path = 'E:\wamp\www\ht\public\upImg';

        function searchDir($path, &$files)
        {

            if (is_dir($path)) {

                $opendir = opendir($path);

                while ($file = readdir($opendir)) {
                    if ($file != '.' && $file != '..') {
                        searchDir($path . '/' . $file, $files);
                    }
                }
                closedir($opendir);
            }
            if (!is_dir($path)) {
                $files[] = $path;
            }
        }

//得到目录名
        function getDir($dir)
        {
            $files = array();
            searchDir($dir, $files);
            //echo 1;
            return $files;
        }

        $filenames = getDir($path);
        var_dump($filenames);


        $pic = Db::table('shop_goods')->field('imagepath')->select();
//Db::table('think_user')->field('id,title,content')->select();
        //$pic ='11';
        dump($pic);
// return fault;
        $result = [];
//多维数组转一维数组
        array_walk_recursive($pic, function ($value) use (&$result) {
            array_push($result, $value);
        });
        var_dump($result);
        //给元素添加前缀
        array_walk(
            $result,
            function (&$value, $key, $prefix) {
                $value = $prefix . $value;
            },
            'E:\wamp\www\ht\public'
        );
        var_dump($result);

        $result = implode(",", $result);

        var_dump($result);
        // $str=str_replace("/",'\\',$result);
        // var_dump($str);

        $hello = explode(',', $result);
        var_dump($hello);
        foreach ($filenames as $key => $v1) {
            foreach ($hello as $key2 => $v2) {
                if ($v1 == $v2) {
                    unset($filenames[$key]);//删除$filenames数组同值元素
                    unset($hello[$key2]);//删除$hello数组同值元素
                }
            }
        }


        //var_dump($filenames);
        //var_dump($hello);
        foreach ($filenames as $v) {
            //echo $v;echo "<br>";
            unlink($v);
        }
        //  echo json_encode($pic);
    }

    public function productadd1()
    {
        $input = input();
        //var_dump($input);
        $data = Db::name('goods')->where('id', $input['id'])->find();
        //var_dump($data);
        if ($input['stauts'] == 0) {
            $data['stauts'] = 1;
        } else {
            $data['stauts'] = 0;
        }
        $ret = Db::name('goods')->where('id', $input['id'])->update($data);
        if ($ret) {
            $this->success('修改成功', 'admin/index/productlist');
        } else {
            $this->error('修改失败');
        }
        //return $this->fetch();
    }

    public function productadd2()
    {
        $input = input();

        $data1 = Db::name('goods')->where('id', $input['id'])->find();

        $ret = DB::name('type')->field("*,concat(path,',',id) as paths")->order('paths')->select();

        foreach ($ret as $k => $v) {
            $ret[$k]['name'] = str_repeat("|----", $v['level']) . $v['name'];
        }
        $this->assign('data', $ret);

        $this->assign('data1', $data1);
        return $this->fetch();
    }

    public function productlist()
    {
        $list = Db::name('goods')->select();
        //var_dump($list);
        //$path =explode(',', $list['imagepath']) ;
          foreach ($list as  $key=> $value) {
         $list[$key]['img'] =explode(',', $value['imagepath']);
        // $path =explode(',', $path) ;
          }
         
        $this->assign('list', $list);
        // $this->assign('list1', $path1);
// 渲染模板输出
        return $this->fetch();
    }

    public function productadd()
    {
        $ret = DB::name('type')->field("*,concat(path,',',id) as paths")->order('paths')->select();

        foreach ($ret as $k => $v) {
            $ret[$k]['name'] = str_repeat("|----", $v['level']) . $v['name'];
        }
        $this->assign('data', $ret);
        return $this->fetch();
    }

    public function productbrand()
    {
        return $this->fetch();
    }

    //删除分类
    public function productdel()
    {
        $usrid =session('id');
        //var_dump($usrid);

        $auth = \Auth::instance();
        $list = $auth->getGroups($usrid);
        //var_dump(request()->module().'/'.request()->controller().'/'.lcfirst(request()->action()));
        $bool = $auth->check(request()->module() . '/' . request()->controller() . '/' . lcfirst(request()->action()), $usrid);

       // var_dump($list);
        //var_dump($bool);
       if ($bool) {
           //var_dump(input(''));
           $id = $_POST['id'];
            //$aid = $id;

             $data =Db::name('type')->where('pid',$id)->find();

              if($data){
              	$str = "分类下有子分类不能删除";
              	echo json_encode($str);
                       }else{
              	$re = Db::name('type')->where('id',$id)->delete();
              	if($re){
              			$str =1;
              	echo json_encode($str);
              	       }
                    }
        } else {
            return "没有权限";
        }
    }

    public function productdel1()
    {
        $input = input();
        $re = Db::name('goods')->where('id', $input['id'])->delete();
        if ($re) {
            $this->success('删除成功!');
        } else {
            $this->error('删除失败');
        }
    }

    public function productcategory()
    {
        //   $auth =\Auth::instance();
        // $list = $auth->getGroups(22);

        // $bool = $auth->check(request()->module().'/'.request()->controller().'/'.lcfirst(request()->action()),22);

        //  var_dump($list);
        //   var_dump($bool);
        //if($bool){
        return $this->fetch();
        // }else{
        //    $this->error('没有权限');
        // }
    }

    public function productcategoryadd()
    {
        $ret = DB::name('type')->field("*,concat(path,',',id) as paths")->order('paths')->select();

        foreach ($ret as $k => $v) {
            $ret[$k]['name'] = str_repeat("|----", $v['level']) . $v['name'];
        }
        $this->assign('data', $ret);
        return $this->fetch();
    }

    //增加分类
    public function type_add()
    {

        $data = input('param.');
        if ($data['name'] != "" && $data['id'] != "") {
            //echo 11;
            $name = Db::name('type')->field('id')->where('name', $data['name'])->find();
            //dump($name);
            if (!$name) {


                //dump($data);
                $path = DB::name('type')->field('path')->where('id', $data['id'])->find();
                $ret['path'] = $path['path'];
                $ret['name'] = $data['name'];
                $ret['pid'] = $data['id'];
                $ret['level'] = substr_count($ret['path'], ',') + 1;
                // dump($ret);
                $ret2 = DB::name('type')->insert($ret);
                $userId = Db::name('type')->getLastInsID();
                $ret['path'] = $ret['path'] . ',' . $userId;
                $ret3 = DB::name('type')->update(['path' => $ret['path'], 'id' => $userId]);
                if ($ret3) {
                    $this->success('执行成1功!');
                } else {
                    $this->error('执行错误');
                }
            } else {
                $this->error('类别已存在');
            }
        } elseif ($data['name'] != "" && $data['id'] == "") {
            $name = Db::name('type')->field('id')->where('name', $data['name'])->find();
            // dump($name);
            if (!$name) {
                $data['pid'] = 0;
                $data['level'] = 1;
                $data['path'] = 0;
                $ret2 = DB::name('type')->insert($data);
                $userId = Db::name('type')->getLastInsID();
                $ret['path'] = $data['path'] . ',' . $userId;
                $ret3 = DB::name('type')->update(['path' => $ret['path'], 'id' => $userId]);
                if ($ret3) {
                    $this->success('执行成功!');
                } else {
                    $this->error('执行错误');
                }
            } else {
                $this->error('类别已存在');
            }
        } else {
            $this->error('请输入内容');
        }

    }

    public function productajax()
    {
        $data = DB::name('type')->field('id,pid,name')->select();
        echo json_encode($data);
    }

    public function recordbrowse()
    {
        return $this->fetch();
    }

    public function recorddownload()
    {
        return $this->fetch();
    }

    public function recordshare()
    {
        return $this->fetch();
    }

    public function systembase()
    {
        return $this->fetch();
    }

    public function systemcategory()
    {
        return $this->fetch();
    }

    public function systemcategoryadd()
    {
        return $this->fetch();
    }

    public function systemdata()
    {
        return $this->fetch();
    }

    public function systemlog()
    {
        return $this->fetch();
    }

    public function systemshielding()
    {
        return $this->fetch();
    }

    public function useradd()
    {
        return $this->fetch();
    }

    public function userlist()
    {
        return $this->fetch();
    }

    public function userpasswordedit()
    {
        return $this->fetch();
    }

    public function usershow()
    {
        return $this->fetch();
    }

    public function welcome()
    {

        return $this->fetch();
    }

    public function welcome1()
    {
        $user = new Goods($_POST);
        var_dump($user);
        $ret = $user->allowField(['imagepath'])->save();
        var_dump($ret);
        //return $this->fetch();
    }

}

