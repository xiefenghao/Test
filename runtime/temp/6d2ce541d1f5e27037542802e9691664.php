<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"E:\xamp\htdocs\ht\public/../application/index\view\login\pay.html";i:1604414039;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="童攀课堂-php课堂-www.tongpankt.com" />
<meta name="Description" content="童攀课堂-php课堂-www.tongpankt.com" />
<title>交流群：383432579</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/qt/css/base.css" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/qt/css/style.css" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/qt/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/qt/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="/ht/public/static/qt/css/quickLinks.css" />

<script type="text/javascript" src="/ht/public/static/qt/js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/jquery.json.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/transport_jquery.js"></script>
<link rel="stylesheet" type="text/css" href="/ht/public/static/qt/css/perfect-scrollbar.min.css" />

</head>

<body class="bg-ligtGary">
    <div class="site-nav" id="site-nav">
    <div class="w w1200">
        <div class="fl">
            <div class="city-choice" id="city-choice" data-ectype="dorpdown">
	
		<div class="dorpdown-layer">
		
			<div class="scrollBody" id="scrollBody">
				<div class="all-list" id="scrollMap">

		

    <div class="mod_storage_state">商品暂时只支持配送至中国大陆地区</div>
    <input type="hidden" value="3" id="province_id" name="province_region_id">
    <input type="hidden" value="37" id="city_id" name="city_region_id">
    <input type="hidden" value="410" id="district_id" name="district_region_id">         
    <input type="hidden" value="" id="merchantId" name="merchantId">
</div>
          <input type="hidden" value="2" id="region_id" name="region_id">
        <input type="hidden" value="" id="good_id" name="good_id">
        <input type="hidden" value="0" id="user_id" name="user_id">
        <input type="hidden" value="16" id="area_id" name="area_id">
        <input type="hidden" value="3" id="province_id" name="province_region_id">
    </div>
</div>
                    </div>
                </div>
                <div class="cart-table">
                    <div class="cart-head">
<div class="column c-checkbox">
    <div class="cart-checkbox cart-all-checkbox" ectype="ckList">
      
    </div>
</div>
<div class="column c-goods">商品</div>

<div class="column c-price">单价（元）</div>
<div class="column c-quantity">数量</div>
<div class="column c-sum">小计</div>

                    </div>
                    <div class="cart-tbody" ectype="cartTboy">
                    <!-- 商品 -->
                    <div class="cart-item" ectype="shopItem">
    
    <div class="item-list" ectype="itemList">
    <!-- 循环 -->
    <div class="item-single">
    	
    
                	<div class="item-item selected" ectype="item" id="product_775" data-goodsid="775">
                <div class="item-form">
                    <div class="cell s-checkbox">
<div class="cart-checkbox" ectype="ckList">
    <input type="checkbox" id="checkItem_8" value="8" name="checkItem" class="ui-checkbox" ectype="ckGoods">
   
</div>
                    </div>
                    <div class="cell s-goods">
<div class="goods-item">
    <div class="p-img">
                <a href="#" target="_blank"><img src="/ht/public<?php echo $data['img']; ?>" width="70" height="70"></a>
            </div>
    <div class="item-msg">
    	
    	        <a href="#" target="_blank"><?php echo $data['name']; ?></a>
                <div class="gds-types">
        </div>
    </div>
</div>
                    </div>
                    
                    <div class="cell s-price">
<strong ><em >¥</em ><span id="price"><?php echo $data['curprice']; ?></span></strong>
                    </div>
                    <div class="cell s-quantity">
<div class="amount-warp">
            <input type="text" value="<?php echo $data['num1']; ?>" name="goods_number[8]" id="number" onchange="num" class="text buy-num" ectype="number" defaultnumber="1">
        <div class="a-btn">
    	        <a href="#" onclick="jia()" class="btn-add"><i class="iconfont icon-up"></i></a>
        <a href="#" onclick="jian()" class=""><i class="iconfont icon-down"></i></a><script >
        	function jia(){
document.getElementById('number').value++;
 document.getElementById('all').innerHTML=document.getElementById('price').innerHTML*document.getElementById('number').value;
   document.getElementById('all1').value= document.getElementById('price').innerHTML*document.getElementById('number').value;
    document.getElementById('num1').value= document.getElementById('number').value;
        	}
        	 function jian(){
                if(document.getElementById('number').value>1)
               document.getElementById('number').value--;
          document.getElementById('all').innerHTML=document.getElementById('price').innerHTML*document.getElementById('number').value;
          document.getElementById('all1').value= document.getElementById('price').innerHTML*document.getElementById('number').value;
           document.getElementById('num1').value= document.getElementById('number').value;
        	}
        </script>
            </div>
    </div>
