<?php
//������� �������� �� ��������� �������� � ���������� ������ � ������ ��������, ���������� ������� �� ������� �������� �����
function ident($arr, &$j, $key) {
    if ($arr[$j]->$key == $arr[$j+1]->$key) {
        $j++;
        ident($arr, $j, $key);
    }
    return $j;
}

//������� ���������� ������� �������� �� ������ �� ���������� �������
function sort_arr_of_obj($arr, $param){
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i]->$param > $arr[$j]->$param) {
                $a = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $a;
            }
        }
    }
    return $arr;
}

