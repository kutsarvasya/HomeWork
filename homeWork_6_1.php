<?php
define("FIVE" , "5");
$s='';
for ($i=1;$i <= 100;$i++){
   if($i % FIVE == 0){
       $s .= FIVE;
   };

}
 echo strlen($s);