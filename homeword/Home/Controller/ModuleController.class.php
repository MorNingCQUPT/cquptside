<?php
/**
 * Created by PhpStorm.
 * User: LGrok
 * Date: 5/16/14
 * Time: 8:47 AM
 */
namespace Home\Controller;
use Think\Controller;

class ModuleController extends Controller{
    public function index(){
        $date = M("artical");
        $module = array(
            "xyfc"=>"学院新闻",
            "xshd"=>"学生活动"
        );
        $map["module"] = $module[I("get.m")];
        $list = $date->limit(8)->where($map)->select();
        $this->assign('module',$list[0]['module']);
        $this->assign("list",$list);
        $this->display();
    }

} 