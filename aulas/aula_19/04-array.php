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

    $v = array(2=>"Z", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
    print_r($v);
    echo "</br>Colocando em ordem crescente um array usando 'ksort()', mas usa<br>o index e não o valor do elemento:</br></br>";
    ksort($v); //coloca o array em ordem crescente usando os index e não o valor do elemento.
    print_r($v);

    echo "</br>Colocando em ordem decrescente um array usando 'krsort()', mas usa<br>o index e não o valor do elemento:</br></br>";
    krsort($v); //coloca o array em ordem decrescente usando os index e não o valor do elemento.
    print_r($v);

        
    ?>
    </pre>
</div>


</body>
</html>