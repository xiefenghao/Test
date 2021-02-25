<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"E:\xamp\htdocs\ht\public/../application/index\view\index\shop6.html";i:1604585047;s:59:"E:\xamp\htdocs\ht\application\index\view\public\header.html";i:1604584955;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>jQuery实现放大镜效果</title>
        <script type="text/javascript" src="/ht/public/static/bst/dist/js/jquery-3.0.0.min.js" ></script>
        <link rel="stylesheet" href="/ht/public/static/Shopping/css/Shopping.css"/>
        <style>
            #contain{
            	padding-top: 200px;
            	padding-left: 120px;
               
                margin:0 auto;
            }
            .left{
                float:left;
            }
            .right{
                float:left;
                 width:370px;
                height:390px;  
                overflow:hidden;/*超出部分隐藏*/
                padding:0px;
                position: relative;
	            z-index: 999999;/
                display:none;/*默认先不显示*/
            }
            
            .up{
                width:370px;
                height:390px;
               
            }
            .up img{
                width:370px;
                height:390px;
            }
            .down{
               padding-top: 5px; 
               
            }
            .down img{
                width:64px;
                height:40px;
                border:3px solid #ccc;
               
            }


            #wrap{
				width:600px;
				height:200px;
				margin:50px auto;
			}
			#top{
				width:600px;
				height:220px;
				
				font-family:'Microsoft yahei';
			}
			#top p{
				margin-bottom:15px;
			}
			#top p font{
				font-size:14px;
				color:#000;
				margin-right:15px;
			}
			#top p span{
				font-size:14px;
				color:#666;
				border:1px solid #999;
				display:inline-block;
				padding:8px;
				cursor:pointer;
			}
			#top p span.on{
				border:2px solid #f60;
				padding:7px;
				
			}
			#bottom{
				width:600px;
				height:159px;
				padding-top:20px;
				font-family:'Microsoft yahei';
			}
			#bottom p font{
				color:#f60;
				font-size:20px;
				margin-right:20px;
			}
			#bottom p a{
				font-size:14px;
				color:blue;
			}
			#bottom p a i{
				margin:0 5px;
				color:#90c;
			}
			#bottom button{
				width:330px;
				height:50px;
				font-family:'Microsoft yahei';
				margin-top:20px;
				font-size:20px;
				background:#f60;
				color:#fff;
				border:none;
				
			}
        </style>
    </head>
    <body>
        <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
saassaas
</body>
</html>
        <div id="contain">
            <div class="left">
                <div class="up">

                    <img src="/ht/public/<?php echo $img1; ?>" bigimage>
                </div>
                <div class="down">

                    <?php if(is_array($image1) || $image1 instanceof \think\Collection || $image1 instanceof \think\Paginator): $i = 0; $__LIST__ = $image1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image1): $mod = ($i % 2 );++$i;?>
                    <img src="/ht/public/<?php echo $image1; ?>" style="height: 20px" smallimage> 
                   
         <?php endforeach; endif; else: echo "" ;endif; ?>
                   
                </div>
            </div>
            <div class="right">
                <img src="" mirror >
            </div>
        </div>

<div id="position">
	<?php foreach($shop as $vo): ?>        <div id="div_box-right" style="padding-left: 90px;vertical-align:bottom;z-index: 999">
            <div id="div_box-right-1">
            <span id="div_box-right-1-span_1"><?php echo $vo['name']; ?></span>
            <span id="div_box-right-1-span_2">收藏加购，闪电发货！</span>
            </div>
           <div id="bottom" style="position: absolute;">
                <p>价格： <font>￥ <span id='price'><?php echo $vo['curprice']; ?></span>.00</p>
                
            </div>
            <div id="div_box-right-3" style="padding-top: 40px">
                <span id="div_box-right-3-span_1">运费:<?php echo $vo['freight']; ?></span>
                <span id="div_box-right-3-span_2"><a href="#">杭州
                <svg t="1588655621027" class="icon-gw" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1794" width="200" height="200"></svg>
                </a></span>
            </div>
            <div id="div_box-right-4">
                <div id="div_box-right-4-div-1"><a href="#"><span>累计评价<span style="color: #ff0036;font-weight: 700;">76</span></a></span><span style="font-size: 20px;font-weight: 100;position: absolute;margin-left:89px;">|</span></div>
                <div id="div_box-right-4-div-2"><a href="#"><span>送天猫积分<span style="color: green;font-weight: 700;">34</span></a></span></div>
            </div>
            
           <div id="wrap">
            <div id="top" style="position: absolute;">
                <p id='model'>
                    <font>型号</font>
                    <span>4.7英寸</span>
                    <span>5.5英寸</span>
                </p>
                <p id='color'><font>颜色</font>
                	
 
        
                	
                   
                    <span>银色</span>
                    <span>金色</span>
                    <span>深空灰色</span>
                </p>
                <p id='rom'>
                    <font>内存</font>
                    <span>16GB</span>
                    <span>64GB</span>
                    <span>128GB</span>
                </p>
                 <p id='banben'>
                    <span>数量</span>
                     <input type="submit" id="num-jian"  value="-" onclick="
            jian()">
               <span id="count" class="num-jian">1</span>
                

