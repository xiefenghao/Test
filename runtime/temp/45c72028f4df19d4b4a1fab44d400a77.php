<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"E:\wamp64\www\ht\public/../application/admin\view\index\a404.html";i:1576667438;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<script src="/ht/public/static/bf/js/jquery-3.0.0.min.js"></script>
<link href="/ht/public/static/bf/css/bootstrap.min.css" rel="stylesheet">

<link href="/ht/public/static/bf/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="/ht/public/static/bf/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
<link href="/ht/public/static/bf/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>
   

<script src="/ht/public/static/bf/js/plugins/sortable.js" type="text/javascript"></script>
<script type="text/javascript" src="/ht/public/static/bf/js/fileinput.js"></script>
<script type="text/javascript" src="/ht/public/static/bf/js/locales/zh.js"></script>
<script src="/ht/public/static/bf/themes/explorer-fa/theme.js" type="text/javascript"></script>
<!-- <script src="/ht/public/static/bf/themes/fa/theme.js"></script> -->





<body>
<form enctype="multipart/form-data">
    <div class="form-group">
        <input id="file-0" type="file" multiple class="file">
    </div>
</form>

</body>
<script>

    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });

    var id=2;
    //图片上传
    initFileInput("file-0","<?php echo url('admin/index/app'); ?>");
    //初始化fileinput控件（第一次初始化）
    function initFileInput(ctrlName,uploadUrl){
        var control=$('#'+ctrlName);
        control.fileinput({
            language:'zh',//设置语言
             uploadAsync: true,
           
            uploadUrl:uploadUrl,//上传地址
            allowedFileExtendsions:['jpg','png','gif','jpeg'],//接收的文件后缀
            showUpload:true,//是否显示上传按钮
            showCaption:true,//是否显示标题
            showPreview:true,//是否显示预览图，默认true
            showRemove:true,//是否显示删除/清空按钮，默认true。
            browseClass:"btn btn-primary",//按钮样式
            previewFileIcon:"<i class='glyphicon glyphicon-king'></i>",
            minFileCount:4,
            maxFileCount:4,//允许同时上传的最大文件数
            dropZoneEnabled:true,//是否显示拖拽区域
            layoutTemplates :{
            actionUpload:'',//去除上传预览缩略图中的上传图片
          actionZoom:'',
            },
            initialPreviewConfig:{
                caption:ctrlName,
                width:'500px',
                url:uploadUrl,
                key:101,
                success:function(){

                }
            }



        });

    }
    //监听事件
    $("#file-0").on("fileuploaded",function(event,data,previewId,index){
                    // $("#name1").attr("value",item);//赋值给input
            if(data.response!=1){
                $("#subbtn").html('已有图片');
   
             }else{
                $("#subbtn").html('上传成功');//动态插入html    //$('#subbtn').text(data.response);
            }                     
});

</script>

</div><p id="subbtn"></p>
</html>