<?php

/* 10-Dado un arreglo, verificar si un elemento pertenece o no al arreglo. Si está, contar el
número de veces que está dentro del arreglo.*/

 function find($numbers ,$n1){
 $real=0;
    for ($n=0; $n <count($numbers) ; $n++) { 
    if ($numbers[$n]==$n1) {
         $real++;
     }
     
 }
     if ($real==1) {
         echo"El numero $n1 se encontro $real vez <br>";
     } else {
         echo"El numero $n1 se encontro $real veces <br>";
     }  
}
 
 // En este programa el usuario puede verificar si un elemento esta dentro de un arreglo y si lo esta a la vez tiene el mecanismo de 
 // contar cuantas veces aparece en el arreglo, para ello ocupamos una operación que nos permite saber si esta o no esta en el arreglo 
 // si el elemento esta en el arreglos nos indicara cuantas veces lo encontro y si no solo nos díra que no hay ningun numero en este arreglo.
 //podemos llamar a la función desde find()

 $numbers =[10,10,10,20,30,40,50,60,70,80,90,100];//El usuario puede cambiar el valor de los numeros desde aquí <=
 echo"<b>Los numeros dados ingresados son:</b><br><br>";

 $number1 = 10;   find($numbers,$number1);
 $number2 = 20;   find($numbers,$number2);
 $number3 = 30;   find($numbers,$number3);
 
 ?>


 
 