<?php
$Reverse = 'MESA';
$result = '';
for ($r = 0, $Dato = mb_strlen($Reverse); $r < $Dato; $r++) {
    $result .= $Reverse{$Dato - $r - 1};
}
var_dump($result);
?>