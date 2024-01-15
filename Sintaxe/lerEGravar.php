<?php


function Gravar(string $texto, string $arquivo)
{
    $pf = fopen($arquivo, "a+");
    fwrite($pf, "{$texto} <br>\n");
    fclose($pf);
}

Gravar(date("d/m/Y H:i:s"), "arquivo.txt");


function Leitura(string $arquivo)
{
    $pf = fopen($arquivo, "r");
    $texto = fread($pf, filesize($arquivo));
    fclose($pf);
    return $texto;
}

echo Leitura("arquivo.txt");
