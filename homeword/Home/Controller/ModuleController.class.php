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

        #侧栏
        $map2['parmodule']=$list[0]["parmodule"];
        $module_slip = $date->where($map2)->group("module")->select();
        #侧栏up
        $map["module"]= $module_slip[0]["module"];
        $list_side_up = $date->where($map)->select();
        $this->assign("list_side_up",$list_side_up);
        $this->assign("module_side_up",$list_side_up[0]["module"]);
        #侧栏down
        $map["module"]= $module_slip[1]["module"];
        $list_side_down = $date->where($map)->select();
        $this->assign("list_side_down",$list_side_down);
        $this->assign("module_side_down",$list_side_down[0]["module"]);


        $this->display();
    }

} 