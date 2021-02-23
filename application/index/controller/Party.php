<?php 
//声明命名空间
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\Session;
use app\index\model\Party as PartyModel;
use app\index\validate\Party as PartyValidate;
use app\index\validate\Login as LoginValidate;
use app\index\validate\Update as UpdateValidate;

class Party extends Controller{

	public function index()
    {
        
        $type = Db::name('type')->where('pid', 0)->select();

        foreach ($type as $key => $value) {

            $type2 = Db::name('type')->where('pid', $value['id'])->select();
            $type[$key]['child'] = array();


            foreach ($type2 as $k => $v) {
                array_push($type[$key]['child'], $v);
                $type3 = Db::name('type')->where('pid', $v['id'])->select();
                $type[$key]['child'][$k]['child2'] = array();               
                foreach ($type3 as $v2) {
                    array_push($type[$key]['child'][$k]['child2'], $v2);
                }
            }

        }
        
        $this->assign('type',$type);
        return $this->fetch();
    }

    //登陆页面
	public function login(){
			
		return $this->fetch();
	}
    //验证登陆
	public function login1(){
	
		$data =  input('');
		$validate = new loginValidate();
		$result = $validate->check($data);
		if (!$result) {
			var_dump($validate->getError());
			$this->error($validate->getError());
		}
		if (!captcha_check($data['captcha'])){
			$this->error('验证码错误');
		}
		$res = Db::name('party')->where('binary name = :name',['name'=>$data['name']])->find();
		if ($res) {
			if (md5($data['password'])==$res['password']) {
				session('id',$res['id']);
				session('name',$res['name']);
				$this->success('登陆成功','index/index');
			}else  {
				$this->error('密码错误');
			}
		}else  {
			$this->error('用户不存在');
		}

	}
    //注册页面
	public function register(){
		return $this->fetch();
	}
    //注册数据保存
	public function register1(){
		$data =  input('');
    	//实例化规则验证器
		$validate = new PartyValidate();
		$result = $validate->check($data);
		if (!$result) {
			$this->error($validate->getError());
		}
        //查询用户名是否存在
		$ret = Db::name('party')->where('binary name = :name',['name'=>$data['name']])->find();

		if ($ret) {
			$this->error('用户名已存在');
		}
       //模型处理数据（加密）
		$party = new PartyModel($data);
		$res = $party->allowField(true)->save();
		if($res){
			$this->success('添加成功','index/index');

		}else{
			$this->error('添加失败');
		}
	}
    //找回密码页面
    public function retrieve(){
return $this->fetch();
    }
    
	public function retrieve1(){
		$data =  input('');
    	//实例化规则验证器
		$validate = new PartyValidate();
		$result = $validate->check($data);
		if (!$result) {
			$this->error($validate->getError());
		}
        //查询用户名是否存在
		$ret = Db::name('party')->where('binary name = :name',['name'=>$data['name']])->find();
		if ($ret) {
			if ($data['number']==$ret['number']) {
				$password = md5($data['password']);
				$res = Db::name('party')->where('id', $ret['id'])->update(['password' => $password]);
				if ($res) {
					$this->success('修改成功','party/login');
				}
			}else{
				$this->error('信息验证不符合');
			}

			
		}
    }//修改页面
    public function update(){
    	return $this->fetch();
    }
    //修改提交
    public function update1(){
    	$id = Session::get('id');
    	$data =  input('');
    	var_dump($id);
    	$validate = new UpdateValidate();
    	$result = $validate->check($data);
		if (!$result) {
			$this->error($validate->getError());
		}
		$password = md5($data['password']);
		var_dump($password);
		$return = Db::name('party')->where('id', $id)->update(['password' => $password]);
  if ($return) {
  	Session::clear();
  	$this->success('修改成功','party/login');
  }else{
  	$this->success('密码不能和现在的一样');
  }
    }

public function t(){
	  var_dump(import('alipay.pagepay.pagepay',EXTEND_PATH));
	  var_dump(import('alipay.pagepay', EXTEND_PATH,'.pagepay.php'));
}
}