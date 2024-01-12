<?php
define ("min", 18); // define == constante 
define ("max", 45); // define == constante 

$idade = 25;

echo "MIN: " . min . "<br>";
echo "MAX: " . max . "<br>";
echo "Idade: " . $idade . "<br><br>";

if ($idade >= min && $idade <=max){
    echo "Acesso permitido";
}else{
    echo "Acesso negado";
}

echo "<br>" . PHP_VERSION;

?>
