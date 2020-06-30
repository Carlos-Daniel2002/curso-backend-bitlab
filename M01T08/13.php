<?php

/* 13-La tabla de multiplicación (del 1 al 10) de un número dado.*/

function Multiply($number1)
{
for ($i=1; $i <= 10; $i++) { 
    echo $i. " x  " .$number1. " = " .$i * $number1. "<br>"; }
}

// Este programa tiene finalidad recrear la tabla de multipliación del 1 al 10 de un numero dado en este caso
// el usuario puede cambiar el valor de las variables  $number1, $number2 y $number3 para así obtener una tabla 
// segun con el numero asignado por el usuario.

$number1 = 10; //El usuario puede cambiar el valor de los numeros desde aquí <=
 Multiply($number1);
 echo"--------------------------------------<br>";


$number2 = 20; //El usuario puede cambiar el valor de los numeros desde aquí <=
 Multiply($number2);
 echo"-------------------------------------<br>";


$number3 = 30; //El usuario puede cambiar el valor de los numeros desde aquí <=
 Multiply($number3);
 echo"-------------------------------------<br>";
 
 ?>