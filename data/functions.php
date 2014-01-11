<?php

function test1() {
  $a='qwerty';
  function test2() {
    $GLOBALS['a'] = 'Изменили значение с помощью суперглоьального массива!';
  }
  test2();
  echo 'a из test1 = '.$a;
}
function my_print($mas = array(),$name=''){
  echo $name;
  echo '<pre>';
  print_r($mas);
  echo '</pre>';
}

