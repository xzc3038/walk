<?php /*a:5:{s:56:"D:\work\walk\www\application\index\view\index\index.html";i:1535440471;s:58:"D:\work\walk\www\application\index\view\common\header.html";i:1535421400;s:62:"D:\work\walk\www\application\index\view\common\sider-left.html";i:1535440412;s:63:"D:\work\walk\www\application\index\view\common\sider-right.html";i:1535441643;s:58:"D:\work\walk\www\application\index\view\common\footer.html";i:1535437370;}*/ ?>
﻿<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>夏治财的博客</title>
    <link href="/static/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="/static/css/style.css" type="text/css" rel="stylesheet">
    <link type="text/css" href="/static/css/nprogress.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="/static/js/respond.min.js" type="text/javascript"></script>
    <script src="/static/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--<link rel="apple-touch-icon-precomposed" href="/static/images/icon/icon.png">-->
    <link rel="shortcut icon" href="/static/images/icon/header.png">
    <meta name="Keywords" content="" />
    <meta name="description" content="" />
    <script type="text/javascript">
        //判断浏览器是否支持HTML5
        window.onload = function() {
            if (!window.applicationCache) {
                window.location.href="ie.html";
            }
        }
    </script>
</head>
<body>
<section class="container user-select">
  <header>
    <div class="hidden-xs header"><!--超小屏幕不显示-->
        <h1 class="logo"> <a href="index.html" title="异清轩技术博客 - POWERED BY WY ALL RIGHTS RESERVED"></a> </h1>
        <ul class="nav hidden-xs-nav">
            <li class="active"><a href="<?php echo url('index'); ?>"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
            <!--<li><a href=""><span class="glyphicon glyphicon-erase"></span>网站前端</a></li>-->
            <!--<li><a href=""><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>-->
            <!--<li><a href=""><span class="glyphicon glyphicon-globe"></span>管理系统</a></li>-->
            <!--<li><a href="about.html"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>-->
            <!--<li><a href="friendly.html"><span class="glyphicon glyphicon-tags"></span>友情链接</a></li>-->
        </ul>
        <!--<div class="feeds"> <a class="feed feed-xlweibo" href="" target="_blank"><i></i>新浪微博</a> <a class="feed feed-txweibo" href="" target="_blank"><i></i>腾讯微博</a> <a class="feed feed-rss" href="" target="_blank"><i></i>订阅本站</a> <a class="feed feed-weixin" data-toggle="popover" data-trigger="hover" title="微信扫一扫" data-html="true" data-content="<img src='images/weixin.jpg' alt=''>" href="javascript:;" target="_blank"><i></i>关注微信</a> </div>-->
        <div class="wall"><a href="readerWall.html" target="_blank">读者墙</a> | <a href="tags.html" target="_blank">标签云</a></div>
    </div>
    <!--/超小屏幕不显示-->
    <div class="visible-xs header-xs"><!--超小屏幕可见-->
        <div class="navbar-header header-xs-logo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-xs-menu" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
        </div>
        <div id="header-xs-menu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav header-xs-nav">
                <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
                <!--<li><a href=""><span class="glyphicon glyphicon-erase"></span>网站前端</a></li>-->
                <!--<li><a href=""><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>-->
                <!--<li><a href=""><span class="glyphicon glyphicon-globe"></span>管理系统</a></li>-->
                <!--<li><a href="about.html"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>-->
                <!--<li><a href="friendly.html"><span class="glyphicon glyphicon-tags"></span>友情链接</a></li>-->
            </ul>
            <form class="navbar-form" action="search.php" method="post" style="padding:0 25px;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="请输入关键字">
                    <span class="input-group-btn">
            <button class="btn btn-default btn-search" type="submit">搜索</button>
            </span> </div>
            </form>
        </div>
    </div>
