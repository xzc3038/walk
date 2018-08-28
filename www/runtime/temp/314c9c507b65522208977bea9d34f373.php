<?php /*a:5:{s:56:"D:\work\walk\www\application\index\view\about\index.html";i:1535448398;s:58:"D:\work\walk\www\application\index\view\common\header.html";i:1535443161;s:62:"D:\work\walk\www\application\index\view\common\sider-left.html";i:1535452649;s:63:"D:\work\walk\www\application\index\view\common\sider-right.html";i:1535452649;s:58:"D:\work\walk\www\application\index\view\common\footer.html";i:1535443160;}*/ ?>
  <!doctype html>
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
            <li class="active"><a href="<?php echo url('index/index/index'); ?>"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
            <!--<li><a href=""><span class="glyphicon glyphicon-erase"></span>网站前端</a></li>-->
            <!--<li><a href=""><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>-->
            <!--<li><a href=""><span class="glyphicon glyphicon-globe"></span>管理系统</a></li>-->
            <li><a href="<?php echo url('index/about/index'); ?>"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
            <li><a href="<?php echo url('index/link/index'); ?>"><span class="glyphicon glyphicon-tags"></span>友情链接</a></li>
        </ul>
        <!--<div class="feeds"> <a class="feed feed-xlweibo" href="" target="_blank"><i></i>新浪微博</a> <a class="feed feed-txweibo" href="" target="_blank"><i></i>腾讯微博</a> <a class="feed feed-rss" href="" target="_blank"><i></i>订阅本站</a> <a class="feed feed-weixin" data-toggle="popover" data-trigger="hover" title="微信扫一扫" data-html="true" data-content="<img src='images/weixin.jpg' alt=''>" href="javascript:;" target="_blank"><i></i>关注微信</a> </div>-->
        <div class="wall"><a href="<?php echo url('index/user/login'); ?>" target="_blank">登录</a> | <a href="<?php echo url('index/user/login'); ?>" target="_blank">注册</a> | <a href="<?php echo url('index/user/login'); ?>" target="_blank">忘记密码</a> | <a href="<?php echo url('index/user/login'); ?>" target="_blank">注销</a></div>
    </div>
    <!--/超小屏幕不显示-->
    <div class="visible-xs header-xs"><!--超小屏幕可见-->
        <div class="navbar-header header-xs-logo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-xs-menu" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
        </div>
        <div id="header-xs-menu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav header-xs-nav">
                <li class="active"><a href="<?php echo url('index/index/index'); ?>"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
                <!--<li><a href=""><span class="glyphicon glyphicon-erase"></span>网站前端</a></li>-->
                <!--<li><a href=""><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>-->
                <!--<li><a href=""><span class="glyphicon glyphicon-globe"></span>管理系统</a></li>-->
                <li><a href="<?php echo url('index/about/index'); ?>"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
                <li><a href="<?php echo url('index/link/index'); ?>"><span class="glyphicon glyphicon-tags"></span>友情链接</a></li>
            </ul>
            <form class="navbar-form" action="search" method="post" style="padding:0 25px;">
                <div class="input-group">
                    <input type="text" class="form-control" name="content" placeholder="请输入关键字">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-search" type="submit">搜索</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</header>
  <!--/超小屏幕可见-->
  <div class="content-wrap"><!--内容-->
    <div class="content">
      <div class="content-block about-content">
        <h2 class="title"><strong>关于本博客</strong></h2>
        <p class="line-title">想要深入了解<span>本博客？</span></p>
        <p>PHP原始为Personal Home Page的缩写，已经正式更名为 "PHP: Hypertext Preprocessor"。注意不是“Hypertext Preprocessor”的缩写，这种将名称放到定义中的写法被称作递归缩写。PHP于1994年由Rasmus Lerdorf创建，刚刚开始是Rasmus Lerdorf为了要维护个人网页而制作的一个简单的用Perl语言编写的程序。这些工具程序用来显示 Rasmus Lerdorf 的个人履历，以及统计网页流量。后来又用C语言重新编写，包括可以访问数据库。他将这些程序和一些表单直译器整合起来，称为 PHP/FI。PHP/FI 可以和数据库连接，产生简单的动态网页程序。</p>
        <p>在1995年以Personal Home Page Tools (PHP Tools) 开始对外发表第一个版本，Lerdorf写了一些介绍此程序的文档。并且发布了PHP1.0！在这的版本中，提供了访客留言本、访客计数器等简单的功能。以后越来越多的网站使用了PHP，并且强烈要求增加一些特性。比如循环语句和数组变量等等；在新的成员加入开发行列之后，Rasmus Lerdorf 在1995年6月8日将 PHP/FI 公开发布，希望可以透过社群来加速程序开发与寻找错误。这个发布的版本命名为 PHP 2，已经有 PHP 的一些雏型，像是类似 Perl的变量命名方式、表单处理功能、以及嵌入到 HTML 中执行的能力。程序语法上也类似 Perl，有较多的限制，不过更简单、更有弹性。PHP/FI加入了对MySQL的支持，从此建立了PHP在动态网页开发上的地位。到了1996年底，有15000个网站使用 PHP/FI。</p>
        <p>在1997年，任职于 Technion IIT公司的两个以色列程序设计师：Zeev Suraski 和 Andi Gutmans，重写了 PHP 的剖析器，成为 PHP 3 的基础。而 PHP 也在这个时候改称为PHP：Hypertext Preprocessor。经过几个月测试，开发团队在1997年11月发布了 PHP/FI 2。随后就开始 PHP 3 的开放测试，最后在1998年6月正式发布 PHP 3。Zeev Suraski 和 Andi Gutmans 在 PHP 3 发布后开始改写PHP 的核心，这个在1999年发布的剖析器称为 Zend Engine，他们也在以色列的 Ramat Gan 成立了 Zend Technologies 来管理 PHP 的开发。</p>
        <p>在2000年5月22日，以Zend Engine 1.0为基础的PHP 4正式发布，2004年7月13日则发布了PHP 5，PHP 5则使用了第二代的Zend Engine。PHP包含了许多新特色，像是强化的面向对象功能、引入PDO（PHP Data Objects，一个存取数据库的延伸函数库）、以及许多效能上的增强。PHP 4已经不会继续 更新，以鼓励用户转移到PHP 5。</p>
        <p>2008年PHP 5成为了PHP唯一的有在开发的PHP版本。将来的PHP 5.3将会加入Late static binding和一些其他的功能强化。PHP 6 的开发也正在进行中，主要的改进有移除register_globals、magic quotes 和 Safe mode的功能。</p>
      </div>
      <div class="content-block contact-content">
        <h2 class="title"><strong>联系站长</strong></h2>
        <p><span>站长QQ：</span><a href="tencent://message/?uin=1170461017\">不告诉你</a></p>
        <p><span>交流群：</span><a href="">不告诉你</a></p>
        <p><span>站长信箱：</span><a href="mailto:admin@ylsat.com">不告诉你</a></p>
      </div>
      <div class="content-block comment">
        <h2 class="title"><strong>添加留言</strong></h2>
        <form action="message.php" method="post" class="form-inline" id="comment-form">
          <div class="comment-title">
            <!--<div class="form-group">-->
              <!--<label for="messageName">姓名：</label>-->
              <!--<input type="text" name="messageName" class="form-control" id="messageName" placeholder="异清轩">-->
            <!--</div>-->
            <!--<div class="form-group">-->
              <!--<label for="messageEmail">邮箱：</label>-->
              <!--<input type="email" name="messageEmail" class="form-control" id="messageEmail" placeholder="admin@ylsat.com">-->
            <!--</div>-->
          </div>
          <div class="comment-form">
            <textarea placeholder="在此处填写留言内容" name="messageContent"></textarea>
            <div class="comment-form-footer">
              <!--<div class="comment-form-text">请先 <a href="javascript:;">登录</a> 或 <a href="javascript:;">注册</a></div>-->
              <div class="comment-form-btn">
                <button type="submit" class="btn btn-default btn-comment">提交留言</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/内容-->
  <!--/内容-->
