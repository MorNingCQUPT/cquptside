<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>首页</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="/homeword/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/homeword/Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/homeword/Public/css/doc-style.css" />
    <script type="text/javascript" src="/homeword/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/homeword/Public/js/bootstrap.min.js"></script>
</head>
<body class="fontSet">
<!--公用头部-->
<div id="header" class="navbar">
    <div class="navbar-inner doc-nav">
        <!--导航条 请根据需要添加或修改-->
        <ul class="nav">
            <li class="active"><a href="/index.php">首页</a></li>
            <li><a href="/index.php/Home/module/index/m/xyfc">学院新闻</a></li>
            <li><a href="/index.php/Home/module/index/m/xshd">学生活动</a></li>
            <!--导航条下拉菜单-->
            <li class="dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                    登陆<b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li id="signIn">
                        <a type="button" data-toggle="modal" data-target="#myLoginBox">登陆</a>
                    </li>
                    <li id="regist">
                        <a type="button" data-toggle="modal" data-target="#registBox">注册</a>
                    </li>
                    <li class="divider"></li>
                    <li id="close">
                        <a href="#">关闭</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!--导航条结束-->
        <!--搜索条 请将搜索请求的url写到 form的action属性里
            或者做成AJAX get请求也可以
        -->
        <form class="form-search doc-form pull-right">
            <div class="input-append">
                <!--搜索框-->
                <input id="input-search" type="text" class="span2 search-query">
                <!--提交按钮-->
                <button type="submit" class="btn">Search</button>
            </div>
        </form>
        <!--搜索条结束-->
    </div>
</div>
<!--登陆窗口-->
<div id="myLoginBox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">登陆</h3>
    </div>
    <div class="modal-body">
        <p>
            <!--这里也有两个选择，一是AJAX异步请求
                二是直接提交到action地址，当登陆完
                成后，请将导航栏的下拉菜单替换为登
                陆用户名，并附加注销按钮以及功能，
                请脑补一下_(:з」∠)_
            -->
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputUsername">用户名</label>
                <div class="controls">
                    <!--用户名输入框 id:inputUsername-->
                    <input type="text" id="inputUsername" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">密码</label>
                <div class="controls">
                    <!--密码输入框 id:inputPassword-->
                    <input type="password" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"> 保持登陆状态
                    </label>
                    <button type="submit" class="btn">登陆</button>
                </div>
            </div>
        </form>
        <!--sign in end-->
        </p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>
<!--登陆窗口结束-->
<!--注册窗口-->
<div id="registBox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myRegistLabel">登陆</h3>
    </div>
    <div class="modal-body">
        <p>
            <!--这里是注册表单，同上-->
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input-r-user">用户名</label>
                <div class="controls">
                    <!--注册用户名-->
                    <input type="text" id="input-r-user" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input-r-password">密码</label>
                <div class="controls">
                    <!--注册密码-->
                    <input type="password" id="input-r-password" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">注册</button>
                </div>
            </div>
        </form>
        </p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>
<!--注册窗口结束-->
<!--公用头部结束-->
<!--doc_header 首页头部请按兴趣随便更改-->
<div class="doc-header" id="content">
    <img id="doc-imgBg" src="/homeword/Public/images/bg.jpg"/>
    <div class="container">
        <h1 class="fontSet">有作业，才有你_(:з」∠)_</h1>
        <p class="doc-header-title fontSet">今天是个好日子，我撑着伞走在油菜花遍布的路上，我看见了很多小跳蚤。他们一蹦一跳的很是可爱。你知道吗山麓书院怎么读，卧槽我不知道。</p>
        <p>
            <a class="btn btn-primary btn-shadow btn-info fontSet" id="btn-slide-down" href="#"> 开始浏览 </a>
        </p>
    </div>
