<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\xamp\htdocs\ht\public/../application/index\view\login\collect.html";i:1603893739;}*/ ?>

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
<script>
$(function(){
$(".add").click(function(){
var t=$(this).parent().find('input[class*=text_box]');
t.val(parseInt(t.val())+1)
setTotal();
})
$(".min").click(function(){
var t=$(this).parent().find('input[class*=text_box]');
t.val(parseInt(t.val())-1)
if(parseInt(t.val())<0){
t.val(0);
}
setTotal();
})
function setTotal(){
var s=0;
$("#tab td").each(function(){
s+=parseInt($(this).find('input[class*=text_box]').val())*parseFloat($(this).find('span[class*=price]').text());
});
$("#total").html(s.toFixed(2));
}
setTotal();
 
})
</script>
<script type="text/javascript" src="/ht/public/static/qt/js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/jquery.json.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/transport_jquery.js"></script>
<link rel="stylesheet" type="text/css" href="/ht/public/static/qt/css/perfect-scrollbar.min.css" />
</head>

<body class="bg-ligtGary">
    <
        <ul class="quick-menu fr">
<li>
                <div class="dt"><a href="#" >我的订单</a></div>
            </li>
            <li class="spacer"></li>
<li>
                <div class="dt"><a href="#" >我的浏览</a></div>
            </li>
            <li class="spacer"></li>
<li>
                <div class="dt"><a href="#" >我的收藏</a></div>
            </li>
            <li class="spacer"></li>
<li>
                <div class="dt"><a href="#" >客户服务</a></div>
            </li>
            <li class="spacer"></li>
            <li class="li_dorpdown" data-ectype="dorpdown">
                <div class="dt dsc-cm">网站导航<i class="iconfont icon-down"></i></div>
                <div class="dd dorpdown-layer">
                    <dl class="fore1">
<dt>特色主题</dt>
<dd>
<div class="item"><a href="#" target="_blank">家用电器</a></div>
        <div class="item"><a href="#" target="_blank">手机数码</a></div>
        <div class="item"><a href="#" target="_blank">电脑办公</a></div>
</dd>
                    </dl>
                    <dl class="fore2">
<dt>促销活动</dt>
<dd>
<div class="item"><a href="#">拍卖活动</a></div>
        <div class="item"><a href="#">共创商品</a></div>
        <div class="item"><a href="#">优惠活动</a></div>
        <div class="item"><a href="#">批发市场</a></div>
        <div class="item"><a href="#">超值礼包</a></div>
        <div class="item"><a href="#">优惠券</a></div>
            </dd>
                    </dl>
                </div>
            </li>
                    </ul>
    </div>
</div>
<div class="header header-cart">
    <div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="#"><img src="/ht/public/static/qt/img/logo.png" /></a></div>
            <div class="tit">购物车（<em ectype="cartNum">2</em>）</div>
        </div>
                <div class="dsc-search">
            <div class="form">
                <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="search-form">
                    <input autocomplete="off" onKeyUp="lookup(this.value);" name="keywords" type="text" id="keyword" value="内衣" class="search-text"/>
                    <input type="hidden" name="store_search_cmt" value="0">
                    <button type="submit" class="button button-icon"><i></i></button>
                </form>
                
                <div class="suggestions_box" id="suggestions" style="display:none;">
                    <div class="suggestions_list" id="auto_suggestions_list">
&nbsp;
                    </div>
                </div>
                
            </div>
        </div>
            </div>
</div>        <div class="container">
        <div class="w w1200">
            
            <div class="cart-warp">
        <div class="cart-filter">
                    <div class="cart-stepflex">
<div class="cart-step-item curr">
    <span>1.我的购物车</span>
    <i class="iconfont icon-arrow-right-alt"></i>
</div>
<div class="cart-step-item">
    <span>2.填写订单信息</span>
    <i class="iconfont icon-arrow-right-alt"></i>
</div>
<div class="cart-step-item">
    <span>3.成功提交订单</span>
</div>
                    </div>
                    <div class="sp-area store-selector">

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
        <input type="checkbox" id="cart-selectall" class="ui-checkbox checkboxshopAll" ectype="ckAll" />
        <label for="cart-selectall" class="ui-label-14">全选</label>
    </div>
