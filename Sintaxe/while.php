<?php

$cont = 0;
while ($cont <= 10) {
    echo "Count: " . $cont . "<br>";
    $cont++;
}

?>

<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $cont = 0;
        while ($cont <= 10) {
            if ($cont > 5 && $cont < 10) {
        ?>
                <li><?= $cont ?></li>

        <?php   }
            $cont++;
        }
        ?>
    </ul>
</body>

</html>