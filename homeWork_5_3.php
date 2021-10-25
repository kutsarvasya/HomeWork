<?php

file_put_contents('newFizzBuzz.txt', '');

$array_of_rows = file('FizzBuzz.txt');

array_map('fizzBuzz', $array_of_rows);

function fizzBuzz($one_row)
{
    $array_data_for_fizz_buzz = explode(" ", $one_row);
    $array_of_numbers = range(1, $array_data_for_fizz_buzz[2]);
    $fizz = $array_data_for_fizz_buzz[0];
    $buzz = $array_data_for_fizz_buzz[1];
    $resul_array_of_map_function = array_map(function ($number) use ($fizz, $buzz) {
        $string = '';
        if ($number % $fizz == 0 && $number % $buzz == 0) {
            $string .= 'fizzbuzz';
        } elseif ($number % $fizz == 0) {
            $string .= 'f';
        } elseif ($number % $buzz == 0) {
            $string .= 'b';
        } else {
            $string .= $number;
        }
        return $string;
    }, $array_of_numbers);
    $string_of_one_row = implode('', $resul_array_of_map_function);
    file_put_contents('newFizzBuzz.txt', $string_of_one_row . "\n", FILE_APPEND);
}
