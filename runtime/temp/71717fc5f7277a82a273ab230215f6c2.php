<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\wamp64\www\ht\public/../application/admin\view\index\productadd2.html";i:1576848343;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
	<script src="/ht/public/static/bf/js/jquery-3.0.0.min.js"></script>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/ht/public/static/img/html5shiv.js"></script>
<script type="text/javascript" src="/ht/public/static/img/respond.min.js"></script>

<![endif]-->
   

<link href="/ht/public/static/bf/css/bootstrap.min.css" rel="stylesheet">
<link href="/ht/public/static/bf/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="/ht/public/static/bf/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
<link href="/ht/public/static/bf/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>

<script src="/ht/public/static/bf/js/plugins/sortable.js" type="text/javascript"></script>
<script type="text/javascript" src="/ht/public/static/bf/js/fileinput.js"></script>
<script type="text/javascript" src="/ht/public/static/bf/js/locales/zh.js"></script>
<script src="/ht/public/static/bf/themes/explorer-fa/theme.js" type="text/javascript"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/ht/public/static/img/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<link href="/ht/public/static/img/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form action="<?php echo url('admin/index/productaddadd1'); ?>" method="post" class="form form-horizontal" id="form-article-add">
		<div >
			<label ><span class="c-red">*</span>产品标题：</label>
			<div >
				<input type="text" class="input-text" value="<?php echo $data1['name']; ?>" placeholder="" id="" name="name">
				<input type="hidden" name="id" value="<?php echo $data1['id']; ?>">
			</div>
		</div>
		
			<div >
			<label >分类：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<span class="select-box">
  <select class="select" size="1" name="tid">
   
   
  
    <?php foreach($data as $vo): ?>
 <option value="<?php echo $vo['id']; ?>,<?php echo $vo['pid']; ?>" <?php if(($vo['id']==$data1['tid'])): ?> selected="" <?php endif; ?>><?php echo $vo['level']; ?>级分类<?php echo $vo['name']; ?></option>
<?php endforeach; ?>
   
  </select>
