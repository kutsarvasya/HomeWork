<?php
$array_str =[
    'asddkgjgk',
    'lkghfjdsa',
    'qoiuyt reewdfg',
];

fun2($array_str[1]);

function fun2 ($a){
    $result = preg_replace("/[^a-zA-Z]+/", "", $a);
    echo  strlen(trim($result));
}
