<?php

// 11- Dado un arreglo, permitir al usuario imprimir los N elementos en posición par o impar

function parimpar($v1, $v2){
    if($v2 == 1){
        for($n=0;$n<count($v1);$n++){
    if($n % 2 ==0){
echo $v1 [$n] ."<br>"; }
}

}else{
    if($v2 = 2){
        for($n=0;$n<count($v1);$n++){
    if($n % 2 !=0){
echo $v1 [$n] ."<br>"; }
         }
       }
    }
}
// Este programa esta diseñado para que un arreglo pueda imprimir los elementos en posición par o impar, para ello 
// cree una función llamada parimpar(), la cual consta de estructuras de casos como if, for, y else en la cual esta definida que si el 
// valor dado es igual a 1 y es %2 sera par y sino sera impar.
// el usuario puede cambiar la información del arreglo desde las variables $value1 , $value2 y $value3.

    echo "<b>Sus elementos pares seleccionados son:</b> <br>";
    $value1 = ['pupusas','tacos', 'soda','tortillas','pasteles','enchiladas'];//El usuario puede cambiar el valor del arreglo desde aquí <=
    $n1 = 2;
    parimpar($value1,$n1);
    echo "<br>----------------------------------------------------------<br>";

    echo "<b>Sus elementos pares seleccionados son:</b> <br>";
    $value2 = ['hola','adios', 'saludos','provecho','espera','cuidate'];//El usuario puede cambiar el valor del arreglo desde aquí <=
    $n2 = 2;
    parimpar($value2,$n2);
    echo "<br>----------------------------------------------------------<br>";//El usuario puede cambiar el valor del arreglo desde aquí <=

    echo "<b>Sus elementos impares seleccionados son:</b><br>";
    $value3 = ['uno','dos', 'tres','cuatro','cinco','seis'];
    $n3 = 1;
    parimpar($value3,$n3);

?>
