<?php
//$time_start = microtime(true);
define('STO', 100);
$a = 1000000;
$x=0;
$sum=0;
for ($i=1;$i<$a;$i++) {

    if (gmp_prob_prime($i) == 2) {
        $sum += $i;
        $x++;


    }
    if ($x == STO){
        break;
   }
}
print_r( $sum);


//$time_end = microtime(true);
//$execution_time = ($time_end - $time_start);
//
//echo $execution_time;