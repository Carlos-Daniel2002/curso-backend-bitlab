<?php
    $number1 = 100;
    $number2 = 13;
    echo"Para el numero $number1 <br>";
    while($number1 > 1){
        if ($number1%2==0) {
            echo"Mitad de $number1= " . ($number1/2) . "<br>";
            $number1 /= 2;
        }
        else if($number1%3==0){
            echo"Tercera de $number1= " . ($number1/3) . "<br>";
            $number1 /= 3;
        }
        else if($number1%5==0){
            echo"Quinta de $number1= ". ($number1/5) . "<br>";
            $number1 /= 5;
        }
        else if($number1%7==0){
            echo"Septima de $number1= ". ($number1/7) . "<br>";
            $number1 /= 7;
        }
        else if($number1%11==0){
            echo"Onceava de $number1= ". ($number1/11). "<br>";
            $number1 /= 11;
        }
        else {

                echo "Este numero solo divisible entre el mismo = ". ($number1/$number1). "<br>";
                $number1 = $number1/$number1 ;
            
        }
    }

    echo"<br> Para el numero $number2 <br>";
    while($number2 > 1){
        if ($number2%2==0) {
            echo"Mitad de $number2= " . ($number2/2) . "<br>";
            $number2 /= 2;
        }
        else if($number2%3==0){
            echo"Tercera de $number2= " . ($number2/3) . "<br>";
            $number2 /= 3;
        }
        else if($number2%5==0){
            echo"Quinta de $number2= ". ($number2/5) . "<br>";
            $number2 /= 5;
        }
        else if($number2%7==0){
            echo"Septima de $number2= ". ($number2/7) . "<br>";
            $number2 /= 7;
        }
        else if($number2%11==0){
            echo"Onceava de $number2= ". ($number2/11). "<br>";
            $number2 /= 11;
        }
        else {

            echo "Este numero solo  es divisible entre el mismo = ". ($number2/$number2). "<br>";
            $number2 = $number2/$number2 ;
        
    }
    }
?>