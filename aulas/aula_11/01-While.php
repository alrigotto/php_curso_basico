<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>While 01</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    echo "Loop 'While' crescente: <br>";
    $a = 1;
        while ($a <= 5) {
        echo $a . "</br>";
        $a++;
    }
    echo "<br>Loop 'While' decrescente: <br>";
    $b = 5;
        while ($b >= 1) {
        echo $b . "</br>";
        $b--;
    }
    
    
    ?>
</div>


</body>
</html>