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
            $contador = 1;
            do {
                echo "<li>Contador é $contador</li>";
                $contador++;
            } while ($contador <= 10);
        ?>
    </ul>
    
</body>
</html>