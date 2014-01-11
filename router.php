<?php

$layput = DIR_TEMPLATE . 'layout.php';
$route = filter_input(INPUT_GET,'route');
if (isset($route)) {
  $file_template_name = DIR_TEMPLATE . $route . '.php';
  if (isset($pages[$route])) {
    $page = $pages[$route];
    if (file_exists($file_template_name)) {
      $layput = $file_template_name;
    }
  } else {
    $page = $pages['404'];
  }
} else {
  $page = $pages['home'];
}
