<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Tirar e colocar valores em um Array</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <pre>
    <?php

    $v = array("A", "J", "M", "X", "K");
    print_r($v);
    echo "</br>Acrescentando valor no final usando colchete vazio []:</br></br>";
    $v[] = "O"; // colchete vazio acrescenta valor no final do array
    print_r($v);
    echo "</br>Acrescentando valor no final usando 'array_push()':</br></br>";
    array_push($v, 8); // mais uma opção para acrescentar valores no final do array.
    print_r($v);
    echo "</br>Deletando elemento do final usando 'array_pop()':</br></br>";
    array_pop($v); // deleta o último elemento do array.
    print_r($v);
    echo "</br>Acrescentando elemento no início usando 'array_unshift()':</br></br>";
    array_unshift($v, "Y"); // acrescenta um elemento no início do array.
    print_r($v);
    echo "</br>Deletando um elemento no início usando 'array_shift()':</br></br>";
    array_shift($v); // deleta um elemento no início do array.
    print_r($v);
    
    
    ?>
    </pre>
</div>


</body>
</html>