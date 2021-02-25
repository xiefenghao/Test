<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\wamp64\www\ht\public/../application/index\view\index\default.html";i:1569573010;}*/ ?>
﻿
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="referrer" content="origin" />
    <meta property="og:description" content="工欲善其事，必先利其器，数据抓取同样也是如此，PHP数据抓取常用CURL。 CURL是一个使用libcurl库与各类服务器进行通讯，支持很多协议，如HTTP、FTP、TELNET等。 curl_ini" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>简单的curl抓取数据 - lhbryant - 博客园</title>
    
    <link rel="stylesheet" href="Css/blog-common.min.css" />
    <link id="MainCss" rel="stylesheet" href="Css/bundle-codinglife.min.css" />
    
    <link id="mobile-style" media="only screen and (max-width: 767px)" type="text/css" rel="stylesheet" href="Css/bundle-codinglife-mobile.min.css" />
    
    <link type="application/rss+xml" rel="alternate" href="https://www.cnblogs.com/lhbryant/rss" />
    <link type="application/rsd+xml" rel="EditURI" href="https://www.cnblogs.com/lhbryant/rsd.xml" />
    <link type="application/wlwmanifest+xml" rel="wlwmanifest" href="https://www.cnblogs.com/lhbryant/wlwmanifest.xml" />
    <script src="Scripts/jquery-2.2.0.min.js"></script>
    <script src="Scripts/blog-common.min.js"></script>
    <script>
        var currentBlogId = 349366;
        var currentBlogApp = 'lhbryant';
        var cb_enable_mathjax = false;
        var isLogined = false;
    </script>
    
    
    
</head>
<body>
    <a name="top"></a>
    
    
<!--done-->
<div id="home">
<div id="header">
	<div id="blogTitle">
        <a id="lnkBlogLogo" href="https://www.cnblogs.com/lhbryant/"><img id="blogLogo" src="Picture/logo.gif" alt="返回主页" /></a>		
		
<!--done-->
<h1><a id="Header1_HeaderTitle" class="headermaintitle HeaderMainTitle" href="https://www.cnblogs.com/lhbryant/">lhbryant</a>
</h1>
<h2>

</h2>




		
	</div><!--end: blogTitle 博客的标题和副标题 -->
	<div id="navigator">
		
<ul id="navList">
<li><a id="blog_nav_sitehome" class="menu" href="https://www.cnblogs.com/">
博客园</a>
</li>
<li>
<a id="blog_nav_myhome" class="menu" href="https://www.cnblogs.com/lhbryant/">
首页</a>
</li>
<li>

<a id="blog_nav_newpost" class="menu" href="https://i.cnblogs.com/EditPosts.aspx?opt=1">
新随笔</a>
</li>
<li>
<a id="blog_nav_contact" class="menu" href="https://msg.cnblogs.com/send/lhbryant">
联系</a></li>
<li>
<a id="blog_nav_rss" class="menu" href="https://www.cnblogs.com/lhbryant/rss/">
订阅</a>
<!--<partial name="./Shared/_XmlLink.cshtml" model="Model" /></li>--></li>
<li>
<a id="blog_nav_admin" class="menu" href="https://i.cnblogs.com/">
管理</a>
</li>
</ul>


		<div class="blogStats">
			
			<span id="stats_post_count">随笔 - 
33&nbsp; </span>
<span id="stats_article_count">文章 - 
9&nbsp; </span>
<span id="stats-comment_count">评论 - 
9</span>

			
		</div><!--end: blogStats -->
	</div><!--end: navigator 博客导航栏 -->
</div><!--end: header 头部 -->

<div id="main">
	<div id="mainContent">
	<div class="forFlow">
		<div id="post_detail">
    <!--done-->
    <div id="topics">
        <div class="post">
            <h1 class = "postTitle">
                
<a id="cb_post_title_url" class="postTitle2" href="https://www.cnblogs.com/lhbryant/p/6928959.html">简单的curl抓取数据</a>

            </h1>
            <div class="clear"></div>
            <div class="postBody">
                
<div id="cnblogs_post_body" class="blogpost-body cnblogs-markdown">
    <p>工欲善其事，必先利其器，数据抓取同样也是如此，PHP数据抓取常用CURL。<br />
CURL是一个使用libcurl库与各类服务器进行通讯，支持很多协议，如HTTP、FTP、TELNET等。</p>
<p>curl_init 创建一个新的会话，返回CURL句柄<br />
curl_setopt 获取网页之前的参数设置<br />
curl_exec 获取网页数据，直接输出或者返回数据。<br />
http_build_query 将数组变成url-encode请求字符串<br />
使用CURL获取网页数据<br />
$url = &quot;<a href="http://www.phpox.com" class="uri">http://www.phpox.com</a>&quot;;<br />
$ch = curl_init($url);<br />
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);<br />
$content = curl_exec($ch);<br />
echo $content;die;</p>
<p>CURL POST获取网页数据<br />
view source<br />
$url = &quot;<a href="http://www.phpox.com" class="uri">http://www.phpox.com</a>&quot;;<br />
$dataArr = array();<br />
$dataArr['qid'] = &quot;265&quot;;<br />
$ch = curl_init($url);<br />
$postField = http_build_query($dataArr);<br />
curl_setopt($ch,CURLOPT_POST,1);<br />
curl_setopt($ch,CURLOPT_POSTFIELDS,$postField);<br />
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);<br />
$content = curl_exec($ch);<br />
echo $content;<br />
CURL 模拟COOKIE获取数据</p>
<p>著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。<br />
更多技术文章请搜索千锋PHP，做真实的自己，用良心做教育。<br />
互联网+时代，时刻要保持学习，携手千锋PHP,Dream It Possible。</p>