</div>
<div class="column c-goods">商品</div>
<div class="column c-props">属性</div>
<div class="column c-price">单价（元）</div>
<div class="column c-quantity">数量</div>
<div class="column c-sum">小计</div>
<div class="column c-action">操作</div>
                    </div>
                    <div class="cart-tbody" ectype="cartTboy">
                    <!-- 商品 -->
                    <div class="cart-item" ectype="shopItem">
    
    <div class="item-list" ectype="itemList">
    <!-- 循环 -->
   <?php if(is_array($date) || $date instanceof \think\Collection || $date instanceof \think\Paginator): $i = 0; $__LIST__ = $date;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>	
    <div class="item-single">
                	<div class="item-item selected" ectype="item" id="product_775" data-goodsid="775">
                <div class="item-form">
                    <div class="cell s-checkbox">
<div class="cart-checkbox" ectype="ckList">
    <input type="checkbox" id="checkItem_8" value="8" name="checkItem" class="ui-checkbox" ectype="ckGoods">
    <label for="checkItem_8" class="ui-label-14">&nbsp;</label>
</div>
                    </div>
                    <div class="cell s-goods">
                    	




<div class="goods-item">
    <div class="p-img">
                <a href="#" target="_blank"><img src="/ht/public<?php echo $date['image']; ?>" width="70" height="70"></a>
            </div>
    <div class="item-msg">
    	        <a href="#" target="_blank"><?php echo $date['name']; ?></a>
                <div class="gds-types">
        </div>
    </div>
</div>
                    </div>
                    <div class="cell s-props">
                    	颜色：红色<br />
                    	尺寸：XL
                    </div>
                    <div class="cell s-price">
<strong id="goods_price_8"><em>¥</em><?php echo $date['curprice']; ?></strong>
                    </div>
                    <div class="cell s-quantity">
<div class="amount-warp">
            <input type="text" value="<?php echo $date['num']; ?>" name="goods_number[8]" id="goods_number_8" onchange="change_goods_number(8, this.value, 2, 16)" class="text buy-num" ectype="number" defaultnumber="1">
        <div class="a-btn">
    	        <a href="#" onclick="changenum(8, 1, 2, 16)" class="btn-add"><i class="iconfont icon-up"></i></a>
        <a href="#" onclick="changenum(8, -1, 2, 16)" class="btn-reduce btn-disabled"><i class="iconfont icon-down"></i></a>
            </div>
    </div>
<div class="tc ftx-03">有货</div>
                    </div>
                    <div class="cell s-sum">
<strong id="goods_subtotal_8"><font id="_8_subtotal"><em v>¥</em><?php echo $date['num']; ?>*<?php echo $date['curprice']; ?></font></strong>
<div class="cuttip hide">
	<span class="tit">优惠</span></span>
</div>
                    </div>
                    <div class="cell s-action">
<a href="#" id="remove_8" ectype="cartOperation" data-value="{&quot;divId&quot;:&quot;cart_remove&quot;,&quot;url&quot;:&quot;flow.php?step=drop_goods&amp;id=8&quot;,&quot;cancelUrl&quot;:&quot;flow.php?step=drop_to_collect&amp;id=8&quot;,&quot;recid&quot;:8,&quot;title&quot;:&quot;删除&quot;}" class="cart-remove">删除</a>
<a href="#" id="store_8" ectype="cartOperation" data-value="{&quot;divId&quot;:&quot;cart_collect&quot;,&quot;url&quot;:&quot;flow.php?step=drop_to_collect&amp;id=8&quot;,&quot;recid&quot;:8,&quot;title&quot;:&quot;关注&quot;}" class="cart-store">收藏</a>
                    </div>
                </div>
            </div>
                </div>
                 <!-- 循环结束 -->
<?php endforeach; endif; else: echo "" ;endif; ?>
                 <!-- 循环 -->
    <div class="item-single">
                	<div class="item-item selected" ectype="item" id="product_775" data-goodsid="775">
                <div class="item-form">
                    <div class="cell s-checkbox">
