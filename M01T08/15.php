
<?php

/*Una función que, dado un número, devuelva el próximo múltiplo de un segundo número.*/

function mutiples($number1,$number2){
    echo "El primer número es = $number1<br>";
    echo "El segundo número es = $number2<br>";
   for($n=0; $n <=$number1; $n++){
   if($number2 * $n > $number1){
   echo "El multiplo más proximo es : ".$number2 * $n."<br>";  break;
        }
   }
  
}
// En el ultimo programa llamaremos a un numero para que devuelva el próximo múltiplo de un segundo número, para ello
// el programa debe llamar el valor del primer y segundo numero para así obtener el valor del proximo multiplo de un segundo numero.
// para ello transforme adentro de la función multiples() una operación con un for el cual me da como resultado el multiplo mñas proximo de un segundo
//nuero.
//Para ello si el usuario quiere cambiar los valores lo puede hacer desde las variables $number1 , $number2 , $number3 , $number4 ,$number5 y $number6.

$number1 = 22;//El usuario puede cambiar el valor de los numeros desde aquí <=
$number2 = 7;//El usuario puede cambiar el valor de los numeros desde aquí <=
mutiples($number1,$number2);
echo "<br>----------------------------------------------------------<br>";

$number3 = 30;//El usuario puede cambiar el valor de los numeros desde aquí <=
$number4 = 10;//El usuario puede cambiar el valor de los numeros desde aquí <=
mutiples($number3,$number4);
echo "<br>----------------------------------------------------------<br>";

$number5 = 45;//El usuario puede cambiar el valor de los numeros desde aquí <=
$number6 = 2;//El usuario puede cambiar el valor de los numeros desde aquí <=
mutiples($number5,$number6);
echo "<br>----------------------------------------------------------<br>";

?>