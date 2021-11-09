<?php
$a=$argv[1];
$b='';
if ($a%2!=0) {
    for ($i = 1, $k = $a; $i < $a; $i++, $k--) {
        if ($k % 2 != 0) {
            $b .= str_repeat(" ", intdiv($k, 2)) . str_repeat('*', $i) . "\n";
        }
    }

    for ($i = 1, $k = $a; $i <= $a; $i++, $k--) {
        if ($k % 2 != 0) {
            $b .= str_repeat(" ", intdiv($i, 2)) . str_repeat('*', $k) . "\n";
        }
    }

    echo $b;
}
