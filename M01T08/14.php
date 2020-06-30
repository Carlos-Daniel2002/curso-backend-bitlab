<?php

/* 14-La tabla de división, redondeada a 2 decimales, (del 1 al 10) de un número dado.*/
function Divide($number1)
{
for ($n=1; $n <= 10; $n++) { 
    $total = $number1 / $n;
   $total= number_format ($total, 2, '.', '');
    echo $number1."/".$n." = ".$total."<br>";}
}
   
// Este programa tiene finalidad recrear la tabla de divisón del 1 al 10 de un numero  dado pero en este caso redondeado a 2 decimales
// para ello ocupamos la función ocupada en ejercicios anterios "number_format" para asignar cuantos decimales queremos como resultado.
// el usuario puede cambiar el valor de las variables  $number1, $number2 y $number3 para así obtener una tabla 
// segun con el numero asignado por el usuario.

$number1 = 70; //El usuario puede cambiar el valor de los numeros desde aquí <=
 Divide($number1);
 echo"--------------------------------------<br>";


 $number2 = 80; //El usuario puede cambiar el valor de los numeros desde aquí <=
 Divide($number2);
 echo"--------------------------------------<br>";


 $number3 = 90; //El usuario puede cambiar el valor de los numeros desde aquí <=
 Divide($number3);
 echo"--------------------------------------<br>";

 ?>