</div>
<div id="MySignature"></div>
<div class="clear"></div>
<div id="blog_post_info_block">
    <div id="blog_post_info"></div>
    <div class="clear"></div>
    <div id="post_next_prev"></div>
</div>
            </div>
            <div class="postDesc">posted @ 
<span id="post-date">2017-06-01 15:06</span>&nbsp;<a href="https://www.cnblogs.com/lhbryant/">lhbryant</a> 阅读(<span id="post_view_count">...</span>) 评论(<span id="post_comment_count">...</span>) <a href="https://i.cnblogs.com/EditPosts.aspx?postid=6928959" rel="nofollow"> 编辑</a> <a href="javascript:void(0)" onclick="AddToWz(6928959); return false;">收藏</a>
</div>
        </div>
	    
	    
    </div><!--end: topics 文章、评论容器-->
</div>
<script src="Scripts/highlight.min.js"></script>
<script>markdown_highlight();</script>
<script>
    var allowComments = true, cb_blogId = 349366, cb_blogApp = 'lhbryant', cb_blogUserGuid = 'ce918c20-d423-e711-9fc1-ac853d9f53cc';
    var cb_entryId = 6928959, cb_entryCreatedDate = '2017-06-01 15:06', cb_postType = 1; 
    loadViewCount(cb_entryId);
</script><a name="!comments"></a>
<div id="blog-comments-placeholder"></div>
<script>
    var commentManager = new blogCommentManager();
    commentManager.renderComments(0);
</script>

<div id="comment_form" class="commentform">
    <a name="commentform"></a>
    <div id="divCommentShow"></div>
    <div id="comment_nav"><span id="span_refresh_tips"></span><a href="javascript:void(0);" onclick="return RefreshCommentList();" id="lnk_RefreshComments" runat="server" clientidmode="Static">刷新评论</a><a href="#" onclick="return RefreshPage();">刷新页面</a><a href="#top">返回顶部</a></div>
    <div id="comment_form_container"></div>
    <div class="ad_text_commentbox" id="ad_text_under_commentbox"></div>
    <div id="ad_t2"></div>
    <div id="opt_under_post"></div>
    <script async="async" src="Scripts/gpt.js"></script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>
    <script>
        googletag.cmd.push(function () {
            googletag.defineSlot("/1090369/C1", [300, 250], "div-gpt-ad-1546353474406-0").addService(googletag.pubads());
            googletag.defineSlot("/1090369/C2", [468, 60], "div-gpt-ad-1539008685004-0").addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
    <div id="cnblogs_c1" class="c_ad_block">
        <div id="div-gpt-ad-1546353474406-0" style="height:250px; width:300px;"></div>
    </div>
    <div id="under_post_news"></div>
    <div id="cnblogs_c2" class="c_ad_block">
        <div id="div-gpt-ad-1539008685004-0" style="height:60px; width:468px;">
            <script>
                if (new Date() >= new Date(2018, 9, 13)) {
                    googletag.cmd.push(function () { googletag.display("div-gpt-ad-1539008685004-0"); });
                }
            </script>
        </div>
    </div>
    <div id="under_post_kb"></div>
    <div id="HistoryToday" class="c_ad_block"></div>
    <script type="text/javascript">
        fixPostBody();
        setTimeout(function () { incrementViewCount(cb_entryId); }, 50);
        deliverAdT2();
        deliverAdC1();
        deliverAdC2();
        loadNewsAndKb();
        loadBlogSignature();
LoadPostCategoriesTags(cb_blogId, cb_entryId);        LoadPostInfoBlock(cb_blogId, cb_entryId, cb_blogApp, cb_blogUserGuid);
        GetPrevNextPost(cb_entryId, cb_blogId, cb_entryCreatedDate, cb_postType);
        loadOptUnderPost();
        GetHistoryToday(cb_blogId, cb_blogApp, cb_entryCreatedDate);
    </script>
</div>
	</div><!--end: forFlow -->
	</div><!--end: mainContent 主体内容容器-->

	<div id="sideBar">
		<div id="sideBarMain">
			
<div id="sidebar_news" class="newsItem">
            <script>loadBlogNews();</script>
</div>

			<div id="blog-calendar" style="display:none"></div><script>loadBlogDefaultCalendar();</script>
			
			<div id="leftcontentcontainer">
				<div id="blog-sidecolumn"></div>
                    <script>loadBlogSideColumn();</script>
			</div>
			
		</div><!--end: sideBarMain -->
	</div><!--end: sideBar 侧边栏容器 -->
	<div class="clear"></div>
	</div><!--end: main -->
	<div class="clear"></div>
	<div id="footer">
		<!--done-->
Copyright &copy; 2019 lhbryant
<br /><span id="poweredby">Powered by .NET Core 3.0.0-preview9-19423-09 on Linux</span>



	</div><!--end: footer -->
</div><!--end: home 自定义的最大容器 -->


    
</body>
</html>
