<?php

// include("gravar.php");
// Gravar("include", "file.txt");

// include_once("ler.php");
// $texto = Leitura("file.txt");
// echo $texto;

require_once("gravar.php");
Gravar("require", "file.txt");

require_once("ler.php");
$texto = Leitura("file.txt");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
       echo Leitura(("file.txt"))
        ?>
    </div>
</body>

</html>