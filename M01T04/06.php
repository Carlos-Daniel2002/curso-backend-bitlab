<?php
$palabra = "1986";
$answer=0;
if($palabra % 2 ==0)
{   
    for($i =0; $i < strlen($palabra);$i++){
         $answer +=$palabra[$i];
    }
    echo "La suma del número entero es: ". $answer;
}
else{
    echo "El número ingresado No es entero";
}
?>