<?php

$arrayFilme = array(
    "titulo" => "Titanic",
    "sinopse" => "Um navio colide com um ice berg e afunda.",
    "ano" => 2017,
    "horarios" => array(
        "16:00",
        "19:00",
        "20:00"
    ),
    
);

//var_dump($arrayFilme); // mostra o array do json

$jsonStr = json_encode($arrayFilme); //codifiga o json para uma string 
echo $jsonStr; //mostra o json codificado
?>

