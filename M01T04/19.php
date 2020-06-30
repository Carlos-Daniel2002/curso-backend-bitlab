
<?php

$a = rand(1,8);
$b = rand(0,0);

$books = ["los juegos del hambre", "Buscando el camino", "La biblia",
"Guerra o paz", "IT", "Anabelle", "The maze runner",
"Crepusculo", "El arte de escribir",] ;


 echo "<b>Libros que debería leer :</b> <br><br>";
 if($a<$b)
{
    for($i=$a;$i<$b;$i++){
        
        echo "-".$books[$i]."<br>";
    }
}
elseif($a==$b){
    for($i=0;$i<$b;$i++){
        
        echo "-".$books[$i]."<br>";
    }
}
else{
    for($i=$b;$i<$a;$i++){
        echo "-".$books[$i]."<br>";
    }
}
$a = rand(0,0);
$b = rand(1,7);

$books = [ "El arte de escribir",
"Principito", "Yo no quiero eso", "Mil palabras",
 "La soledad", "Popolvuh", "7 habitos"] ;


 echo "<b>Libros que No debería leer :</b><br><br> ";
 if($a<$b)
{
    for($i=$a;$i<$b;$i++){
        
        echo "-".$books[$i]."<br>";
    }
}
elseif($a==$b){
    for($i=0;$i<$b;$i++){
        
        echo "-".$books[$i]."<br>";
    }
}
else{
    for($i=$b;$i<$a;$i++){
        echo "-".$books[$i]."<br>";
    }
}

?>


