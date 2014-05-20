<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/20/14
 * Time: 8:41 PM
 */



class ModuleChange {
    function ascii2utf($ascii) {
        $module = array(
            "xyfc"=>"学院新闻",
            "xshd"=>"学生活动"
        );
        return $module["$ascii"];
    }

    function utf2ascii($utf) {
        $module = array(
            "学院新闻"=>"xyfc",
            "学生活动"=>"xshd"
        );
        return $module["$utf"];
    }
} 