</div>
<!--首页头部结束-->
<!--container-->
<div class="doc-content">
    <div class="container doc-container">
        <div class="row">
            <div class="span8">
                <div class="span5 doc-span5">
                    <!--滑动模块
                        列表的第一个class必须为active,
                        其他的data-slide-to依次递增
                    -->
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- 这里item初始化图片，
                             并且第一个也需要有
                             active的class
                         -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="/homeword/Public/images/Chrysanthemum.jpg" />
                            </div>
                            <div class="item">
                                <img src="/homeword/Public/images/Desert.jpg"/>
                            </div>
                            <div class="item">
                                <img src="/homeword/Public/images/Hydrangeas.jpg"/>
                            </div>
                        </div>
                        <!-- 前后控制按钮 -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                    <!--滑动模块结束-->
                </div>
                <!--首页文章列表-->
                <div class="span3">
                    <h5 class="doc-span-title clearfix">&nbsp;学院新闻<a class="pull-right" href="">更多&nbsp;</a></h5>
                    <ul class="doc-span-ul doc-bg">
                        <!--循环体
                            这里只取八篇文章
                            由于排版的缘故，
                            八篇是极限了，在
                            平板或者其他小尺
                            寸设备下，这块长
                            度参差不齐。。。
                        -->
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--循环体结束-->
                    </ul>
                </div>
                <!--文章列表结束-->
                <!--最新文章首页显示-->
                <div class="doc-article">
                    <h4 class="doc-article-title"><?php echo ($title); ?></h4><!--标题-->
                    <div>
                        <!--信息-->
                        <div class="doc-article-info">
                            <span class="doc-article-author">作者：<?php echo ($author); ?></span>
                            <span class="doc-article-time"><?php echo ($date); ?></span>
                        </div>
                        <div class="doc-article-content">
                            <?php echo ($content); ?>
                            <a href="#">更多</a>
                        </div>
                    </div>
                </div>
                <!--
                <div class="doc-article">
                    <h4 class="doc-article-title">使用jQuery和CSS将背景图片拉伸</h4>
                    <div>
                        <div class="doc-article-info">
                            <span class="doc-article-author">作者：月光光</span>
                            <span class="doc-article-time">时间：2012-11-26 22:36</span>
                            <span>标签： jQuery  CSS</span>
                        </div>
                        <div class="doc-article-content">
                            <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;将背景图片拉伸，而不是平铺，注意平铺效果我们可以使用CSS的background-repeat来实行背景图片的平铺效果，本文讨论的是背景图片的拉伸效果。这种效果在一些前卫的页面设计中已经广泛应用，尤其在一些独立页面，像登录页面使用拉伸的背景图片效果比较常见。
                            </p>
                            <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;目前有两种解决方案可以实现背景图片拉伸效果，一种是CSS，我们可以使用background-size:cover实现图片的拉伸效果，但是IE8及以下版本不支持background-size，于是我们尝试使用微软的滤镜效果，但是IE6不支持，毕竟还有一些后进生在使用IE6。另一种解决方案是使用jQuery，完全解决浏览器的兼容性问题，还是jQuery威武。
                            </p>
                            <a href="#">更多</a>
                        </div>
                    </div>
                </div>
                <div class="doc-article">
                    <h4 class="doc-article-title">使用jQuery和CSS将背景图片拉伸</h4>
                    <div>
                        <div class="doc-article-info">
                            <span class="doc-article-author">作者：月光光</span>
                            <span class="doc-article-time">时间：2012-11-26 22:36</span>
                            <span>标签： jQuery  CSS</span>
                        </div>
                        <div class="doc-article-content">
                            <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;目前有两种解决方案可以实现背景图片拉伸效果，一种是CSS，我们可以使用background-size:cover实现图片的拉伸效果，但是IE8及以下版本不支持background-size，于是我们尝试使用微软的滤镜效果，但是IE6不支持，毕竟还有一些后进生在使用IE6。另一种解决方案是使用jQuery，完全解决浏览器的兼容性问题，还是jQuery威武。
                            </p>
                            <a href="#">更多</a>
                        </div>
                    </div>
                </div>
                -->
            </div>
            <div class="span3">
                <!--标签下拉列表，
                    请按照自己的
                    需要增加或修
                    改，并添加链
                    接到每一个分
                    页面
                -->



                <!--标签文章结束-->
                <!--友情链接   放在这个旁边好扎眼，需要改
                <div class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#" class="accordion-toggle">友情链接</a>
                        </div>
                        <div class="accordion-body collapse in">

                            <div class="accordion-inner">
                                <a href="#">百度</a>
                            </div>

                            <div class="accordion-inner">
                                <a href="#">谷歌</a>
                            </div>
                        </div>
                    </div>
                </div>
                友情链接结束-->
            </div>
        </div>
    </div>
</div>
<!--公用网页脚部-->
<div id="footer">
    <div class="container">
        <div class="doc-foot-left pull-left">
            <!--请自行添加或修改-->
            <p>
                <a href="#">关于我们</a> |
                <a href="#">管理入口</a> |
                <a href="#">网站声明</a> |
                <a href="#">网站地图</a>
            </p>
        </div>
        <div class="doc-foot-right pull-right">
            <span>Copyright©2010-2013 All Rights Reserved. </span>
            <a href="#">myIndex.com</a>
        </div>
    </div>
</div>
<!--公用脚部结束-->
<script type="text/javascript" src="/homeword/Public/js/doc.js"></script>
</body>
</html>