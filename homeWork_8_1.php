<?php

$apartment =55;
$number_of_floor = 5;
$number_of_apartment = 4;
function gl ($apartment,$number_of_floor,$number_of_apartment)
{
    $a = $number_of_floor * $number_of_apartment;


    if ($apartment % $a == 0) {
        echo intdiv($apartment, $a) . 'п';

    } elseif ($apartment % $a != 0) {
        echo intdiv($apartment, $a) + 1 . 'п';

    }

    if ($apartment % $a == 0) {
        echo $number_of_floor . 'Этаж';
    }
    if ($apartment % $a != 0) {
        $c = $apartment % $a;
        echo intdiv($c, $number_of_apartment) + 1 . 'Этаж';
    }
}
echo gl($apartment,$number_of_floor,$number_of_apartment);
