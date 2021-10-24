<?php


$file_array = file("txtfile.txt");

write($file_array);

function write($array_of_strings)
{ //txtfile.txt
    $handle = fopen("newfile.txt", "w"); //create file name newfile.txt
    foreach ($array_of_strings as $key => $string) {
        if ($key % 2 == 0) {
            fwrite($handle, $string);         //wright info to the new create file
        }
    }
    fclose($handle);
}
