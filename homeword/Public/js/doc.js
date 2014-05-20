(function(exports,d){
    var dc_method = document.getElementsByClassName;
    if(dc_method){
        return;
    }
    dc_method = function(classNames,ele,eleId){
        var class_arr,
            class_context,
            class_collection;
        class_arr=[];
        class_context=null;
        if(typeof ele === "undefined"){
            ele = "*";
        }
        if(typeof eleId !== "undefined"){
            class_context = d.getElementById(eleId);
            class_collection = class_context.getElementsByTagName(ele);
        }else{
            class_collection= d.getElementsByTagName(ele);
        }
        for(var i= 0,len=class_collection.length;i<len;i+=1){
            if(class_collection[i].getAttribute("class")===classNames){
                class_arr.push(class_collection[i]);
            }
        }
        return class_arr;
    }
    exports.document.getElementsByClassName = dc_method;

})(window,document);

(function ($) {
  $.fn.silderDefaults = { //默认参数
    s_width:"100%", //容器宽度
	s_height:"auto", //容器高度
	is_showTit:true, // 是否显示图片标题 false :不显示，true :显示
	s_times:3000, //设置滚动时间
	css_link:'css/slider.css'
  };
  $.extendSilder = function (obj,opt) { //obj 元素对象，opt 参数对象
    var g = {  //公共方法， 外部可调用
      //初始化
		init: function () {
			var wh ={width:opt.s_width,height:opt.s_height};
			var pagesize=0; //页码
			var silderList = $('#silder_list',g.obj);
			var silderList_li = $('#silder_list li',g.obj);
			g.LoadCSS(opt.css_link); //样式文件导入
			g.obj.css(wh); silderList.css(wh); silderList_li.find('img').css(wh); //设置宽高属性
			var currHtml = ""; //加入播放页码 及文字描述
			if(opt.is_showTit){ //判断是否显示标题
				currHtml += "<div class='silder_desc' id='silder_desc'></div>";
			}
			img_size = silderList_li.size() ;//图片个数
			
			currHtml += "<ul class='silder_page' id='silder_page'>";//分页码代码注入
			for(var i=0; i < img_size; i++){
				currHtml += "<li>"+ parseInt((1 + i),10) +"</li>";
			}
			currHtml +="</ul>";
            silderList_li.eq(0).show().siblings().hide(); //初始化隐藏其他图片
			g.obj.append(currHtml);//注入分页码
			var silderPage = $('#silder_page',g.obj);
			var silderPage_li =$('#silder_page li',g.obj);
			silderPage_li.eq(0).addClass('current');

			if(opt.is_showTit){ //初始化图片描述
				$('#silder_desc').text(silderList_li.eq(0).find('img').attr('alt'));
			}
			silderPage_li.on('click',function(){
				pagesize = $(this).index();
				//silderList_li.eq(pagesize).fadeIn(1000).siblings().fadeOut(100);
				silderList_li.eq(pagesize).show().siblings().hide();
				$(this).addClass('current').siblings().removeClass('current');
				if(opt.is_showTit){
					$('#silder_desc').text(silderList_li.eq(pagesize).find('img').attr('alt'));
				}
			});
			
			var t;
			silderList.hover(function(){window.clearInterval(t); return;},function(){ t = window.setInterval(function(){
				if(pagesize < img_size && pagesize >= 0)
				{
					//silderList_li.eq(pagesize).fadeIn(1000).siblings().fadeOut(100);
					silderList_li.eq(pagesize).show().siblings().hide();
					silderPage_li.eq(pagesize).addClass('current').siblings().removeClass('current');
					if(opt.is_showTit){
						$('#silder_desc').text(silderList_li.eq(pagesize).find('img').attr('alt'));
					}
					pagesize++;
					if(pagesize >= img_size){
						pagesize = 0;
					}
				}
			},opt.s_times);}).trigger("mouseout"); //悬浮时 停止自动动画,trigger 起默认触发作用
			
		},
		  LoadCSS:function(url){ //新建css
			var s = document.createElement("LINK");
				s.rel = "stylesheet";
				s.type = "text/css";
				s.href = url;
				document.getElementsByTagName("HEAD")[0].appendChild(s);
		  }
    };
    g.obj = $(obj);
    g.init();
    return g;
  }
  $.fn.imgSilder = function (options) {
    if (this.length == 0) return; //判断对象是否存在
    this.each(function () {
      if (this.usedSilder) return;
      var opt = $.extend({}, $.fn.silderDefaults, options); //合并已赋值参数
      this.usedSilder = $.extendSilder(this, opt);
    });
  }
})(jQuery);
$(document).ready(function(){
    var $body=(window.opera)?(document.compatMode=="CSS1Compat"?$('html'):$('body')):$('html,body'),
        doc = document,
        accordionToggle = doc.getElementsByClassName("accordion-toggle");
    $("#btn-slide-down").click(function(){
        $body.animate({scrollTop:$("#content").height()},400);
    });
    $(accordionToggle).each(function(){
        $(this).click(function(){
            $(this).find("b").toggleClass("icon-chevron-up icon-chevron-down");
        });
    });
});