<?php

namespace app\index\controller;
use think\Session;
use think\Controller;
use think\Db;
use think\Validate;


class Index extends Controller
{
    //商城首页
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
    public function dizhi()
    {
        return $this->fetch();
    }
     public function scour()
    {
        $data = input();
        var_dump($data);
        $shop = Db::name('goods')->field('id,name,curprice,imagepath')->where('name',"like","%".$data['condition']."%")->select();
       


   foreach ($shop as $key => $value) {
       $image[] = str_replace("\\","/",substr($value['imagepath'],0,52));
   }   
   var_dump($image);
   for($i=0; $i<count($image); $i++){
    $shop[$i]['image'] = $image[$i];
}
 var_dump($shop);
$this->assign('shop',$shop);
        return $this->fetch();
    }
    public function show()
    {
        $id = input('');
        var_dump($id);
        $data =input('');
        $shop = Db::name('goods')->where('tid',$data['id'])->select();

        $this->assign('shop',$shop);
        return $this->fetch();
    }
    public function ind()
    {

     return $this->fetch();
 }

 //商品类别展示
 public function show2()
 {
   $data =input('');
   $shop = Db::name('goods')->where('tid',$data['id'])->select();

   foreach ($shop as $key => $value) {
       $image[] = str_replace("\\","/",substr($value['imagepath'],0,52));
   }   
   for($i=0; $i<count($image); $i++){
    $shop[$i]['image'] = $image[$i];
}

$this->assign('shop',$shop);
return $this->fetch();
}
public function show4()
{

    return $this->fetch();
}
public function shop()
{
 $redis = new \Redis();

//选择指定的redis数据库连接，默认端口号为6379
 $redis->connect('127.0.0.1', 6379);
//指定前面设置的密码
 $redis->auth('');

 $redis->rPush('k1','a');
 $redis->rPush('k1','b');
 var_dump($redis->rPush('k1','c'));

        // lRange() lGetRnage() 获取指定索引值范围内的所有元素
 $res = $redis->lRange('k1',0,1);
 var_dump($res);
}
public function shop1()
{
   $data =input('');
   $shop = Db::name('goods')->where('tid',$data['id'])->select();

   foreach ($shop as $key => $value) {
       $image[] = str_replace("\\","/",substr($value['imagepath'],0,52));
   }   
   for($i=0; $i<count($image); $i++){
    $shop[$i]['image'] = $image[$i];
}

$this->assign('shop',$shop);
return $this->fetch();
}
public function shop2()
{

 return $this->fetch();
}
public function shop4()
{

 return $this->fetch();
}
public function shop5()
{
    $shop = Db::name('goods')->where('tid',169)->select();
    foreach ($shop as $key => $value) {
       $image[] = str_replace("\\","/",substr($value['imagepath'],0,52));
   }   
   for($i=0; $i<count($image); $i++){
    $shop[$i]['image'] = $image[$i];
}


$this->assign('shop',$shop);

return $this->fetch();
}
public function shop6()
{
    $id = input();

  $shop = Db::name('goods')->where('id',$id['id'])->select();
$image= explode(",", $shop['0']['imagepath']);
foreach ($image as $key => $value) {
       $image1[] = str_replace("\\","/",$value);
   }   

$img1 = $image1['0'];

$this->assign('shop',$shop);
$this->assign('image1',$image1);
$this->assign('img1',$img1);
 return $this->fetch();
}public function updatedz()
{

    $data =input();
    $data['ptid'] =  Session::get('id');
    var_dump($data);
    $rules = [
        'name' => 'require|chs|min:1|max:7',
        'number' => 'require|number|length:11',
        'address' => 'require|chs|length:9,22'

    ];
    $validate = new Validate($rules);
    if(!$validate->check($data)){
        $this->error($validate->getError());
    }
     $ret = Db::name('partydz')->insert($data);
     if ($ret) {
         $this->success('地址添加成功','index/index');
     } else {
         $this->error('地址添加sb');
     }
     
}
}
