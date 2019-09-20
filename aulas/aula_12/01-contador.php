<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Repetição 'do-while'</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    // Contagem progressiva com 'do-while'
    echo "Contagem progressiva com 'do-while':<br>";
    $c = 1;
    do {
        echo " " .$c;
        $c +=1;
    } while ($c <= 10);

    // Contagem regressiva com 'do-while'
    echo "<br><br>Contagem regressiva com 'do-while':<br>";
    $r = 10;
    do {
        echo " " .$r;
        $r -=1;
    } while ($r >= 1);
    
    
    ?>
</div>


</body>
</html>