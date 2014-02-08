<?php

/**
 * Класс для ЧПУ
 * 
 * @author Admin
 * @version 0.0.1
 */
class sef {
  public $parts = array('asd',234567);
  /**
   * 
   * @param string $input_link классический URL
   * @return string ЧПУ
   */
  public function link($input_link) {
    // TODO: выбрать из БД соотвествующий alias
    $sef_link = 'sef';
    self::functionName1($param);
    return $sef_link;
  }
  static private function functionName1($param) {
    echo 'static private';
  }
  static protected function functionName2($param) {
    echo 'static protected';
  }
}
class sef_child extends sef{
  public function link($input_link) {
    echo parent::link($input_link)."<br>";
    print_r($this->parts);
  }
  public function getProduct($id) {
    echo 'товар';
  }
  public function getOption($id) {
    echo 'опция';
  }
  public function getSetting($id) {
    echo 'настройка';
  }
}
$sch = new sef_child();
//echo $sch->link('kdfvk');
//$my_nethod = 'link';
//echo $sch->$my_nethod('');
$id = 56;
$m = 'Option';
$meth_name = 'get'.$m;
echo $sch->$meth_name($id);
eval('echo "О Чудо!!!";');
//print_r($sch->parts);