<aside class="sidebar visible-lg"><!--右侧>992px显示-->
    <div class="sentence"> <strong>每日一句</strong>
        <h2 id="time"></h2>
        <p id="sentence"></p>
    </div>
    <div id="search" class="sidebar-block search" role="search">
        <h2 class="title"><strong>搜索</strong></h2>
        <form class="navbar-form" action="search" method="post">
            <div class="input-group">
                <input type="text" class="form-control" name="content" size="35" placeholder="请输入关键字">
                <span class="input-group-btn">
          <button class="btn btn-default btn-search" type="submit">搜索</button>
          </span> </div>
        </form>
    </div>
    <div class="sidebar-block recommend">
        <h2 class="title"><strong>热门文章</strong></h2>
        <ul id="article"></ul>
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

        var article = '';
        var article1 = '<li><a href="javascript:void(0);"> <span class="thumb"><img src="';
        var article2 = '"></span> <span class="text">';
        var article3 = '</span> <span class="text-muted">浏览(';
        var article4 = ')</span></a></li>';

        $.ajax({
            url:"../index/side",
            type:"post",
            data:{},
            dataType:"json",
            success:function(data){
                $('#sentence').html(data.sentenceOne);
                $.each(data.article,function (index,v) {
                    article += article1 + v.image + article2 + v.title + article3 + v.view + article4;
                });
                $('#article').html(article);
            },
            error:function(){
                $('#sentence').html('尽请期待');
            }
        });
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
