<?php

function Leitura(string $arquivo)
{
    $pf = fopen($arquivo, "r");
    $texto = fread($pf, filesize($arquivo));
    fclose($pf);
    return $texto;
}

?>