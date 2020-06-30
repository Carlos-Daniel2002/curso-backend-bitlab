<?php

/* 8-Una función que “limpie” un precio y lo convierta a un float; por ejemplo: $199 se
convertiría a 199.00.*/

function floats($valor1)
{
    $result = floatval($valor1);
    echo "<b> El valor en decimal = </b>".number_format($result, 2, '.', ' ');
}

// En este promagra el usuario puede convertir un entero a un decimal siempre y cuando esta variable sea llamada 
//correctamente por ejemplo podemos cambiar el contenido de las variables $valor1 , $valor2 y $valor3 siempre y cuando sea un integer.

$valor1 = 100;  //El usuario puede cambiar el valor de los numeros desde aquí <=
echo "$" .$valor1. "<br>";
floats($valor1);
echo "<br>------------------------------------<br>";

$valor2 = 200;  //El usuario puede cambiar el valor de los numeros desde aquí <=
echo "$" .$valor2. "<br>";
floats($valor2);
echo "<br>------------------------------------<br>";

$valor3 = 300;  //El usuario puede cambiar el valor de los numeros desde aquí <=
echo "$" .$valor3. "<br>";
floats($valor3);
echo "<br>------------------------------------<br>";

?>


