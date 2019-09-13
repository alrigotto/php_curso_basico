<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operador Ternário</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2 <br/>";
    // Uso de operador "Ternário" => expressão ? verdadeiro : falso
    $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
    echo "O resultado é $r";
    
    ?>
</div>


</body>
</html>