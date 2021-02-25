<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\xamp\htdocs\ht\public/../application/admin\view\index\productcategory.html";i:1582896100;}*/ ?>
﻿<!DOCTYPE HTML>
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
<link rel="stylesheet" type="text/css" href="/ht/public/static/js/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/js/css/style.css" />
<link rel="stylesheet" href="/ht/public/static/img/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<!--[if IE 6]>
<script type="text/javascript" src="/ht/public/static/img/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>产品分类</title>
</head>
<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品分类 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<span style="color: red">点击分类，可删除分类</span>
<table class="table">
	<tr>
		<td width="200" class="va-t"><ul id="treeDemo" class="ztree"></ul></td>
		<td class="va-t"><iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=390px SRC="productcategoryadd.html"></iframe></td>
	</tr>
</table>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/ht/public/static/img/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/ht/public/static/img/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/ht/public/static/css/js/H-ui.min.js"></script>
<script type="text/javascript" src="/ht/public/static/js/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/ht/public/static/img/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script> 
<script type="text/javascript">
	var zNodes;
	$.ajax({
		url:"<?php echo url("admin/index/productajax"); ?>",
		type:'get',
		dataType:'json',
		async:false,
		success:function(data){
			zNodes=data;
			console.log(data);
		}
	});
var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "id",
			pIdKey: "pid",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {

		$.ajax({
		url:"<?php echo url("productdel"); ?>",
		type:'post',
		data:{id:treeNode.id},
		dataType:'json',
		async:false,
		success:function(data){
		console.log(data);
			if(data==1){
				alert("删除成功"); parent.location.href="<?php echo url('admin/index/productcategory'); ?>";
			}else{
				alert(data); parent.location.href="<?php echo url('admin/index/productcategory'); ?>";
			}
		}
		
	})
		}
	}
};


		
var code;
		
function showCode(str) {
	if (!code) code = $("#code");
	code.empty();
	code.append("<li>"+str+"</li>");
}
		
$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	demoIframe = $("#testIframe");
	//demoIframe.on("load", loadReady);
	var zTree = $.fn.zTree.getZTreeObj("tree");
	//zTree.selectNode(zTree.getNodeByParam("id",'11'));
});
</script>
</body>
</html>