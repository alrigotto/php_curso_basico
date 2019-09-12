<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    $preco = $_GET["p"];
    echo "O preço do produto é R$ $preco";
    $preco += ($preco * 10/100);
    echo "<br>E o novo preço com 10% de aumento será R$ " . number_format($preco, 2, ",", ".");
    $preco = $_GET["p"];
    $preco -= ($preco * 10/100);
    echo "<br>E o novo preço com 10% de desconto será R$ " . number_format($preco, 2, ",", ".");

    /* Operadores de incremento:
    
    - Pré-incremento: ++$a
    - Pós-incremento: $a++
    - Pré-decremento: --$a
    - Pós-decremento: $a--    
    */
    
    
    
    

    
    
    
    ?>
</div>


</body>
</html>