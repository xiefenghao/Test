<?php
namespace app\index\model;
use think\Model;

class Party extends Model{
	protected $auto =['password','repassword'];
    protected $insert =['create_time'];
    protected function setPasswordAttr($value)
{
  return md5($value);
}
 protected function setRepasswordAttr($value)
{
  return md5($value);
}


}
