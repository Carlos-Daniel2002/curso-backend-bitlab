<?php
$encuesta =["si","no","si","no","si","no","si","no","si","no","si","no","si","no","si","no"];
$long = count($encuesta);
$psi = 0;
$pno = 0;
for($i = 0;$i < count($encuesta);$i++){
    if($encuesta[$i] == "si" || $encuesta == "SI" || 
    $encuesta == "Si" || $encuesta == "sI"){
        $psi++;
    }elseif($encuesta[$i] == "no" || $encuesta == "NO" || 
    $encuesta == "No" || $encuesta == "nO"){
        $pno++;
    }
}
$totalsi= ($psi*100)/$long;
$totalno= ($pno*100)/$long;
echo "el total de respuestas cerradas fueron = ".$long."<br>";
echo "el porcentaje de respuestas Si es = ".$totalsi."%<br>";
echo "el porcentaje de respuestas No es = ".$totalno."%<br>";

?>