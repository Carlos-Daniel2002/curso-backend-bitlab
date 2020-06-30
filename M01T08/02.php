<?php

/* 2-Sumar cualquier cantidad de números dados.*/

    function suma($number1){
        $total=0; 
        for($n=0;$n<count($number1);$n++){
            $total +=$number1[$n];

        }
        echo"El resultado de la suma es : $total";
    }

//Este programa sirve para sumar las cantidades de un arreglo, en sí lo que hace es que lee toda la información del 
//arreglo y lo transforma en una suma y para ello lo llamamos desde la función suma().
//El usuario puede cambiar la información de los Arreglos desde las Variables $number1 , $number2 y $number3

    $number1 =[10,20,30,40];//El usuario puede cambiar el valor de los numeros desde aquí <=
    suma($number1);
    echo "<br>----------------------------------------------------------<br>";

    $number2 =[50,60,70,80,90,100];//El usuario puede cambiar el valor de los numeros desde aquí <=
    suma($number2);
    echo "<br>----------------------------------------------------------<br>";
    
    
    $number3 =[100,200,300,400,500,600,700,800,900,1000];//El usuario puede cambiar el valor de los numeros desde aquí <=
    suma($number3);
    echo "<br>----------------------------------------------------------<br>";

?>


