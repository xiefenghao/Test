<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\xamp\htdocs\ht\public/../application/index\view\party\login.html";i:1602676811;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>登录 </title>
<link rel="stylesheet" type="text/css" href="/ht/public/static/bst/dist/css/bootstrap.min.css">
<script src="/ht/public/static/bst/dist/js/bootstrap.min.js"></script>
<script src="/ht/public/static/bst/dist/js/jquery-3.0.0.min.js"></script>

</head>
<body>

<div class="container" style="padding-top: 100px">
  <div class="row">
   
    <div class="col-sm-5 offset-3 ">
    	<div style="border-style:solid;
    border-width:1px;height: 400px;width: 300px">
    	<form  action="<?php echo url('index/party/login1'); ?>" method="post" style="padding-top: 10px">
		&nbsp&nbsp&nbsp&nbsp账号：
		<input type=" text" placeholder="账户" name="name">
		 <br><br> 
		&nbsp&nbsp&nbsp&nbsp密码：
		<input id="" name="password" type="password" placeholder="密码" class="input-text size-L"> 
		<br><br> 
		验证码：
		<input id="" name="captcha" type="text" placeholder="验证码" >
		<img src="<?php echo captcha_src(); ?>" class="verify" style="height: 42px;" onclick="javascript:this.src='<?php echo captcha_src(); ?>?rand='+Math.random()" >   
<br><br> 
		<input name="" type="submit"  value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
		<input name="" type="reset"  value="取消">

	</form>
    </div>
    
    </div>
   
    </div>
  </div>


	

</body>
</html>