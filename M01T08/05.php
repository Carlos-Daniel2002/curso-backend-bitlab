<?php

/* 5-Comprobar si un caracter está dentro de un arreglo de caracteres dado.*/

function find($numbers ,$n1){
$real=0;
for ($n=0; $n <count($numbers) ; $n++) { 
    if ($numbers[$n]==$n1) {
        $real++;
    }
    
}
if ($real==0) {
   echo "No hay ningun numero $n1 en el array<br>";
} else {
   
 echo"El numero $n1 si se encontro en el array de numeros dados <br>"; }

}
// En este programa el usuario podra comprobar si un caracter esta dentro de un arreglo para ello definimos 
//nuestros caracteres desde las varaiables  $number1 , $number2 y $number3, estos caracteres serán analizados 
//por el arreglo seleccionado que en este caso es : $numbers =[] y si el caracter esta dentro del arreglo
//imprimara que el numero si se encontro en el array de nuemeros dados.

$numbers =[10,20,30,40,50,60,70,80,90,100]; //El usuario puede cambiar el valor de los numeros desde aquí <=
echo"<b>Los numeros dados ingresados son:</b><br><br>";

$number1 = 5;   find($numbers,$number1);
$number2 = 10;  find($numbers,$number2);
$number3 = 15;  find($numbers,$number3);

?>





