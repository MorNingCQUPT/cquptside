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
	<script type="text/javascript" src="/homeword/Public/js/doc.js"></script>
</head>
<body class="fontSet">
<!--公用头部-->
<div id="header" class="navbar">
    <div class="navbar-inner">
        <!--导航条 请根据需要添加或修改-->
		<div class="container">
        <ul class="nav">
            <li id="index" class="active"><a href="/index.php">首页</a></li>
            <li id="xyfc"><a href="/index.php/Home/module/index/m/xyfc">学院新闻</a></li>
            <li id="xshd"><a href="/index.php/Home/module/index/m/xshd">学生活动</a></li>
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
    <span class="doc-listBar">您的位置：<a href="/index.php">首页</a>&gt;<a id="listBarLink" href=""><?php echo ($module); ?></a> </span>
</div>
<div class="container doc-container">
    <div class="row">
        <div class="doc-detail-list">
            <div class="span8">
                <div class="accordion-group">
                    <div class="accordion-heading doc-list-head">文章列表</div>
                    <ul class="doc-list-ul">
                        <!--detailList的循环体，只取相关表文章
                            当然了，做搜索页另当别论，a标签插文
                            章页面，span里可以插时间，这个页面
                            最好只取30个值，多的用分页分开
                        -->
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="accordion-inner">
                                <b class="icon-file"></b>
                                <a href="/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                                <span class="pull-right"><?php echo ($vo["date"]); ?></span>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        <!--循环结束-->
                    </ul>
                    <!--分页按钮 当为第一页时请隐藏上一页按钮，为最后一页时请隐藏下一页按钮-->
                    <div class="doc-control-btn">
                        <a id="doc-c-prev" href="#">上一页</a> |
                        <a id="doc-c-next" href="#">下一页</a> |
                        <input id="jumpPage" type="text" /> <a href="#">跳转</a>
                    </div>
                    <!--分页结束-->
                </div>
            </div>
            <div class="span4">
                <div class="accordion doc-accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <?php echo ($module_side_up); ?><b class="icon-chevron-down pull-right doc-btn-active"></b>
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <?php if(is_array($list_side_up)): $i = 0; $__LIST__ = $list_side_up;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="accordion-inner doc-volist"><a href="/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <?php echo ($module_side_down); ?><b class="icon-chevron-down pull-right doc-btn-active"></b>
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse in">
                            <?php if(is_array($list_side_down)): $i = 0; $__LIST__ = $list_side_down;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="accordion-inner doc-volist"><a href="/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
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