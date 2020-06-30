<?php

/* 3-Multiplique cualquier cantidad de números dados.*/

function multiply($number1){
    $value=0; 
        for($n=0;$n<count($number1);$n++){
            if($value ==0){
                $value =$number1[$n];
            }
            else{
                $value *= $number1[$n];
            }
        }
        echo"El total de la multiplicación es = $value";
    }

//Este programa tiene como fin multiplicar cualquier cantidad de que este dentro del arreglo seleccionado.
//El usuario puede cambiar la información del arreglo desde la variable  $number1 =[] , $number2 =[] y $number3 =[]
//para dar uso a esta función es necesario escribir multiply()

   $number1 = [10,20,30];//El usuario puede cambiar el valor de los numeros desde aquí <=
   multiply($number1);
   echo "<br>----------------------------------------------------------<br>";


    $number2 = [40,50,60,70,80];//El usuario puede cambiar el valor de los numeros desde aquí <=
    multiply($number2);
    echo "<br>----------------------------------------------------------<br>";
  
    
   $number3 = [90,100];//El usuario puede cambiar el valor de los numeros desde aquí <=
   multiply($number3);
   echo "<br>----------------------------------------------------------<br>";

?>