<input type="submit" value="+" onclick="document.getElementById('count').innerHTML++">
                <span >件</span>
          
        <script >
            function jian(){
                if(document.getElementById('count').innerHTML>1)
               document.getElementById('count').innerHTML--;
            }   
function my(){
	document.getElementById('num').value=document.getElementById('count').innerHTML;
}
		
             </script>
           
                </p>
            </div>
            
        </div>
            
            <div id="div_box-right-8" style="padding-top:-510px">
                <div id="div_box-right-8-div-1"><span class = "testA">

	<form  action="<?php echo url('index/login/cart'); ?>" method="post" style="padding-top: 10px">
		<script > 

function my1(){
	document.getElementById('num1').value=document.getElementById('count').innerHTML;
}
		
	</script>
	<input type="hidden" id="num" value="s" name="num">
		<input type="hidden" id="" value="<?php echo $vo['id']; ?>" name="gid">
	
<input onclick="my()" type="submit" value="加入购物车" name=""></form>
<form  action="<?php echo url('index/login/pay'); ?>" method="post" style="padding-top: 10px">

             </span></div>
                <div id="div_box-right-8-div-2">
                		<input type="hidden" id="num1" value="1" name="num1">
            <input type="hidden" id="" value="<?php echo $vo['id']; ?>" name="gid"> 	
<input onclick="my1()" type="submit" value="立即购买" name=""></form>  
             </div>
            </div>
    </div>
   <?php endforeach; ?>
    </div>

    </body>
    <script>
        /**
         * 完成下面选择图片的效果：
         *         1.当鼠标放置在下面的小图片时，改变边框属性
         *         2.更改含有bigimage的img标签的src，进行图片更换
         */
        $("[smallimage]").mouseover(function(){
            var address = $(this).css("border","3px solid red").attr("src");
            $("[bigimage]").attr("src",address);
        }).mouseout(function(){
            $(this).css("border","3px solid #ccc");
        });
        /**
         * 大图鼠标移动事件：
         *         1.设置mirror所在的img标签的display属性为block，即让它显示
         *         2.当鼠标在内部移动的时候，通过计算，在mirror中进行放大显示
         * 鼠标移出事件：
         *         设置mirror不可见 display:none
         */
        $("[bigimage]").mousemove(function(even){
            //获取大图的相对文档的偏移量
            var offset = $(this).offset();
            //获取鼠标相对于大图左上角的x轴偏移量
            var x = 1.7*even.pageX -  offset.left;
            //获取鼠标相对于大图左上角的y轴偏移量
            var y = even.pageY -  offset.top;
            //设置放大镜放大倍数，可自行设置
            var multiple = 2;
            //获取放大镜所在div的宽度和高度
            var mirrorwidth = $(".right").width();
            var mirrorHeight = $(".right").height();
            //获取bigimage此时的src的值
            var address = $(this).attr("src");
            //更改放大镜的src的值，切换图片
            $("[mirror]").attr("src",address);
            $(".right").css("display","block").scrollLeft(Math.max(x*multiple - mirrorwidth/2.0)).scrollTop(Math.max(y*multiple - mirrorHeight/2.0));
        }).mouseout(function(){
            $(".right").css("display","none");
        });


        //sku
        var mSpan = document.getElementById('model').getElementsByTagName('span');
			var cSpan = document.getElementById('color').getElementsByTagName('span');
			var rSpan = document.getElementById('rom').getElementsByTagName('span');
			var bSpan = document.getElementById('banben').getElementsByTagName('span');
			var aSpan = document.getElementsByTagName('span');
			var oModel = document.getElementById('model');
			var oRom = document.getElementById('rom');
			var oPrice = document.getElementById('price');
     
			mSpan[0].className = 'on';
			cSpan[0].className = 'on';
			rSpan[0].className = 'on';
			bSpan[0].className = 'on';

			for (var i=0;i<aSpan.length;i++ )
			{
				
				aSpan[i].onclick = function(){
					var siblings = this.parentNode.children;
					for (var j=0;j<siblings.length;j++ )
					{
						siblings[j].className = '';
					}
					this.className = 'on';
					
					if ( this.parentNode == oModel || this.parentNode == oRom )
					{
						price();
					}
				};
			};

			function price(){
				var p1 = 0;
				var p2 = 0;
				for (var i=0;i<mSpan.length;i++ )
				{
					if ( mSpan[i].className == 'on' )
					{
						p1 = i?6088:5288;
						break;
					};
				};
				for (var i=0;i<rSpan.length;i++ )
				{
					if ( rSpan[i].className == 'on' )
					{
						switch ( i )
						{
							case 0:
								p2 = 0;
								break;
							case 1:
								p2 = 800;
								break;
							case 2:
								p2 = 1600;
								break;
						}
					}
				};
				oPrice.innerHTML = p1+p2;
			};

    </script>
</html>