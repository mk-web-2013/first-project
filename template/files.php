<h1>Работа с файлами</h1>
<?php
//echo file_get_contents('http://sport.ua');
$file_name = 'test.txt';
if (($row_data = file_get_contents($file_name))) {
  $data = json_decode($row_data);
  if (isset($data->count) && is_int($data->count)) {
    $data->count++;
  } else {
    $data->count = 1;
  }
} else {
  $data->count = 1;
}
file_put_contents($file_name, json_encode($data));
$result_data = json_decode(file_get_contents($file_name));
echo $result_data->count;
