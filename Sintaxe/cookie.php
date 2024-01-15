<?php 
// //setcookie cria a função cookie
// setcookie("nome", "valor", time() + 3600); // Expira em 1 hora

// //$_COOKIE obtem o valor do cookie
// $valor = $_COOKIE["nome"];

// //Use novamente setcookie para alterar o valor de um cookie.
// setcookie("nome", "valor_novo");

// //Para excluir um cookie, ajuste seu tempo de vida para uma data no passado.
// setcookie("nome", "valor", time() - 1);
// ?>

<?php

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch ($req) {
    case 1:
        Criar();
        break;
    case 2:
        Ler();
        break;
    case 3:
        Alterar();
        break;
    case 4:
        Deletar();
        break;
}

function Criar() {
    echo "Criar";
    setcookie("nome", "Esdras", time() + 100);
}

function Ler() {
    ///echo $_COOKIE["nome"];
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
}

function Alterar() {
    echo "Alterar";
    setcookie("nome", "Angélica");
}

function Deletar() {
    echo "Deletar";
    setcookie("nome", "Esdras", time() -1);
}

?>