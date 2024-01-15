<?php

$nome = "Esdras de Souza Mendes";
//echo substr ($nome, 0, 6); // Esdras
//echo strtolower($nome); // esdras mendes
//echo strtoupper($nome); // ESDRAS MENDES
//$msg = strip_tags("<h1>Bem vindo</h1> acesse o <a href=''><b> link </b> </a> ", "<h1>"); // primeiro parametro remove tags html, segundo parametro permite as tags que eu quero
//echo $msg;

//$comida = "Pizza, Lasanha, Bolo";
//$alterar = str_replace("Pizza", " Cerveja ", $comida); // primeiro parametro o que eu quero alterar, segundo parametro o que eu quero colocar, terceiro parametro onde eu quero alterar(str_replace é case sensitive)
//$alterar2 = str_ireplace("lasanha", " arroz ", $comida); // str_ireplace não é case sensitive
//echo $alterar2;

// $ex= explode(" ", $nome); // explode transforma uma string em um array, primeiro parametro o que eu quero separar, segundo parametro a variavel que eu quero transformar em array
// echo $ex[2]; // Souza

// $imp = implode(" ", $ex); // implode transforma um array em uma string, primeiro parametro o que eu quero juntar, segundo parametro a variavel que eu quero transformar em string

$nome_teste = "Fulano";
//echo strlen($nome); // conta quantos caracteres tem na string
if (strlen($nome_teste) < 10) {
    echo "Valido";
} else {
    echo "Invalido";
}

?>