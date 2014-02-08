<?php

define('DIR_TEMPLATE', 'template/');
define('DIR_DATA', 'data/');
define('DIR_AVATAR', DIR_TEMPLATE . 'imgs/avatar/');

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'mk-dmitry');
define('DB_PASS', '1234567');
define('DB_DBNAME', 'mk-dmitry');

mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_DBNAME); // выбрать БД SQL USE ''
mysql_query('SET NAMES UTF8');
