<?php


$a="We are testing reverse_string";


for ($i=strlen($a);$i > 0 ;$i-- ) {
    $c .= $a[$i-1];


}

echo $c;