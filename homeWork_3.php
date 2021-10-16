<?php
$handle = fopen("php://stdin", "r");
$f = fgets($handle);
$b = fgets($handle);
$number = fgets($handle);

for ($i = 1; $i <= $number; $i ++){
    if ($i % $f == 0 && $i % $b == 0){
        echo "Fizz Bazz\n";
    }elseif ($i % $f == 0){
        echo "Fizz\n";
    }elseif ($i %$b == 0 ){
        echo "Bazz\n";
    } else { echo "$i\n";
}
}





