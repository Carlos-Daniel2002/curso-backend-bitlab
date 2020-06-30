<?php

/* 12-Dados dos listados (arreglos), buscar las parejas para cada elemento. Por ejemplo:
$array1 = [‘a’,’e’,’i’,’o’,’u’];
$array2 = [‘u’, ‘a’, ‘i’, ‘o’];
La posición 0 del primer arreglo coincide con la posición 1 del segundo.
La posición 1 del primer arreglo no coincide con ninguna posición del segundo.
La posición 2 del primer arreglo coincide con la posición 2 del segundo.
(y así sucesivamente)*/

function regress ($value, $value2){
for ($v1 = 0; $v1 < count ($value); $v1++) { 
 $value[$v1];
for ($n = 0; $n <count ( $value2) ; $n++) { 
if ($value [$v1] == $value2 [$n]) {
echo"La posición $v1 del primer arreglo coincide con la posición $n del segundo arreglo<br>"; }
}
    }
}

//Este programa tiene como fin facilitar la busqueda de elementos repetidos en los arreglos mencionados, para ello
//nos mostrara la posición del primer arreglo y la posición del segundo arreglo con el cual coincide.
// si el usuario quiere modificar el valor de los arreglos lo puede hacer desde las variables:  $value1,  $value2 , $value3 , $value4 y  $value5

 $value1 = ['a','e','i','o','u']; //El usuario puede cambiar el valor del arreglo desde aquí <=
 $value2 = ['u', 'a','i', 'o','e','f'];//El usuario puede cambiar el valor del arreglo desde aquí <=
 regress($value1,$value2);
 echo "<br>-----------------------------------------------------------------------------------------------------<br>";


 $value3 = ['a','b','c','d','e','f'];//El usuario puede cambiar el valor del arreglo desde aquí <=
 $value4 = ['a', 'c','d', 'o','g','f'];//El usuario puede cambiar el valor del arreglo desde aquí <=
 regress($value3,$value4);
 echo "<br>-----------------------------------------------------------------------------------------------------<br>";


 $value5 = ['x', 'z','w', 'p','r','t'];//El usuario puede cambiar el valor del arreglo desde aquí <=
 $value6 = ['w', 'b','w', 'p','t','f'];//El usuario puede cambiar el valor del arreglo desde aquí <=
 regress($value5,$value6);
 echo "<br>-----------------------------------------------------------------------------------------------------<br>";

 ?>