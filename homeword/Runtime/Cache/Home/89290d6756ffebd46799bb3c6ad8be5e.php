<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>文章页</title>
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
        <!--导航条-->
        <ul class="nav">
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="#">文章区</a></li>
            <li><a href="#">扶她板载</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="/page.html">登陆<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li id="signIn"><a type="button" data-toggle="modal" data-target="#myLoginBox">登陆</a></li>
                    <li id="regist"><a type="button" data-toggle="modal" data-target="#registBox">注册</a></li>
                    <li class="divider"></li>
                    <li id="close"><a href="#">关闭</a></li>
                </ul>
            </li>
        </ul>
        <!--导航条结束-->
        <!--搜索条-->
        <form class="form-search doc-form pull-right">
            <div class="input-append">
                <input type="text" class="span2 search-query">
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
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputUsername">用户名</label>
                <div class="controls">
                    <input type="text" id="inputUsername" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">密码</label>
                <div class="controls">
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
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input-r-user">用户名</label>
                <div class="controls">
                    <input type="text" id="input-r-user" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input-r-password">密码</label>
                <div class="controls">
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
<!--container-->
<div class="container">
    <span class="doc-listBar">您的位置：<a href="/index.php">首页</a>&gt;<a href="/index.php/Home/module/index/m/<?php echo ($mo); ?>"><?php echo ($module); ?></a>&gt;<a href="#"><?php echo ($title); ?></a> </span>
</div>
<div class="container doc-container">
    <div class="row">
        <div class="span8">
            <div class="doc-article">
                <!--文章标题-->
                <h4 class="doc-article-title"><?php echo ($title); ?></h4>
                <!--标题结束-->
                <div>
                    <!--文章信息 包括作者名，时间，标签-->
                    <div class="doc-article-info">
                        <span class="doc-article-author">作者：<?php echo ($author); ?></span>
                        <span class="doc-article-time">时间：<?php echo ($date); ?></span>
                        <span>标签： jQuery  CSS</span>
                    </div>
                    <!--文章信息结束-->
                    <!--文章内容-->
                    <div class="doc-article-content">
                        <!--直接全部插在这里面-->
                        <?php echo ($content); ?>
                    </div>
                    <!--内容结束-->
                </div>
            </div>
        </div>
        <div class="span3">
            <!--标签文章-->
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            <?php echo ($module); ?><b class="icon-chevron-down pull-right doc-btn-active"></b>
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div><a href="#"><?php echo ($vo["title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            PHP<b class="icon-chevron-up pull-right doc-btn-active"></b>
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <a href="#">thinkPHP</a>
                        </div>
                        <div class="accordion-inner">
                            <a href="#">smarty</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--标签文章结束-->
            <!--友情链接-->
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
            <!--友情链接结束-->
        </div>
    </div>
</div>
<!--公用网页脚部-->
<div id="footer">
    <div class="container">
        <div class="doc-foot-left pull-left">
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