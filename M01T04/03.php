<?php
// el valor 65 equivale a la letra "A" del abecedario en la tabla ASCII y el 90 equivale a  la letra "Z"
//ord indica el valor entero que indica el caracter
// chr Devuelve una cadena de un caracter que contiene el carácter especificado por ascii
//abs para obtener valor absoluto sin signo Negativo (-)

$Abecedario = abs(ord('A')-ord('a'));
for ($c=65;$c<=90;$c++) {
  echo chr($c)." ".chr (abs($c+$Abecedario))."<br>";                 
}