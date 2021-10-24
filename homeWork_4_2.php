<?php
$content = read('txtfile.txt');
$content = explode("\n", $content);

$average_lenght =  average($content);

write($content,$average_lenght );


function read($path)
{
    $handle = fopen($path, 'r');
   $s = '';
    while (!feof($handle)) {
        $s .= fgets($handle);

    }
    fclose($handle);
    return $s;
}


function average($array_of_strings){
    $lenght = 0;
    foreach ($array_of_strings as  $item) {
        $lenght += strlen(trim($item));
    }

    return  round($lenght / count($array_of_strings)); // find and return average meaning

}

function write($array_of_strings,$average_lenght)
{
    $handle = fopen('bigOfAverage.txt', 'w'); //create new txt file
    foreach ($array_of_strings as  $item) {
        if (strlen(trim($item)) > $average_lenght) {
            fwrite($handle, $item);
        }
    }
    fclose($handle);
}