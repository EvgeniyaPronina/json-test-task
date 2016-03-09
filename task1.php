<?php
include_once 'functions.php';

$jsonInput ='[{"_id":"4940dgfd95jfsd9","score":15,"user":0,"type":"xxx"},
  {"_id":"4940dsdsvhjttt89","score":4,"user":0,"type":"yyy"},
  {"_id":"4941dgfdsdfggd9","score":7,"user":0,"type":"yyy"},
  {"_id":"4941dfds43rfsff9","score":21,"user":1,"type":"yyy"},
  {"_id":"4941dgfd93jfsd0","score":15,"user":1,"type":"xxx"},
  {"_id":"4942dgdsadvfd9","score":8,"user":1,"type":"yyy"},
  {"_id":"4942dgfdaefcod8","score":4,"user":2,"type":"yyy"},
  {"_id":"4942dgfdsarfsd1","score":32,"user":2,"type":"yyy"},
  {"_id":"4943dgfddasjfsd5","score":20,"user":2,"type":"xxx"},
  {"_id":"4943dasrtqxrfsd9","score":15,"user":3,"type":"xxx"},
  {"_id":"4943dgfooorafsd8","score":15,"user":3,"type":"yyy"},
  {"_id":"4944dgfddadfsd3","score":15,"user":3,"type":"yyy"},
  {"_id":"4944dgfd9dssdc4","score":15,"user":4,"type":"xxx"},
  {"_id":"4944dgdacbbrttt9","score":19,"user":4,"type":"yyy"},
  {"_id":"4945dgfsaddddd5","score":15,"user":4,"type":"xxx"}]';

$fullData = json_decode( $jsonInput );
$obects = count($fullData);

for ($n = 0; $n < $obects; $n = $pos_user + 1) {
    $pos_score = $n;
    $pos_start = $n;
    $pos_user = $n;
    ident($fullData, $pos_user, 'user');//считаем до какого элемента (включительно) идут данные об одном пользователе
    if (ident($fullData, $pos_score, 'score') >= $pos_user) {//проверяем на идентичность значения поля score у одного пользователя
        $for_delete = $pos_start + 1;
        while ($for_delete <= $pos_user){
            unset($fullData[$for_delete]);
            $for_delete++;
        }
    } else {  //проверяем тип: 'YYY' или нет
        $count_y = 0;
        $arr_y = array();
        for ($n = $pos_start; $n <= $pos_user; $n++) {
            if ($fullData[$n]->type == "yyy") {
                $count_y++;
                $arr_y[$n] = $fullData[$n]->score;
            }
        }
        if ($count_y > 1) {     //ищем наименьш. счет типа 'yyy' в исходном массиве и удаляем его
            asort($arr_y);
            $keys = array_flip($arr_y);
            $for_delete = array_shift($keys);
            unset($fullData[$for_delete]);
        }
    }
}

$output = array_values($fullData);
$jsonOutput = json_encode($output);
print_r($jsonOutput);


