<?php
$dia = 5;
$msg = "";  

switch ($dia) {
    case '1':
        $msg = "Segunda-feira";
        break;
    case '2':
        $msg = "Terça-feira";
        break;
    case '3':
        $msg = "Quarta-feira";
        break;
    case '4':
        $msg = "Quinta-feira";
        break;
    case '5':
        $msg = "Sexta-feira";
        break;
    case '6':
        $msg = "Sábado";
        break;
    case '7':
        $msg = "Domingo";
        break;
    default:
        $msg = "Dia inválido";
        break;  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Olá, hoje é <?=$msg;?> </p>
</body>
</html>