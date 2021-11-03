<?php
$numbers= file($argv[1]);





foreach ($numbers as $number) {
    list($a, $b) = explode(';', $number);
    $a = explode(' ', trim($a));
    $b = explode(' ', trim($b));


    if (intdiv(array_sum($a), count($a)) == $b[0] && array_sum($a)%count($a)==$b[1]) {
        echo 'true' . "\n";
    }else  echo 'false' . "\n";

}
//
//2 4 5;3 2
//3 2 1;2 0
//6 5 2 1 2;3 1