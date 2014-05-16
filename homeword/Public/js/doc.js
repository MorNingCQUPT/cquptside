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

    //固定导航条
    $(window).scroll(function(){
        if($(window).scrollTop()==0){
            $("#header").removeClass("navbar-fixed-top");
        }else{
            $("#header").addClass("navbar-fixed-top");
        }

    });

    //userAgent
    /*
    var ua = navigator.userAgent;
    if(ua.indexOf("Android")>-1||ua.indexOf("iPhone") > -1||ua.indexOf("iPod") > -1||ua.indexOf("iPad") >-1||ua.indexOf("NokiaN")||ua.indexOf("Mobile") > -1){
        var doc = document,
            nav = doc.getElementsByClassName("nav")[0],
            docForm = doc.getElementsByClassName("doc-form")[0],
            container = doc.getElementsByClassName("container"),
            span8 = doc.getElementsByClassName("span8")[0],
            span4 = doc.getElementsByClassName("span3")[0],
            myCarousel = doc.getElementById("myCarousel"),
            row = doc.getElementsByClassName("row");
        $body.css("padding",0);
        $(nav).css("margin",0);
        $(docForm).css("margin",0);
        $(span8).attr("class","span8");
        $(span4).attr("class","span4");
        $(myCarousel).css("max-width","100%");
        $(container).each(function(){
            $(this).attr("class","container-fluid");
        });
        $(row).each(function(){
            $(this).attr("class","row-fluid");
        })
    }*/
});