<div class="cart-checkbox" ectype="ckList">
    <input type="checkbox" id="checkItem_9" value="9" name="checkItem" class="ui-checkbox" ectype="ckGoods">
    <label for="checkItem_9" class="ui-label-14">&nbsp;</label>
</div>
                    </div>
                    <div class="cell s-goods">
<div class="goods-item">
    <div class="p-img">
                <a href="#" target="_blank"><img src="/ht/public/static/qt/img/0_thumb_G_1490169281436.jpg" width="70" height="70"></a>
            </div>
    <div class="item-msg">
    	        <a href="#" target="_blank">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a>
                <div class="gds-types">
        </div>
    </div>
</div>
                    </div>
                    <div class="cell s-props">
&nbsp;                    </div>
                    <div class="cell s-price">
<strong id="goods_price_8"><em>¥</em>78.00</strong>
                    </div>
                    <div class="cell s-quantity">
<div class="amount-warp">
            <input type="text" value="1" name="goods_number[8]" id="goods_number_8" onchange="change_goods_number(8, this.value, 2, 16)" class="text buy-num" ectype="number" defaultnumber="1">
        <div class="a-btn">
    	        <a href="#" onclick="changenum(8, 1, 2, 16)" class="btn-add"><i class="iconfont icon-up"></i></a>
        <a href="#" onclick="changenum(8, -1, 2, 16)" class="btn-reduce btn-disabled"><i class="iconfont icon-down"></i></a>
            </div>
    </div>
<div class="tc ftx-03">有货</div>
                    </div>
                    <div class="cell s-sum">
<strong id="goods_subtotal_8"><font id="_8_subtotal"><em>¥</em>78.00</font></strong>
<div class="cuttip hide">
	<span class="tit">优惠</span>
    <span class="price" id="discount_amount_8"><em>¥</em>0.00</span>
</div>
                    </div>
                    <div class="cell s-action">