<div class="tc ftx-03">有货</div>
                    </div>
                    <form name="formCart" method="post" action="<?php echo url('login/index2'); ?>" onsubmit="return get_toCart();">
                    <div class="cell s-sum">
<strong id="goods_subtotal_8">¥<font  id="all"><em><?php echo $data['all']; ?></em></font></strong>

<input id="all1" type="hidden" name="WIDtotal_amount" value="<?php echo $data['curprice']*$data['num1']; ?>">
<input id="name" type="hidden" name="WIDsubject" value="<?php echo $data['name']; ?>">
<input  type="hidden" name="gid" value="<?php echo $data['gid']; ?>" />
    <input id="num1" type="hidden" name="num" value="<?php echo $data['num1']; ?>"/>
                        <input id="WIDbody" type="text" name="WIDbody" />

<div class="cuttip hide">
	<span class="tit">优惠</span>
    <span class="price" id="discount_amount_8"><em>¥</em></span>
</div>
                    </div>
                   
                </div>
            </div>
                </div>
               
                 <!-- 循环结束 -->

                 <!-- 循环 -->
    
                 <!-- 循环结束 -->


                    </div>
                    </div>

                    <!-- 商品结束 -->
                    </div>
                    <div class="cart-tfoot">
                    	<div class="cart-toolbar">
	<div class="w w1200">
    <div class="cart-checkbox cart-all-checkbox" ectype="ckList">
        <input type="checkbox" id="toggle-checkboxes-down" class="ui-checkbox checkboxshopAll" ectype="ckAll" />
       
    </div>
	    <div class="operation">

    </div>
    <div class="toolbar-right">
        <div class="comm-right">
            <div class="btn-area">
                
                    <input  type="submit" class="submit-btn" value="去支付"  id="go_pay" data-url="flow.php"/>
                    
                </form>
            </div>
            <div class="price-sum" id="total_desc">
                <span class="txt">总价(不含运费)：</span>
                <span class="price sumPrice" id="cart_goods_amount" ectype="goods_total"></span>
            </div>
            
            
        </div>
    </div>
    </div>
                    	</div>
                    </div>
                </div>
            </div>

           
    
        
    
    <div class="hide">
    
    <div id="dialog_remove" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">删除商品？</h3>
                <div class="ftx-03">您可以选择移到收藏，或删除商品。</div>
            </div>
        </div>
    </div>
    
    <div id="dialog_collect" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">移到收藏</h3>
                <div class="ftx-03">移动后选中商品将不在购物车中显示。</div>
            </div>
        </div>
    </div>
    
    <div id="flow_add_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">请至少选中一件商品！</h3>
            </div>
        </div>
    </div>
    
    <div id="cart_gift_goods" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04 rem">最多领取<em ectype="giftNumber"></em>个商品</h3>
            </div>
        </div>
    </div>
    
    
    
    
    <div id="set_default" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您确定要设置为默认收货地址吗？</h3>
            </div>
        </div>
    </div>
    
    <div id="del_address" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">你确认要删除该收货地址吗？</h3>
            </div>
        </div>
    </div>
    
    <div id="no_address_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您还没有选择收货地址！</h3>
            </div>
        </div>
    </div>
    
    <div id="no_goods_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您的购物车中没有商品！</h3>
            </div>
        </div>
    </div>
    
    <div id="cart_address_not" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您还没有选择收货地址！</h3>
            </div>
        </div>
    </div>
	
   
</div>    
    <div class="footer-new">
    <div class="footer-new-top">
    	<div class="w w1200">
            <div class="service-list">
                <div class="service-item">
                    <i class="f-icon f-icon-qi"></i>
                    <span>七天包退</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-zheng"></i>
                    <span>正品保障</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-hao"></i>
                    <span>好评如潮</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-shan"></i>
                    <span>闪电发货</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-quan"></i>
                    <span>权威荣誉</span>
                </div>
            </div>
            <div class="contact">
                <div class="contact-item contact-item-first"><i class="f-icon f-icon-tel"></i><span>4000-000-000</span></div>
                <div class="contact-item">
                	                    <a id="IM" IM_type="dsc" onclick="openWin(this)" href="javascript:;" class="btn-ctn"><i class="f-icon f-icon-kefu"></i><span>咨询客服</span></a>
            </div>
            </div>
        </div>
    </div>
    <div class="footer-new-con">
    	<div class="fnc-warp">
            <div class="help-list">
