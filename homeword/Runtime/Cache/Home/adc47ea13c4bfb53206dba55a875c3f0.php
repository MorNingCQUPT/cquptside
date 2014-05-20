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
            <li id="xyfc"><a href="/index.php/Home/module/index/m/xyfc">学院动态</a></li>
            <li id="xshd"><a href="/index.php/Home/module/index/m/xshd">学生活动</a></li>

            <li class="dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="/index.php/Home/module/index/m/xyfc">
                    学院动态<b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li id="xyfc">
                        <a type="button" data-toggle="modal" href="/index.php/Home/module/index/m/xyfc">学院新闻</a>
                    </li>
                    <li id="xshd">
                        <a type="button" data-toggle="modal" href="/index.php/Home/module/index/m/xshd">学生活动</a>
                    </li>
                  
                </ul>
            </li>

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
    <div class="container">
    <img id="doc-imgBg" src="/homeword/Public/images/top.gif"/>
    </div>
</div>
<!--首页头部结束-->
<!--container-->
<div class="doc-content">
    <div class="container doc-container">
        <div class="row">
            <div class="span8">
                <div class="doc-content">
					<div class="silder" id="silder">
						<ul class="silder_list" id="silder_list">
							<li>
								<img src="/homeword/Public/images/1.jpg" border="0" alt="刘淇同志参观北京市志愿者之家">
							</li>
							<li>
								<img src="/homeword/Public/images/2.jpg" border="0" alt="刘淇同志与志愿者合影">
							</li>
							<li>
								<img src="/homeword/Public/images/3.jpg" border="0" alt="刘淇同志到北京大学人民医院调研">
							</li>
							<li>
								<img src="/homeword/Public/images/4.jpg" border="0" alt="2013中国志愿服务国际交流大会在京举行">
							</li>                    
						</ul>
					</div>
				</div>
				<script type="text/javascript">$('#silder').imgSilder({s_width:"100%", s_height:"auto", is_showTit:true, s_times:3000,css_link:'/homeword/Public/css/slider.css'});</script>
				<div class="doc-content">
					<div class="span4">
						<!--首页文章列表-->
						<h5 class="doc-span-title">&nbsp;学校新闻<a class="pull-right" href="">更多&nbsp;</a></h5>
						<ul class="doc-span-ul doc-bg">
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>[<?php echo ($vo["date"]); ?>]</span><a href="/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						<!--循环体结束-->
						</ul>
					</div>
					<div class="span4">
						<!--首页文章列表-->
						<h5 class="doc-span-title">&nbsp;今日关注<a class="pull-right" href="">更多&nbsp;</a></h5>
						<ul class="doc-span-ul doc-bg">
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>[<?php echo ($vo["date"]); ?>]</span><a href="/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						<!--循环体结束-->
						</ul>
					</div>
				</div>
            </div>
            <div class="span4">
                <div class="doc-content">
					<!--首页文章列表-->
					<h5 class="doc-span-title">&nbsp;学院新闻<a class="pull-right" href="">更多&nbsp;</a></h5>
					<ul class="doc-span-ul doc-bg">
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>[<?php echo ($vo["date"]); ?>]</span><a href="/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					<!--循环体结束-->
					</ul>
				</div>
				<div class="doc-content" id="linkList">
					<!--首页文章列表-->
					<h5 class="doc-span-title">&nbsp;友情链接<a class="pull-right" href="">更多&nbsp;</a></h5>
					<ul class="doc-span-ul doc-bg">
						<li><a href="">百度</a></li>
						<li><a href="">百度</a></li>
						<li><a href="">百度</a></li>
						<li><a href="">百度</a></li>
						<li><a href="">百度</a></li>
						<li><a href="">百度</a></li>
					</ul>
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
</body>
</html>