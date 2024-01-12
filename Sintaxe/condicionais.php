<?php

$idade = 18;
$senha = 123;
$acesso = true;

// if ($idade >= 18) {
//     echo "Você é maior de idade!<br>";
// } else {
//     echo "Você é menor de idade!<br>";
// }

// if ($senha == 123) {
//     echo "Acesso permitido, acesso nível 1!<br>";
// } else if ($senha == 1234) {
//     echo "Acesso permitido, acesso nível 2!<br>";
// } else {
//     echo "Acesso negado<br>";
// }


// if ($idade >= 18 && $senha == 123) {
//     echo "Acesso permitido, acesso nível 1!<br>";
// } else if ($idade >= 18 && $senha == 1234) {
//     echo "Acesso permitido, acesso nível 2!<br>";
// } else {
//     echo "Acesso negado<br>";
// }

// if ($idade >= 18 || $senha == 123) {
//     echo "Acesso permitido, acesso nível 1!<br>";
// } else if ($idade >= 18 || $senha == 1234) {
//     echo "Acesso permitido, acesso nível 2!<br>";
// } else {
//     echo "Acesso negado<br>";
// }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if ($idade >= 18 && $acesso == true) {
    ?>
        <h1 style=color:green>Autorizado</h1>
    <?php
    } else {
    ?>
        <h1 style="color:red">Não autorizado</h1>
    <?php
    }

    ?>

</body>

</html>