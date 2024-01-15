<?php

date_default_timezone_set('America/Sao_Paulo'); //Pega o fuso horário de São Paulo

// echo date('d/m/Y'). "<br />";
// echo date('H:i:s'). "<br />";

$hora = date("H");

if ($hora >= 6 && $hora < 12){
    echo "Bom dia";
} elseif ($hora >= 12 && $hora < 18){
    echo "Boa tarde";
} else {
    echo "Boa noite";

}