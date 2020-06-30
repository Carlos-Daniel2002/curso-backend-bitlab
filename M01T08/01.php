<?php

/* 1- Encontrar el mayor o el menor de entre tres números. El usuario debería poder elegir si
quiere el número mayor o si quiere el número menor.*/

function bigger( $number1 , $number2 , $number3)
{
    if ($number1 > $number2 && $number3) {
        echo "El numero más grande es: " . $number1 . "<br>";
    }
    if ($number2 > $number3) {
        echo "El numero más grande es: " . $number2 . "<br>";
    }
    else{
        echo "El numero más grande es: " . $number3 . "<br>";
     }
}
    

function minor( $number1 , $number2 , $number3)
{
    if ($number1 < $number2 && $number3) {
        echo "El numero más pequeño es: " . $number1 . "<br>";
    }
    else{
    if ($number2 < $number3) {
        echo "El numero más pequeño es: " . $number2 . "<br>";
    }
    else {
        echo "El numero más pequeño es: " . $number3 . "<br>";}      
    }       
}
//Aquí es donde el usuario puede ingresas los numeros que el quiera por ejemplo, si el quiere cambiar un numero
//debera escribir en la variable $number1 ,$number2 o $number3 el numero que el desee colocar y con las funciónes que 
//he creado que en este caso son bigger() y minor() el usuario puede elegir si quiere un numero grande , o un numero 
//pequeño.

$number1 = 1; //El usuario puede cambiar el valor de los numeros desde aquí <=
$number2 = 2; //El usuario puede cambiar el valor de los numeros desde aquí <=
$number3 = 3; //El usuario puede cambiar el valor de los numeros desde aquí <=

    echo "<b>Numeros dados = </b>" . $number1. ' , '. $number2. '  y '. $number3. '<br>';
    bigger($number1, $number2, $number3);
    
$number4 = 4;//El usuario puede cambiar el valor de los numeros desde aquí <=
$number5 = 5;//El usuario puede cambiar el valor de los numeros desde aquí <=
$number6 = 6;//El usuario puede cambiar el valor de los numeros desde aquí <=
    
    echo "<br><br>";
    echo "<b>Numeros dados </b>= " . $number4. ' , '. $number5. '  y '. $number6. '<br>';
    bigger($number4, $number5, $number6);

$number7 = 7;//El usuario puede cambiar el valor de los numeros desde aquí <=
$number8 = 8;//El usuario puede cambiar el valor de los numeros desde aquí <=
$number9 = 9;//El usuario puede cambiar el valor de los numeros desde aquí <=

echo "<br><br>";
    echo "<b>Numeros dados </b>= " . $number7. ' , '. $number8. '  y '. $number9. '<br>';
    minor($number7, $number8, $number9);

    ?>