<?php

/* 9-Una función que le dé formato de moneda a una cifra (lo opuesto del ejercicio anterior
pero manteniendo dos decimales).*/

function floats($valor){
    setlocale(LC_MONETARY, 'en_US');
    echo "<b>El valor normal = </b>{$valor}<br>";
    echo " El valor en moneda = $".number_format($valor, 2, '.', ' ');

    }
// En este programa el usuario puede convertir ya sea un decimal o un entero a formato de moneda para ello 
// ocupamos una función llamada number_format para colocar cuantos decimales queremos en nuestra función 
// cabe mencionar que en este caso la función number_format no incluye el singo de dolar, el cual en este caso lo coloque desde un echo
// Un dato curioso es que esta una función que implenta las dos operaciones a  la vez la cual es llamada money_format pero la desventaja de esta 
// función es que tiene su limite de servidor de apache lo cual quiere decir que no esta para versiones de apache actuales
// si queremos cambiar nuestros valores a modificar lo podemos hacer desde las variables $valor, $valor1 y $valor2.

    $valor =2000; //El usuario puede cambiar el valor de los numeros desde aquí <=
    floats($valor);
    echo "<br>------------------------------------<br>";

    $valor1 =1563; //El usuario puede cambiar el valor de los numeros desde aquí <=
    floats($valor1);
    echo "<br>------------------------------------<br>";
    
    $valor2 =99.9999999999; //El usuario puede cambiar el valor de los numeros desde aquí <=
    floats($valor2);
    echo "<br>------------------------------------<br>";

    ?>