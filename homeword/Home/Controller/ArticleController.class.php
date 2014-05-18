<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/16/14
 * Time: 2:53 PM
 */

namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller{
    public function index(){
        $date = M("artical");
        #显示文章id=8
        $id = I('get.id',8);
        $map['id'] = $id;
        $list = $date->where($map)->find();
        dump($list['content']);
        $this->assign('title',$list["title"]);
        $this->assign('author',$list["author"]);
        $this->assign('date',$list["date"]);
        $this->assign('content',$list["content"]);


        $list_art = $date->limit(8)->select();

        $this->display();
    }

} 