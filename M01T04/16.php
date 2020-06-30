<?php 

$numbers=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];

for ($i=1; $i < count($numbers) ; $i++) { 
    if (primo($i)) {
        echo "<br> ".$i." Si es primo";
    } else {
        echo "<br> ".$i." No es primo";
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