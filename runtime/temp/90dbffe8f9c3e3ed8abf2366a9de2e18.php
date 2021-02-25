<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\xamp\htdocs\ht\public/../application/admin\view\index\productcategoryadd.html";i:1571303229;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/ht/public/static/img/html5shiv.js"></script>
<script type="text/javascript" src="/ht/public/static/img/respond.min.js"></script>

<![endif]-->
<link rel="stylesheet" type="text/css" href="/ht/public/static/css/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/js/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/img/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/js/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/ht/public/static/img/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加产品分类</title>
</head>
<body>
<div class="page-container">
	<form action="<?php echo url('admin/index/type_add'); ?>" method="post" class="form form-horizontal" id="form-user-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>
				分类名称：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<input type="text" class="input-text" value="" placeholder="" id="user-name" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">备注：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<span class="select-box">
  <select class="select" size="1" name="id">
    <option value="" selected>顶级select</option>
   
  
    <?php foreach($data as $vo): ?>
 <option value="<?php echo $vo['id']; ?>"><?php echo $vo['level']; ?>级分类<?php echo $vo['name']; ?></option>
<?php endforeach; ?>
   
  </select>
</span>
				
				
			</div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-2">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/ht/public/static/img/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/ht/public/static/img/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/ht/public/static/css/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/ht/public/static/js/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/ht/public/static/img/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/ht/public/static/img/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/ht/public/static/img/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	
});
</script>
</body>
</html>