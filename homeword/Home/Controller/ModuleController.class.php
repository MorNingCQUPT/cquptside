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

        $list = $date->limit(8)->select();
        $this->assign('module',$list[0]['module']);
        $this->assign("list",$list);
        $this->display();
    }

} 