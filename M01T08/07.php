<?php

/* 7-Una función que me brinde N elementos aleatorios de un array dado.*/
function brind($numbers,$n1){
    
for ($n=0; $n <$n1; $n++) { 
   echo $numbers[rand(1,count($numbers)-1)]." ";
}
echo "<br>----------------------------------------------------------<br>";
}
// Este programa es utilizado para colocar las cantidades de un arreglo de modo aleatorio como nosotros queramos 
// En este  caso el arreglo que tenemos esta situado en la variable $numbers =[] y desde ahí el usuario puede cambiar el valor de los nombres
// Para llamar a la función se utiliza brind()

$numbers =[10,20,30,40,50,60,70,80,90,100]; //El usuario puede cambiar el valor de los numeros desde aquí <=
echo"<b>Los numeros dados ingresados son:</b><br><br>";

$number1 = 5;    brind($numbers,$number1);
$number2 = 10;   brind($numbers,$number2);
$number3 = 15;   brind($numbers,$number3);

?>
