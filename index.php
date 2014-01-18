<?php
session_start();
require './controller/user_auth.php';
setcookie('vc', '3');
require_once './config.php';
include './controller/ava_update.php';
require_once './data/pages.php';
require_once './router.php';
include 'data/firs_data.php';
include_once 'data/functions.php';
//test1();
require_once ($layout);
?>





