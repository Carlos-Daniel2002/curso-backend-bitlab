<?php

$total=30 ;
for ($i=1; $i<=$total; $i++) {
    if (primo($i)) {
        echo "<br>El número ".$i." Si es primo";
    } else {
        echo "<br>El número ".$i." No es primo";
    }
}
 
function primo($num)
{
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        return True;
    } else {
        if ($num % 2 != 0) {
            for ($i = 3; $i <= sqrt($num); $i += 2) {   
                if ($num % $i == 0) {
                    return False;
                }
            }
            return True;
        }
    }
    return False;
}
?>
