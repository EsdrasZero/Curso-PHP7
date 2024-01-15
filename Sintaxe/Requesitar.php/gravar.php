<?php
function Gravar(string $texto, string $arquivo)
{
    $pf = fopen($arquivo, "a+");
    fwrite($pf, "{$texto} <br>\n");
    fclose($pf);
}
?>