<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio 02</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    //capturando os valores usando variáveis de variáveis
    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;
        $url = "v" . $i;
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
        $i++;
    }
    // Exibeindo os valores
    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;
        echo "Valor $i: " .  $$v . "<br>";
        $i++;
    }

    

    
    
    
    ?>


</div>


</body>
</html>