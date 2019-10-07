<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exibindo um Array</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <pre>
    <?php

    $v = array("A", "J", "M", "X", "K");
    $tot = count($v);
    echo "O vetor tem " . $tot . " elementos. </br>";
    print_r($v); //"print_r" é apropriado para exibir array, objetos, etc...
    var_dump($v); // "var_dump" é similar a "print_r", mas com mais detalhes;
    

    
    
    ?>
    </pre>
</div>


</body>
</html>