</span>
				
				
			</div>
			<br>
		
		<div >
			<label >商品属性:</label>
			<div >
				<div >
					<input type="radio" id="checkbox-1" value="1" name="attributes"  <?php if(($data1['attributes']==1)): ?> checked<?php endif; ?>>
					<label for="checkbox-1" >1、推荐</label>
				</div>
				<div >
					<input type="radio" id="checkbox-1" value="2" name="attributes"  <?php if(($data1['attributes']==2)): ?> checked<?php endif; ?>>
					<label for="checkbox-1">2、上新</label>
				</div>
				<div >
					<input type="radio" id="checkbox-1" value="3" name="attributes"  <?php if(($data1['attributes']==3)): ?> checked <?php endif; ?>>
					<label for="checkbox-1">3、热卖</label>
				</div>
				<div >
					<input type="radio" id="checkbox-1" value="4" name="attributes"  <?php if(($data1['attributes']==4)): ?> checked<?php endif; ?>>
					<label for="checkbox-1">4、促销</label>
				</div>
				<div >
					<input type="radio" id="checkbox-1" value="5" name="attributes"  <?php if(($data1['attributes']==5)): ?> checked <?php endif; ?>>
					<label for="checkbox-1">5、包邮</label>
				</div>
				<div >
					<input type="radio" id="checkbox-1" value="6" name="attributes"  <?php if(($data1['attributes']==6)): ?> checked <?php endif; ?>>
					<label for="checkbox-1">6、限时卖</label>
				</div>
				<div >
					<input type="radio" id="checkbox-1" value="7" name="attributes"  <?php if(($data1['attributes']==7)): ?> checked<?php endif; ?>>
					<label for="checkbox-1">7、不参与会员折扣</label>
				</div>
				
			</div>

		</div>
		<div >
			<label >产品规格：</label>
			<div >
				<input type="text" name="" id="" placeholder="输入长度" value="" class="input-text" style=" width:25%">
				MM
				<input type="text" name="" id="" placeholder="输入宽度" value="" class="input-text" style=" width:25%">
				MM
				<input type="text" name="" id="" placeholder="输入高度" value="" class="input-text" style=" width:25%">
				MM </div>
		</div>
		<div >
			<label >商品编号：</label>
			<div >
				<input type="text" name="number" id="" placeholder="" value="<?php echo $data1['number']; ?>" class="input-text">
			</div>
		</div>
		<div >
			<label >现价：</label>
			<div >
				<input type="text" name="curprice" id="" placeholder="" value="<?php echo $data1['curprice']; ?>" class="input-text">
			</div>
		</div>
		<div >
			<label >原价：</label>
			<div >
				<input type="text" name="oriprice" id="" placeholder="" value="<?php echo $data1['oriprice']; ?>" class="input-text">
			</div>
		</div>
		<div >
			<label >价格计算单位：</label>
			<div > <span class="select-box">
				<select class="select" name="unit">
					
					<option value="1" <?php if(($data1['unit']==1)): ?> selected<?php endif; ?>>件</option>
					<option value="2" <?php if(($data1['unit']==2)): ?> selected<?php endif; ?>>斤</option>
					<option value="3" <?php if(($data1['unit']==3)): ?> selected<?php endif; ?>>KG</option>
					<option value="4" <?php if(($data1['unit']==4)): ?> selected<?php endif; ?>>吨</option>
					<option value="5" <?php if(($data1['unit']==5)): ?> selected<?php endif; ?>>套</option>
				</select>
				</span> </div>
		</div>
		<div >
			<label >库存量:</label>
			<div >
				<input type="text" name="inventory" id="" placeholder="" value="<?php echo $data1['inventory']; ?>" class="input-text" style="width:90%">
				</div>
		</div>
		<div >
			<label >限制购买量：</label>
			<div >
				<input type="text" name="strict" id="" placeholder="" value="<?php echo $data1['strict']; ?>" class="input-text" style="width:90%">
				</div>
		</div>
		<div >
			<label >已购买量：</label>
			<div >
				<input type="text" name="already" id="" placeholder="" value="<?php echo $data1['already']; ?>" class="input-text" style="width:90%">
				</div>
		</div>
		<div >
			<label >运费：</label>
			<div >
				<input type="text" name="freight" id="" placeholder="" value="<?php echo $data1['freight']; ?>" class="input-text" style="width:90%">
				元</div>
		</div>
		<div >
			<label >是否上架:</label>
			<div >
				<div >
					<input type="radio" id="checkbox-1" value="0" name="stauts" <?php if(($data1['stauts']==0)): ?> checked<?php endif; ?>>
					<label for="checkbox-1">是</label>
				</div>
				<div >
					<input type="radio" id="checkbox-1" value="1" name="stauts" <?php if(($data1['stauts']==1)): ?> checked<?php endif; ?>>
					<label for="checkbox-1">否</label>
				</div>
				
				
			</div>

		</div>
		
		<div >
			<label > 销售开始时间：</label>
			<div >

				<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',readOnly:true});" name="datemin" class="input-text Wdate" style="width:120px;" value="<?php echo $data1['datemin']; ?>">
		-
	
			</div>
		</div>
		<div >
			<label >销售结束时间：</label>
			<div >
					<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',readOnly:true});" name="datemax" class="input-text Wdate" style="width:120px;"value="<?php echo $data1['datemax']; ?>">
		
			</div>
		</div>
		<div>	
		<form enctype="multipart/form-data">
  			 <div class="form-group">
        		<input id="file-0" type="file" multiple class="file">
    		</div>
		</form>
		</div>
		<div >
			<label >详细内容：</label>
			<div > 
				<script id="editor"name="text" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
		</div>
		<div >
			<div >
			<input type="submit"  class="btn btn-primary radius"value="修改商品" >
			
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<!-- <script type="text/javascript" src="/ht/public/static/img/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/ht/public/static/img/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/ht/public/static/css/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/ht/public/static/js/js/H-ui.admin.js"></script> --> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->

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
           // actionUpload:'',//去除上传预览缩略图中的上传图片
          actionZoom:'',//去除上传预览缩略图中的查看详情
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
</body>
</html>