<?php
$notas = array(
    "ana" => array("1bim" => 7, "2bim" => 10),
    "gabi" => array("1bim" => 10, "2bim" => 10),
    "julia" => array("1bim" => 4, "2bim" => 5),
);

echo "Notas de Julia:<br>";
echo "1º Bimestre: " . $notas["julia"]["1bim"] . "<br>";
echo "2º Bimestre: " . $notas["julia"]["2bim"];
?>
