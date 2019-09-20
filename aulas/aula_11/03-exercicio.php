<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Contador Personalizado</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    
    $ini = isset($_GET["ini"]) ? $_GET["ini"] : 0;
    $fim = isset($_GET["fim"]) ? $_GET["fim"] : 10;
    $inc = isset($_GET["inc"]) ? $_GET["inc"] : 0;

    if ($ini < $fim) {
        while ($ini <= $fim) {
        echo $ini . " ";
        $ini = $ini + $inc;
        }
    } else {
        while ($ini >= $fim) {
            echo $ini . " ";
            $ini = $ini - $inc;
        }    
    }
    
    ?>

    <br><br>
    <input type="button" value="Voltar" class="botao" onclick="history.back()">
</div>


</body>
</html>