<?php

$arr = [];
$arr1 = [4 => 1, 3 => 2, 2 => 3, 1 => 4];
for ($i = 1; $i <= 10; $i++){
   for ($u = 1; $u <= 10; $u++){
       $arr[$i][$u] = 'x';
   }
}
global $count4;
$count4 = 4;
for ($i = 1; $i <= 10; $i++){
    for ($u = 1; $u <= 10; $u++){
     $result = get_item4($i,$u, $arr, $count4);
    }
}
function get_item4($i, $u, &$arr, &$count4){
    $vertikal = rand(1,10);
    $gorizont = rand(1,10);


    if ($count4 > 0){
        if ($count4 == 4){
            $count4--;
            $arr[$vertikal][$gorizont] = 'o';
            return ['vertikal' => $vertikal, 'gorizontal' => $gorizont];
        }else{
            if ($arr[$i][$u] != 'o'){

            }
        }


    }

//    if ($arr[$i][$u] )


}





echo "<pre>";
print_r($arr);
echo "</pre>";
die;