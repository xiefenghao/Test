<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\xamp\htdocs\ht\public/../application/index\view\party\retrieve.html";i:1602416830;}*/ ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>找回</title>
</head>
<body>
	 <form class="form form-horizontal" action="<?php echo url('index/party/retrieve1'); ?>" method="post">
    	账号：
    	<input type=" text" placeholder="账户" name="name">
   
    
       手机号：
          <input type="text" name="number">
            新密码：
          <input id="" name="password" type="password" placeholder="重复密码" >
      重复密码：
          <input id="" name="repassword" type="password" placeholder="密码" >
          <input name="" type="submit" class="btn btn-success radius size-L" value="找回">
          <input name="" type="reset" class="btn btn-default radius size-L" value="取消">
        </form>
</body>
</html>