<?php
/**
 * Created by PhpStorm.
 * User: LGrok
 * Date: 4/27/14
 * Time: 10:12 PM
 */
define("APP_NAME","homeword");
define("APP_PATH","./homeword/");
#define('BUILD_CONTROLLER_LIST','Index,User,Menu');
#define('BUILD_MODEL_LIST','User,Menu');
define("APP_DEBUG",TRUE);
require "./ThinkPHP/ThinkPHP.php";
?>