<?php

$countries[] = array(
    'name'=>'Украина',
    'cities'=>array(
        'Киев','Харьков','Львов','Одесса','Луганск','Тернополь'
    )
);
$countries[] = array(
    'name'=>'Россия',
    'cities'=>array(
        'Москва','Санкт-Петербург','Белгород','Нижний Новгород','Новосибирск'
    )
);
$countries[] = array(
    'name'=>'Франция',
    'cities'=>array(
        'Париж','Лион','Монпелье','Марсель','Тулуза','Авеньйон'
    )
);

$current_country_key = filter_input(INPUT_GET, 'country', FILTER_VALIDATE_INT);
if (!($current_country_key && isset($countries[$current_country_key]))) {
  $current_country_key = 0;
}
