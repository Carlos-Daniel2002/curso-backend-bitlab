
<?php
    for ($year=1986; $year <= 2020 ; $year++) { 
        if($year % 4 == 0 || $year % 400 == 0){
            echo"$year es un año bisiesto <br>";
        }
        
    }
?>