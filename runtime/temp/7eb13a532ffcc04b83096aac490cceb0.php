<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\xamp\htdocs\ht\public/../application/index\view\party\register.html";i:1602157092;}*/ ?>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	 <form class="form form-horizontal" action="<?php echo url('index/party/register1'); ?>" method="post">
    	账号：
    	<input type=" text" placeholder="账户" name="name">
   
      密码：
          <input id="" name="password" type="password" placeholder="重复密码" >
      重复密码：
          <input id="" name="repassword" type="password" placeholder="cf密码" >
       手机号：
          <input type="text" name="number">
          <input name="" type="submit" class="btn btn-success radius size-L" value="注册">
          <input name="" type="reset" class="btn btn-default radius size-L" value="取消">
        </form>
</body>
</html>