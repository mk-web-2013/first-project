<?php
$ajax_file = filter_input(INPUT_GET, 'ajax_file', FILTER_DEFAULT);
if($ajax_file){
  require_once ($ajax_file);
}

