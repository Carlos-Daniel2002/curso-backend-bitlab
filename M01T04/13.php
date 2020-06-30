<?php

$palabra = "Murcielago";
$vector_palabra = str_split($palabra);

for ($i=0; $i < count($vector_palabra); $i++) {
    if ($vector_palabra[$i] == "m" || $vector_palabra[$i]== "M") {
        $vector_palabra[$i] = str_replace("m","1", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("M", "1", $vector_palabra[$i]);
    }
    elseif ($vector_palabra[$i] == "u" || $vector_palabra[$i]== "U") {
        $vector_palabra[$i] = str_replace("u","2", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("U", "2", $vector_palabra[$i]);
    }
    elseif ($vector_palabra[$i] == "r"|| $vector_palabra[$i]== "R") {
        $vector_palabra[$i] = str_replace("r","3", $vector_palabra[$i]); 
        $vector_palabra[$i] = str_replace("R", "3", $vector_palabra[$i]);
    }
    elseif ($vector_palabra[$i]== "c" || $vector_palabra[$i]== "C") {
        $vector_palabra[$i] = str_replace("c", "4", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("C", "4", $vector_palabra[$i]);
    }
    elseif ($vector_palabra[$i] == "i" || $vector_palabra[$i]== "I") {
        $vector_palabra[$i] = str_replace("i", "5", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("I", "5", $vector_palabra[$i]);
    }
    elseif ($vector_palabra[$i] == "e" || $vector_palabra[$i]== "E") {
        $vector_palabra[$i] = str_replace("e", "6", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("E", "6", $vector_palabra[$i]);
    }
    elseif ($vector_palabra[$i] == "l" || $vector_palabra[$i]== "L") {
        $vector_palabra[$i] = str_replace("l", "7", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("L", "7", $vector_palabra[$i]);
    }
    elseif($vector_palabra[$i] == "a" || $vector_palabra[$i]== "A"){
        $vector_palabra[$i] = str_replace("a", "8", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("A", "8", $vector_palabra[$i]);
    }
    elseif($vector_palabra[$i] == "g" || $vector_palabra[$i]== "G"){
        $vector_palabra[$i] = str_replace("g", "9", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("G", "9", $vector_palabra[$i]);
    }
    elseif($vector_palabra[$i] == "o" || $vector_palabra[$i]== "O"){
        $vector_palabra[$i] = str_replace("o", "0", $vector_palabra[$i]);
        $vector_palabra[$i] = str_replace("O", "0", $vector_palabra[$i]);
    }
    elseif($vector_palabra[$i] == " "){
        $vector_palabra[$i] = str_replace(" ", "*", $vector_palabra[$i]);
    }
}
    $word_crypted = implode($vector_palabra);

    echo $word_crypted;
?>
    