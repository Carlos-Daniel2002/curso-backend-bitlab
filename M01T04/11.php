
<?php

$Abecedario = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
 $names = ['Juan' , 'Cruz' , 'Francisco' , 'Katherine' , 'Marisol' , 'Daniel' , 'Roberto',];
 $abc= [];

for ($n=0; $n < count($names) ; $n++) { 
     
     $result =  substr($names[$n],0,1) ;
     echo " Esta letra si aparece:";
     array_push($abc, $result);
     
     echo $result."<br>";
    
 }

for ($c=0; $c< 27 ; $c++) { 
 
 
    if (in_array($Abecedario[$c], $abc)) {
     unset($Abecedario[$c]);

 }
     
 }
 echo " Las lestras sobrantes del Abecedario son :";
 
   print_r($Abecedario);

   ?>


