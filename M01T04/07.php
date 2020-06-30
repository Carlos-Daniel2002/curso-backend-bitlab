<?php
$palabra = "bocina";
$pares = "";
$impares = "";
for($i =0; $i < strlen($palabra);$i++){
    if($i % 2 == 0){
        $pares .=$palabra[$i];
    }
    else{
        $impares .=$palabra[$i];
    }
}
echo "Las letras en indices Pares son = ".$pares;
echo "<br>";
echo "Las letras en indices Impares son = ".$impares;