<?php

$palabra = "1234567890";
$vector_palabra = str_split($palabra);

for ($i=0; $i < count($vector_palabra); $i++) {
    if ($vector_palabra[$i] == "1" ) {
        
        $vector_palabra[$i] = str_replace("1", "M", $vector_palabra[$i]);
    }
    elseif ($vector_palabra[$i] == "2" ) {
        $vector_palabra[$i] = str_replace("2","u", $vector_palabra[$i]);
        
    }
    elseif ($vector_palabra[$i] == "3" ) {
        $vector_palabra[$i] = str_replace("3","r", $vector_palabra[$i]); 
       
    }
    elseif ($vector_palabra[$i]== "4" ) {
        $vector_palabra[$i] = str_replace("4", "c", $vector_palabra[$i]);
        
    }
    elseif ($vector_palabra[$i] == "5" ) {
        $vector_palabra[$i] = str_replace("5", "i", $vector_palabra[$i]);
     
    }
    elseif ($vector_palabra[$i] == "6" ) {
        $vector_palabra[$i] = str_replace("6", "e", $vector_palabra[$i]);
       
    }
    elseif ($vector_palabra[$i] == "7" ) {
        $vector_palabra[$i] = str_replace("7", "l", $vector_palabra[$i]);
        
    }
    elseif($vector_palabra[$i] == "8" ) {
        $vector_palabra[$i] = str_replace("8", "a", $vector_palabra[$i]);
        
    }
    elseif($vector_palabra[$i] == "9" ) {
        $vector_palabra[$i] = str_replace("9", "g", $vector_palabra[$i]);
       
    }
    elseif($vector_palabra[$i] == "0" ) {
        $vector_palabra[$i] = str_replace("0", "o", $vector_palabra[$i]);
        
    }
    elseif($vector_palabra[$i] == " "){
        $vector_palabra[$i] = str_replace(" ", "*", $vector_palabra[$i]);
    }
}
    $word_crypted = implode($vector_palabra);

    echo $word_crypted;
?>
    