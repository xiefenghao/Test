<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\xamp\htdocs\ht\public/../application/index\view\index\index.html";i:1604324942;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>登录 </title>
  <link rel="stylesheet" type="text/css" href="/ht/public/static/bst/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/ht/public/static/bst/dist/css/home.css">
  <link rel="stylesheet" type="text/css" href="/ht/public/static/bst/dist/css/base.css">
  <script src="/ht/public/static/bst/dist/js/bootstrap.min.js"></script>
  <script src="/ht/public/static/bst/dist/js/jquery-3.0.0.min.js"></script>
 <script type="text/javascript" src="/ht/public/static/jq/js/jquery.min.js"></script>

<!-- bootstrap图标  <link rel="stylesheet" href="/ht/public/static/bs/dist/css/font/css/all.css">
    <link rel="stylesheet" href="/ht/public/static/bs/dist/css/font/css/font-awesome.css"> -->
<script type="text/javascript">

  $(function(){
    $('.aui-content-main .aui-content-menu').hover(function(){

      $(this).addClass('active').find('s').hide();

      $(this).find('.aui-content-menu-dow').show();

    },function(){

      $(this).removeClass('active').find('s').show();

      $(this).find('.aui-content-menu-dow').hide();

    });

  });

</script>
 <style type="text/css">
  a {text-decoration: none;
        color:inherit;}
</style>
</head>


<body>
<div style="background-color:#BFBFBF">
  <div class="container " >
  
        <a href="">  风商城</a>
        <?php if(session('id')): ?>

<?php echo session('name'); else: ?>
<a href="<?php echo url('Party/login'); ?>" method="post">登陆 /<a href="<?php echo url('Party/regeist'); ?>" method="post">注册 </a>
<?php endif; ?>

      <div class=" float-right">
        <a href="<?php echo url('party/update'); ?>" ></a>
        <a href="" >购物车</a>
        <a href="<?php echo url('login/collect1'); ?>" >收藏夹</a>
        <a href="" >卖家中心</a>
        <a href="" >客服</a>  </div>
      </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 offset-3">
<div class="search">
  <form action="<?php echo url('index/scour'); ?>" method="post">

   <input type="text" name="condition" placeholder="请输入搜索条件">
   <input type="submit" class="btn btn-warning" value="搜索">
  </form> 
 </div>
          
</div></div>
  </div>


<div class="aui-container-bxo clearfix">
    <div class="aui-content-sidebar clearfix" id="nav">
        <div class="aui-content-main">
            <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="aui-content-menu">

                <div class="aui-content-menu-head">
                    <div class="aui-content-menu-head-list">

                        <h2>
                        <a href="<?php echo url('index/index/shop1'); ?>?id=<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></h2>

                        <i class="aui-content-menu-head-list-arrow"></i>
                    </div>
                </div>
                <div class="aui-content-menu-dow aui-ds">
                   <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                   <dl>
                    <dt>

                        <span> <?php echo $vo2['name']; ?></span>
                    </dt>
                    <dd>
                      <?php if(is_array($vo2['child2']) || $vo2['child2'] instanceof \think\Collection || $vo2['child2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['child2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>

                      <a href="<?php echo url('index/index/show2'); ?>?id=<?php echo $vo3['id']; ?>" class="aui-a-curr"><?php echo $vo3['name']; ?></a>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                  </dd>

              </dl>
              <?php endforeach; endif; else: echo "" ;endif; ?>




          </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
      

  </div>
</div>
</div>
</body>
</html>