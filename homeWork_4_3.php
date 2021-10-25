<?php
$handle = fopen('FizzBuzz.txt', "r");

overwrite($handle);
function overwrite($handle)
{
    $fx = fopen('newFizzBuzz.txt', "w");
    {
        while (!feof($handle)) {
            $content = fgets($handle);

            $arrContent = explode(" ", $content);

            $string = fizz($arrContent) . "\n";
            fwrite ( $fx, $string);
        }
        fclose($fx);
        fclose($handle);
    }
}
function fizz($a)
{
    $string = '';
    for ($i = 1; $i <= $a['2']; $i++) {

        if ($i % $a['0'] == 0 && $i % $a['1'] == 0) {
             $string .= 'fizzbuzz';
        } elseif ($i % $a['0'] == 0) {
            $string .= 'f';
        } elseif ($i % $a[1] == 0) {
            $string .= 'b';
        } else {
            $string .= $i;
        }
    }
    return $string;
}