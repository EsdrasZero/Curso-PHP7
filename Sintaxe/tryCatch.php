<?php

try {
    // Código que pode gerar uma exceção
    $numero = 10 / 0; // Tentativa de divisão por zero
} catch (Exception $e) {
    // Código a ser executado se uma exceção for lançada
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
} finally {
    // Código a ser executado independentemente de uma exceção ser lançada ou não
    echo 'Este bloco é sempre executado.', "\n";
}
?>