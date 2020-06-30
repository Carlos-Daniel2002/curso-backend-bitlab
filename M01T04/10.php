<?php 
$edad1=0;
$edad2=0;
$edad3=0;
$edad4=0;
$edad5=0;
$edad6=0;
$edad7=0;
$edad8=0;
$edad9=0;
$edad10=0;


$ages = [10,10,10,11,11,12,12,12,12,13,14,14,15,16,16,17,17,17,18,18,19,19,19,19,19];

for ($i=0; $i < count($ages); $i++) { 
  if ($ages[$i]==10) 
      $edad1++;
  
else if ($ages[$i]==11) 
    $edad2++;

if ($ages[$i]==12) 
    $edad3++;

else if ($ages[$i]==13) 
  $edad4++;

if ($ages[$i]==14) 
  $edad5++;

else if ($ages[$i]==15) 
  $edad6++;

if ($ages[$i]==16) 
  $edad7++;


else if ($ages[$i]==17) 
  $edad8++;


if ($ages[$i]==18) 
  $edad9++;


else if ($ages[$i]==19) 
  $edad10++;
}


  echo"niños que tienen 10 años de edad son: " .$edad1."<br>";
  echo"niños que tienen 11 años de edad son: " .$edad2."<br>";
  echo"niños que tienen 12 años de edad son: " .$edad3."<br>";
  echo"niños que tienen 13 años de edad son:" .$edad4."<br>";
  echo"niños que tienen 14 años de edad son: " .$edad5."<br>";
  echo"adolescentes que tienen 15 años edad son: " .$edad6."<br>";
  echo"adolescentes que tienen 16 años edad son: " .$edad7."<br>";
  echo"adolescentes que tienen 17 años edad son: " .$edad8."<br>";
  echo"Jovenes que tienen 18 años edad son: " .$edad9."<br>";
  echo"Jovenes que tienen 19 años edad son: " .$edad10."<br>";

  ?>


   
