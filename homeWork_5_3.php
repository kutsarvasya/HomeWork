<?php

$array = file('FizzBuzz.txt');

array_map('fizz', $array);

function fizz($a)
{
    $exp = explode(" ", $a);
    $array = range(1, $exp[2]);
    $string = array_map(function ($a) use ($exp) {
        $str = '';
        if ($a % $exp['0'] == 0 && $a % $exp['1'] == 0) {
            $str .= 'fizzbuzz';
        } elseif ($a % $exp['0'] == 0) {
            $str .= 'f';
        } elseif ($a % $exp[1] == 0) {
            $str .= 'b';
        } else {
            $str .= $a;
        }
        return $str;
    }, $array);
    $string = implode('',$string);
    file_put_contents('newFizzBuzz.txt', $string . "\n", FILE_APPEND);
}






