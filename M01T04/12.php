
<?php 

$numbers=[10 , 9.5 , 9, 8.5 , 8 , 7.5 , 7 , 6.5 , 6 , 5.5 , 5 ];

$suma=0;

for ($n=0; $n < count($numbers) ; $n++) { 
   $suma=  $suma + $numbers[$n];
}
echo $suma/ count($numbers);

?>
