<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    /* Aqui é apenas um meio de organização separando as
    declarações de parametros do PHP */
    $txt = isset($_GET["t"]) ? $_GET["t"] : "texto genérico";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
        
    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Texto Colorido</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    echo "<span class='texto'>$txt</span>";
    
    ?>
</div>


</body>
</html>