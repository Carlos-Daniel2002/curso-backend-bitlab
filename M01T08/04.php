<?php

/* 4-Comprobar si un número dado está dentro de un rango dado.*/

function rang0($range1,$number1,$number2){

   if ($range1>=$number1 && $range1<=$number2) {
       echo $range1."<b> Si esta dentro del rango </b><br>";
   } else {
    echo $range1."<b> No esta dentro del rango </b><br>";
   }
   
}

//Este programa sirve para que el usuario se de cuenta si un numero esta dentro de un rango seleccionado
//En este caso las variables $range1 , $range2 y $range3 son los valores que el usuario quiere saber si estan dentro de un rango.
//Para llamar a esta función lo haremos desde rango0()

 $range1 = 30; //El usuario puede cambiar el valor de los numeros desde aquí <=
 $number1 = 0; //El usuario puede cambiar el valor de los numeros desde aquí <=
 $number2 = 20; //El usuario puede cambiar el valor de los numeros desde aquí <=
 echo "Rango entre los numeros = ".$number1." y ".$number2."<br>";
 rang0($range1,$number1,$number2);
 echo "<br>----------------------------------------------------------<br>";
 

 $range2 = 50; //El usuario puede cambiar el valor de los numeros desde aquí <=
 $number3 = 10; //El usuario puede cambiar el valor de los numeros desde aquí <=
 $number4 = 100; //El usuario puede cambiar el valor de los numeros desde aquí <=
 echo "Rango entre los numeros = ".$number3." y ".$number4."<br>";
 rang0($range2,$number3,$number4);
 echo "<br>----------------------------------------------------------<br>";



 $range3 = 500; //El usuario puede cambiar el valor de los numeros desde aquí <=
 $number5 = 100; //El usuario puede cambiar el valor de los numeros desde aquí <=
 $number6 = 1000;//El usuario puede cambiar el valor de los numeros desde aquí <=
 echo "Rango entre los numeros = ".$number5." y ".$number6."<br>";
 rang0($range3,$number5,$number6);
 echo "<br>----------------------------------------------------------<br>";

 ?>