<?php

/* 6-Contar los caracteres en minúsculas y los caracteres en mayúsculas de un string dado.*/

    function counter($phrase){
        $mayusA = 0;
        $minusc = 0;
        for($n=0;$n < strlen($phrase);$n++){
            if(ctype_upper($phrase[$n])){
                $mayusA++;
            }
            if(ctype_lower($phrase[$n])){
                $minusc++;
            }
        }
        echo "<b>Mi frase es:</b> $phrase <br>";
        echo "La cantidad de caracteres en mayúsculas son : $mayusA ";
        echo "<br>";
        echo "La cantidad de caracteres en minúscula son : $minusc";
    }

// El fin de este programa es contar la cantidad de caracteres que estan en minusculas y a la vez contar la cantidad
// de caracteres que estan en mayuscula de un string dado o en este caso de una frase.
// El usuario puede cambiara la frase si el lo desea desde las variables   $phrase , $phrase1 y $phrase2.
// La función a llamar para completar este programa es counter()

     $phrase = "Espero optener una buena NOTA";//El usuario puede cambiar el contenido de la frase desde aquí <=
     counter($phrase);
     echo "<br>----------------------------------------------------------<br>";

    
     $phrase1 = "La pizza es para Todos";//El usuario puede cambiar el contenido de la frase desde aquí <=
     counter($phrase1);
     echo "<br>----------------------------------------------------------<br>";


     
     $phrase2 = "Hoy es lunes";//El usuario puede cambiar el contenido de la frase desde aquí <=
     counter($phrase2);
     echo "<br>----------------------------------------------------------<br>";
   
?>