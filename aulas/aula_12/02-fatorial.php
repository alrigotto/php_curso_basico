<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Fatorial</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    $v = isset($_GET["val"]) ? $_GET["val"] : 1;
    echo "Calculando o fatorial de <span class='destaque'>$v</span>:";

    $n = $v;


    $fat = 1;
    do {
        $fat = $fat * $n;
        $n -= 1; 
    } while ($n >= 1);

    $format = number_format($fat, 0, ',', '.');
    
    echo "<br><h1>$v! = $format</h1>";
    
    
    ?>
    
    <input type="button" value="Voltar" class="botao" onclick="history.back()">
</div>


</body>
</html>