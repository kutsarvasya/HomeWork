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

