<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variável por referência</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    /*
    O caracter "&" é usa para atribuir uma variavel por referência, 
    por exemplo:
    $a = 3;
    $b = &$a;
    
    $b passa a referenciar $a, ou seja os dois terão o mesmo valor,
    porque fazem referência a mesma posição de memória, ficando
    linkados um ao outro.
    */
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variável 'A' vale $a";
    echo "<br/>A variável 'B' vale $b";
    
    
    
    ?>
</div>


</body>
</html>