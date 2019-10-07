<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Ordenando um Array</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <pre>
    <?php

    $v = array("Z", "J", "M", "X", "K");
    print_r($v);
    echo "</br>Colocando em ordem crescente um array usando 'sort()':</br></br>";
    sort($v); //coloca o array em ordem crescente.
    print_r($v);

    echo "</br>Colocando em ordem decrescente um array usando 'rsort()':</br></br>";
    rsort($v);//coloca o array em ordem decrescente.
    print_r($v);

    echo "</br>Colocando em ordem crescente um array usando 'asort()', porém o</br>index irá acompanhar o elemento:</br></br>";
    asort($v); //coloca o array em ordem crescente.
    print_r($v);

    echo "</br>Colocando em ordem decrescente um array usando 'arsort()', porém o</br>index irá acompanhar o elemento:</br></br>";
    arsort($v); //coloca o array em ordem crescente.
    print_r($v);
    
    
    
    
    ?>
    </pre>
</div>


</body>
</html>