</header>
  <!--/超小屏幕可见-->
  <div class="content-wrap"><!--内容-->
    <div class="content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--banner-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active"> <a href="content.html" target="_blank"><img src="/static/images/img1.jpg" alt="" /></a>
            <div class="carousel-caption"> 欢迎来到夏治财的博客，在这里你什么也看不到 </div>
            <span class="carousel-bg"></span> </div>
          <div class="item"> <a href="content.html" target="_blank"><img src="/static/images/img2.jpg" alt="" /></a>
            <div class="carousel-caption"> 欢迎来到夏治财的博客，在这里你什么也看不到 </div>
            <span class="carousel-bg"></span> </div>
          <div class="item"> <a href="content.html" target="_blank"><img src="/static/images/img3.jpg" alt="" /></a>
            <div class="carousel-caption"> 欢迎来到夏治财的博客，在这里你什么也看不到 </div>
            <span class="carousel-bg"></span> </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      <!--/banner-->
      <div class="content-block hot-content hidden-xs">
        <h2 class="title"><strong>本周热门排行</strong></h2>
        <ul>
          <li class="large"><a href="content.html" target="_blank"><img src="/static/images/img3.jpg" alt="">
            <h3> 欢迎来到夏治财的博客 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="/static/images/logo.jpg" alt="">
            <h3> 欢迎来到夏治财的博客，在这里你什么也看不到 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="/static/images/img2.jpg" alt="">
            <h3> 欢迎来到夏治财的博客，在这里你什么也看不到 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="/static/images/img1.jpg" alt="">
            <h3> 欢迎来到夏治财的博客，在这里你什么也看不到 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="/static/images/logo.jpg" alt="">
            <h3> 欢迎来到夏治财的博客，在这里你什么也看不到 </h3>
            </a></li>
        </ul>
      </div>
      <div class="content-block new-content">
        <h2 class="title"><strong>最新文章</strong></h2>
        <div class="row">
          <?php if(is_array($articleList) || $articleList instanceof \think\Collection || $articleList instanceof \think\Paginator): if( count($articleList)==0 ) : echo "" ;else: foreach($articleList as $key=>$v): ?>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo htmlentities($v['image']); ?>" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > <?php echo htmlentities($v['title']); ?> </a> </dt>
                <dd><span class="name"><a href="javascript:void(0);" title="由 <?php echo htmlentities($v['author']); ?> 发布" rel="author"><?php echo htmlentities($v['author']); ?></a></span> <span class="identity"></span> <span class="time"> <?php echo htmlentities(date("Y-m-d",!is_numeric($v['createtime'])? strtotime($v['createtime']) : $v['createtime'])); ?> </span></dd>
                <dd class="text"><?php echo htmlentities($v['introduction']); ?></dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="javascript:void(0);"><?php echo htmlentities($v['label']); ?></a> </span> <span class="look"> 共 <strong><?php echo htmlentities($v['view']); ?></strong> 次浏览</span> </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <!--<div class="news-more" id="pagination">
        	<a href="">查看更多</a>
        </div>-->
        <div class="quotes" style="margin-top:15px"><?php echo htmlentities($pageList); ?></div>
      </div>
    </div>
  </div>
  <!--/内容-->
<aside class="sidebar visible-lg"><!--右侧>992px显示-->
    <div class="sentence"> <strong>每日一句</strong>
        <h2 id="time"></h2>
        <p><?php echo htmlentities($sentence); ?></p>
    </div>
    <div id="search" class="sidebar-block search" role="search">
        <h2 class="title"><strong>搜索</strong></h2>
        <form class="navbar-form" action="search.php" method="post">
            <div class="input-group">
                <input type="text" class="form-control" size="35" placeholder="请输入关键字">
                <span class="input-group-btn">
          <button class="btn btn-default btn-search" type="submit">搜索</button>
          </span> </div>
        </form>
    </div>
    <div class="sidebar-block recommend">
        <h2 class="title"><strong>热门推荐</strong></h2>
        <ul>
            <li><a target="_blank" href=""> <span class="thumb"><img src="/static/images/icon/icon.png" alt=""></span> <span class="text">博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        </ul>
    </div>
    <div class="sidebar-block comment">
        <h2 class="title"><strong>最新评论</strong></h2>
        <ul>
            <li data-toggle="tooltip" data-placement="top" title="站长的评论"><a target="_blank" href=""><span class="face"><img src="/static/images/icon/icon.png" alt=""></span> <span class="text"><strong>站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        </ul>
    </div>
</aside>