<div class="help-item">
                    <h3>新手上路 </h3>
                    <ul>
            <li><a href="#"  title="售后流程" target="_blank" rel="nofollow">售后流程</a></li>
        <li><a href="#"  title="购物流程" target="_blank" rel="nofollow">购物流程</a></li>
        <li><a href="#"  title="订购方式" target="_blank" rel="nofollow">订购方式</a></li>
    </ul>
                </dl>
                </div>
                <div class="help-item">
                    <h3>配送与支付 </h3>
                    <ul>
            <li><a href="#"  title="货到付款区域" target="_blank" rel="nofollow">货到付款区域</a></li>
        <li><a href="#"  title="配送支付智能查询 " target="_blank" rel="nofollow">配送支付智能查询</a></li>
        <li><a href="#"  title="支付方式说明" target="_blank" rel="nofollow">支付方式说明</a></li>
    </ul>
                </dl>
                </div>
                <div class="help-item">
                    <h3>会员中心</h3>
                    <ul>
            <li><a href="#"  title="资金管理" target="_blank" rel="nofollow">资金管理</a></li>
        <li><a href="#"  title="我的收藏" target="_blank" rel="nofollow">我的收藏</a></li>
        <li><a href="#"  title="我的订单" target="_blank" rel="nofollow">我的订单</a></li>
            </ul>
                </dl>
                </div>
                <div class="help-item">
                    <h3>服务保证 </h3>
                    <ul>
            <li><a href="#"  title="退换货原则" target="_blank" rel="nofollow">退换货原则</a></li>
        <li><a href="#"  title="售后服务保证" target="_blank" rel="nofollow">售后服务保证</a></li>
        <li><a href="#"  title="产品质量保证 " target="_blank" rel="nofollow">产品质量保证</a></li>
            </ul>
                </dl>
                </div>
                <div class="help-item">
                    <h3>联系我们 </h3>
                    <ul>
            <li><a href="#"  title="网站故障报告" target="_blank" rel="nofollow">网站故障报告</a></li>
        <li><a href="#"  title="选机咨询 " target="_blank" rel="nofollow">选机咨询</a></li>
        <li><a href="#"  title="投诉与建议 " target="_blank" rel="nofollow">投诉与建议</a></li>
            </ul>
                </dl>
                </div>
          
            </div>
            <div class="qr-code">
                <div class="qr-item qr-item-first">
				    <div class="code_img"><img src="./img/ecjia_qrcode.png"></div>
				    <div class="code_txt">官方网址</div>
				</div>
				<div class="qr-item">
				    <div class="code_img"><img src="./img/ectouch_qrcode.png"></div>
				    <div class="code_txt">在线课程</div>
				</div>
            </div>
    	</div>
    </div>
    <div class="footer-new-bot">
    	<div class="w w1200">
             
            <p class="copyright_links">
        <a href="#" rel="nofollow">首页</a>
                 
                <span class="spacer"></span>
                 
        <a href="#" rel="nofollow">隐私保护</a>
                 
                <span class="spacer"></span>
                 
        <a href="#" rel="nofollow">联系我们</a>
                 
                <span class="spacer"></span>
                 
        <a href="#" rel="nofollow">免责条款</a>
                 
                <span class="spacer"></span>
                 
        <a href="#" rel="nofollow">公司简介</a>
                 
                <span class="spacer"></span>
                 
        <a href="#" rel="nofollow">意见反馈</a>
                 
                 
            </p>

<p><span>©&nbsp;2015-2017&nbsp;tongpankt.com&nbsp;版权所有&nbsp;&nbsp;</span><span>ICP备案证书号:</span><a href="#">豫ICP备*****号-1</a>&nbsp;<a href="#">POWERED by童攀课堂</a></p>

<p class="copyright_auth">&nbsp;</p>
                    </div>
    </div>
    
    
    <div class="hide" id="pd_coupons">
        <span class="success-icon m-icon"></span>
        <div class="item-fore">
            <h3>领取成功！感谢您的参与，祝您购物愉快~</h3>
            <div class="txt ftx-03">本活动为概率性事件，不能保证所有客户成功领取优惠券</div>
        </div>
    </div>
    
    
    <div class="hidden">
        <input type="hidden" name="seller_kf_IM" value="" rev="" ru_id="" />
        <input type="hidden" name="seller_kf_qq" value="349488953" />
        <input type="hidden" name="seller_kf_tel" value="4000-000-000" />
        <input type="hidden" name="user_id" value="0" />
    </div>
