<?php
$nomes = array("Ana", "Julia", "Caio", "Gabi", "Felipi");

echo "<h2>Nomes:</h2>";
echo "<ul>";

foreach ($nomes as $valor) {
    echo "<li>Nome do aluno: {$valor}</li>";
}

echo "</ul>";
?>


<?php

$arrNotas = [
    "aluno1" => [
        "nome" => "Ana",
        "notas" => 7
    ],
    "aluno2" => [
        "nome" => "Julia",
        "notas" => 10
    ],
    "aluno3" => [
        "nome" => "Caio",
        "notas" => 4
    ],
    "aluno4" => [
        "nome" => "Gabi",
        "notas" => 10
    ],
    "aluno5" => [
        "nome" => "Felipi",
        "notas" => 9
    ]



];

foreach ($arrNotas as $aluno) {
    foreach ($aluno as $key => $value) {
        echo "{$key}: {$value}<br>";
    }
    echo "<br>";
}