<script>
    window.onload=function () {
        var date = new Date();
        var year = date.getFullYear();
        var mouth = date.getMonth() + 1;
        var day = date.getDate();
        var week = '星期一';
        switch (date.getDay()){
            case 1:week='星期一';break;
            case 2:week='星期二';break;
            case 3:week='星期三';break;
            case 4:week='星期四';break;
            case 5:week='星期五';break;
            case 6:week='星期六';break;
            case 7:week='星期日';break;
        }
        var times = year + '年' + mouth + '月' + day + '日  ' + week;
        $('#time').html(times);
    };
</script>
  <footer class="footer">POWERED BY &copy;<a href="http://www.ylsat.com">夏治财 YLSAT.COM</a> ALL RIGHTS RESERVED &nbsp;&nbsp;&nbsp;<span><a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备15026801号-1</a></span> <span style="display:none"><a href="">网站统计</a></span> </footer>
</section>
<div><a href="javascript:;" class="gotop" style="display:none;"></a></div>
<!--/返回顶部-->
<script src="/static/js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="/static/js/nprogress.js" type="text/javascript" ></script>
<script src="/static/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
//页面加载
$('body').show();
$('.version').text(NProgress.version);
NProgress.start();
setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
//返回顶部按钮
$(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>100){
			$(".gotop").fadeIn();
		}
		else{
			$(".gotop").hide();
		}
	});
	$(".gotop").click(function(){
		$('html,body').animate({'scrollTop':0},500);
	});
});
//提示插件启用
$(function () {
  $('[data-toggle="popover"]').popover();
});
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});
//鼠标滑过显示 滑离隐藏
$(function(){
	$(".carousel").hover(function(){
		$(this).find(".carousel-control").show();
	},function(){
		$(this).find(".carousel-control").hide();
	});
});
$(function(){
	$(".hot-content ul li").hover(function(){
		$(this).find("h3").show();
	},function(){
		$(this).find("h3").hide();
	});
});
//页面元素智能定位
$.fn.smartFloat = function() {
	var position = function(element) {
		var top = element.position().top; //当前元素对象element距离浏览器上边缘的距离
		var pos = element.css("position"); //当前元素距离页面document顶部的距离
		$(window).scroll(function() { //侦听滚动时
			var scrolls = $(this).scrollTop();
			if (scrolls > top) { //如果滚动到页面超出了当前元素element的相对页面顶部的高度
				if (window.XMLHttpRequest) { //如果不是ie6
					element.css({ //设置css
						position: "fixed", //固定定位,即不再跟随滚动
						top: 0 //距离页面顶部为0
					}).addClass("shadow"); //加上阴影样式.shadow
				} else { //如果是ie6
					element.css({
						top: scrolls  //与页面顶部距离
					});
				}
			}else {
				element.css({ //如果当前元素element未滚动到浏览器上边缘，则使用默认样式
					position: pos,
					top: top
				}).removeClass("shadow");//移除阴影样式.shadow
			}
		});
	};
	return $(this).each(function() {
		position($(this));
	});
};
//启用页面元素智能定位
$(function(){
	$("#search").smartFloat();
});
//异步加载更多内容
jQuery("#pagination a").on("click", function ()
{
    var _url = jQuery(this).attr("href");
    var _text = jQuery(this).text();
    jQuery(this).attr("href", "javascript:viod(0);");
    jQuery.ajax(
    {
        type : "POST",
        url : _url,
        success : function (data)
        {
            //将返回的数据进行处理，挑选出class是news-list的内容块
            result = jQuery(data).find(".row .news-list");
            //newHref获取返回的内容中的下一页的链接地址
            nextHref = jQuery(data).find("#pagination a").attr("href");
            jQuery(this).attr("href", _url);
            if (nextHref != undefined)
            {
                jQuery("#pagination a").attr("href", nextHref);
            }
			else
            {
                jQuery("#pagination a").html("下一页没有了").removeAttr("href")
            }
            // 渐显新内容
            jQuery(function ()
            {
                jQuery(".row").append(result.fadeIn(300));
                jQuery("img").lazyload(
                {
                    effect : "fadeIn"
                });
            });
        }
    });
    return false;
});
</script>
</body>
</html>