</div>

<script type="text/javascript" src="./js/suggest.js"></script><script type="text/javascript" src="./js/scroll_city.js"></script><script type="text/javascript" src="./js/utils.js"></script>
<script type="text/javascript" src="./js/warehouse.js"></script><script type="text/javascript" src="./js/warehouse_area.js"></script>
    <script type="text/javascript" src="./js/jquery.SuperSlide.2.1.1.js"></script><script type="text/javascript" src="./js/common.js"></script><script type="text/javascript" src="./js/shopping_flow.js"></script><script type="text/javascript" src="./js/jquery.nyroModal.js"></script><script type="text/javascript" src="./js/perfect-scrollbar/perfect-scrollbar.min.js"></script>    	
	<script type="text/javascript" src="./js/dsc-common.js"></script>
    <script type="text/javascript" src="./js/jquery.purebox.js"></script>
    <script type="text/javascript" src="./js/region.js"></script>
    
	    <script type="text/javascript" src="./js/checkAll.js"></script>    
    <script type="text/javascript">
    	function changenum(rec_id, diff, warehouse_id, area_id, favourable_id){
            var cValue = $("#cart_value").val();
            var goods_number = Number($('#goods_number_' + rec_id).val()) + Number(diff);    
            if(goods_number < 1){
				pbDialog(json_languages.Purchase_restrictions,"",0)
            }else{
                change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue, favourable_id);
            }
        }
		
        function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue, favourable_id){
            if(cValue != "" || cValue == 'undefined'){
               var cValue = $("#cart_value").val(); 
            }
            if(goods_number == 0){
                //pbDialog("数量不能为0","",0);
                goods_number = 1;
            }

            var items = $("#checkItem_" +rec_id).parents("*[ectype='promoItem']");
            var input = items.find("*[ectype='ckGoods']");
            var str ='';
            input.each(function(){
                if($(this).prop('checked')== true){
                    var val = $(this).val();
                    str += val + ',';
                }
            });
            str = str.substring(str.length-1,0);
            
            Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id + '&sel_id=' + str + '&sel_flag=' + 'cart_sel_flag' +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id +'&favourable_id=' + favourable_id, change_goods_number_response, 'POST','JSON');                
        }
		
        function change_goods_number_response(result)
        {
            var rec_id = result.rec_id;           
            if(result.error == 0){
                $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
                $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
				
				if(result.dis_amount > 0){
$('#discount_amount_' +rec_id).parents('.cuttip').removeClass("hide");
				}else{
$('#discount_amount_' +rec_id).parents('.cuttip').addClass("hide");
				}
				
				$('#discount_amount_' +rec_id).html(result.discount_amount);//商品优惠价格
				
                if(result.goods_number == 1){
                    $('#goods_number_' +rec_id).parents('.amount-warp').find('.btn-reduce').addClass("btn-disabled");
                }else{
                    $('#goods_number_' +rec_id).parents('.amount-warp').find('.btn-reduce').removeClass("btn-disabled");
                }
                if(result.goods_number <= 0){
                    $('#tr_goods_' +rec_id).style.display = 'none'; //数量为零则隐藏所在行
                    $('#tr_goods_' +rec_id).innerHTML = '';
                }
                $('#total_desc').html(result.flow_info);//更新合计
                if ($('ECS_CARTINFO')){
                    $('#ECS_CARTINFO').html(result.cart_info); //更新购物车数量
                }
        
                if(result.group.length > 0){
                    for(var i=0; i<result.group.length; i++){
$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
                    }
                }
                
                $("#goods_price_" + rec_id).html(result.goods_price);
                $("*[ectype='save_total']").html(result.save_total_amount); //优惠节省总金额
                $("*[ectype='cartNum']").html(result.subtotal_number); //商品总数
        
                // 如果是优惠活动内的商品，更新优惠活动局部 qin
                if (result.act_id){
                    $("#product_promo_" + result.ru_id + "_" + result.act_id).html(result.favourable_box_content);
                }
            }else if(result.message != ''){
				//更新数量
                $('#goods_number_' +rec_id).val(result.cart_Num);
				pbDialog(result.message," ",0,"",90,10);
            }                
        }
		
		//购物车悬浮框
		cartScroll();
		
		//超值礼包
		$(".package_goods ul").perfectScrollbar("destroy");
		$(".package_goods ul").perfectScrollbar();
    </script>
    
	</body>
</html>