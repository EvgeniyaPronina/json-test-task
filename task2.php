<?php
include_once 'functions.php';

$jsonInput ='[
  {
    "_id":1364,"name":"Predator","occupations":[
      {"title":"exploring","time":54.9,"activityLevel":1},
      {"title":"hunting","time":22.4,"activityLevel":2},
      {"title":"sleep","time":5.1,"activityLevel":0},
      {"title":"nap","time":2.0,"activityLevel":0},
      {"title":"slacking","time":10.0,"activityLevel":0},
      {"title":"cooking","time":9.0,"activityLevel":1}
    ]
  },
  {
    "_id":1365,"name":"Alien","occupations":[
      {"title":"sleep","time":5.1,"activityLevel":0},
      {"title":"nap","time":2.0,"activityLevel":0},
      {"title":"exploring","time":32.1,"activityLevel":1},
      {"title":"slacking","time":20.1,"activityLevel":0},
      {"title":"cooking","time":0,"activityLevel":1},
      {"title":"hunting","time":43.2,"activityLevel":2}
    ]
  },
  {
    "_id":1366,"name":"Harry Potter","occupations":[
      {"title":"sleep","time":30.0,"activityLevel":0},
      {"title":"exploring","time":10.5,"activityLevel":1},
      {"title":"slacking","time":30.1,"activityLevel":0},
      {"title":"cooking","time":0,"activityLevel":1},
      {"title":"dreaming","time":10.0,"activityLevel":0},
      {"title":"nap","time":10.0,"activityLevel":0},
      {"title":"hunting","time":0,"activityLevel":2}
    ]
  }
]';

$fullData = json_decode( $jsonInput );

foreach ($fullData as $obj) {
    $sorted_oc = sort_arr_of_obj($obj->occupations, 'time');
    $start = 0;
    $end = ident($sorted_oc, $start, 'time') + 1;
    for ($m = 0; $m < $end; $m++) {
        if ($sorted_oc[$m]->activityLevel < 2) {
            unset($sorted_oc[$m]);
        }
    }
    $obj->occupations = array_values($sorted_oc);
}

$output = array_values($fullData);
$jsonOutput = json_encode($output);

print_r($jsonOutput);