<a href="#" id="remove_8" ectype="cartOperation" data-value="{&quot;divId&quot;:&quot;cart_remove&quot;,&quot;url&quot;:&quot;flow.php?step=drop_goods&amp;id=8&quot;,&quot;cancelUrl&quot;:&quot;flow.php?step=drop_to_collect&amp;id=8&quot;,&quot;recid&quot;:8,&quot;title&quot;:&quot;删除&quot;}" class="cart-remove">删除</a>
<a href="#" id="store_8" ectype="cartOperation" data-value="{&quot;divId&quot;:&quot;cart_collect&quot;,&quot;url&quot;:&quot;flow.php?step=drop_to_collect&amp;id=8&quot;,&quot;recid&quot;:8,&quot;title&quot;:&quot;关注&quot;}" class="cart-store">收藏</a>
                    </div>
                </div>
            </div>
                </div>
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
        <label for="toggle-checkboxes-down" class="ui-label-14">全选</label>
    </div>
	    <div class="operation">
        <a href="#" class="cart-remove-batch" data-dialog="remove_collect_dialog" data-divid="cart-remove-batch" data-removeurl="ajax_dialog.php?act=delete_cart_goods" data-collecturl="ajax_dialog.php?act=drop_to_collect" data-title="删除">删除选中的商品</a>
        <a href="#" class="cart-follow-batch" data-dialog="remove_collect_dialog" data-divid="cart-collect-batch" data-removeurl="ajax_dialog.php?act=delete_cart_goods" data-collecturl="ajax_dialog.php?act=drop_to_collect" data-title="关注">移到我的收藏</a>
    </div>
    <div class="toolbar-right">
        <div class="comm-right">
            <div class="btn-area">
                <form name="formCart" method="post" action="flow.php" onsubmit="return get_toCart();">
                    <input name="goPay" type="submit" class="submit-btn" value="去支付"  id="go_pay" data-url="flow.php"/>
                    <input name="step" value="checkout" type="hidden" />
                    <input name="store_seller" value="" type="hidden" id="cart_store_seller" />
                    <input name="cart_value" id="cart_value" value="" type="hidden" />
	<input name="goods_ru" id="goods_ru" value="" type="hidden" />
                </form>
            </div>
            <div class="price-sum" id="total_desc">
                <span class="txt" id="total">总价(不含运费)：</span>
                <span class="price sumPrice" id="cart_goods_amount" ectype="goods_total"></span>
            </div>
            <div class="reduce-sum">
                <span class="txt">已节省：</span>
                <span class="price totalRePrice" id="save_total_amount" ectype="save_total"></span>
            </div>
            <div class="amount-sum">已选择<em class="cart_check_num" ectype="cartNum">0</em>件商品</div>
        </div>
    </div>
    </div>
                    	</div>
                    </div>
                </div>
            </div>

            <div class="p-panel-main c-history">
                <div class="ftit ftit-delr"><h3>猜你喜欢</h3></div>
                <div class="gl-list clearfix">
                    <ul class="clearfix">
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/ht/public/static/qt/img/0_thumb_G_1489109583798.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>555.00</div>
    <div class="p-name"><a href="#" target="_blank">【情侣款】Camel骆驼男靴 时尚潮流英伦风马丁靴高帮皮靴 爆卖1万双！ 情侣马丁靴 好评如潮</a></div>
    <div class="p-num">已售<em>35</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/ht/public/static/qt/img/0_thumb_G_1489109633806.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>1000.00</div>
    <div class="p-name"><a href="#" target="_blank">春季马丁靴男真皮男靴黄靴工装军靴韩版短靴沙漠靴高帮男鞋大黄靴 头层牛皮</a></div>
    <div class="p-num">已售<em>2</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/ht/public/static/qt/img/0_thumb_G_1489108999364.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>200.00</div>
    <div class="p-name"><a href="#" target="_blank">特步女鞋2017春季新款运动鞋休闲鞋女慢跑步鞋旅游鞋轻便舒适时尚 早春特惠 爆款休闲女鞋 赠运费险</a></div>
    <div class="p-num">已售<em>2</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/ht/public/static/qt/img/0_thumb_G_1489102753231.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>300.00</div>
    <div class="p-name"><a href="#" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
    <div class="p-num">已售<em>2</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/ht/public/static/qt/img/0_thumb_G_1489109337889.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>330.00</div>
    <div class="p-name"><a href="#" target="_blank">igtt铝框行李箱拉杆箱旅行箱万向轮男女20/24/26寸密码箱登机箱子 铝合金框 加强密码锁 万向轮 终身保修</a></div>
    <div class="p-num">已售<em>1</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/ht/public/static/qt/img/0_thumb_G_1489109282145.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>250.00</div>
    <div class="p-name"><a href="#" target="_blank">波米铝框拉杆箱万向轮密码旅行箱子20/24寸行李箱女登机箱男26/28 顺丰速运赠运费险赠十礼品终身质保</a></div>
    <div class="p-num">已售<em>1</em>件</div>
</li>
                    </ul>
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
				    <div class="code_img"><img src="/ht/public/static/qt/img/ecjia_qrcode.png"></div>
				    <div class="code_txt">官方网址</div>
				</div>
				<div class="qr-item">
				    <div class="code_img"><img src="/ht/public/static/qt/img/ectouch_qrcode.png"></div>
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

<script type="text/javascript" src="/ht/public/static/qt/js/suggest.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/scroll_city.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/utils.js"></script>
<script type="text/javascript" src="/ht/public/static/qt/js/warehouse.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/warehouse_area.js"></script>
    <script type="text/javascript" src="/ht/public/static/qt/js/jquery.SuperSlide.2.1.1.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/common.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/shopping_flow.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/jquery.nyroModal.js"></script><script type="text/javascript" src="/ht/public/static/qt/js/perfect-scrollbar/perfect-scrollbar.min.js"></script>    	
	<script type="text/javascript" src="/ht/public/static/qt/js/dsc-common.js"></script>
    <script type="text/javascript" src="/ht/public/static/qt/js/jquery.purebox.js"></script>
    <script type="text/javascript" src="/ht/public/static/qt/js/region.js"></script>
    
	    <script type="text/javascript" src="/ht/public/static/qt/js/checkAll.js"></script>    
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
