<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - print_r</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    
    echo "<span class='destaque'>'print_r' é usado para imprimir na tela um vetor.</span><p>";
    
    $v[0] = 4;
    $v[1] = 8;
    $v[2] = 3;
    
    print_r($v);
    /*
    print_r é apenas para imprimir vetores, ou seja,
    é mais um facilitador para testes durante o desenvolvimento.
    OBS: '=>' é o símbolo de associação no PHP.
    */

    /*
    'var_dump e 'var_export'' são variações semelhantes ao 'print_r'
    com uma formatação um pouco diferente apenas.
    */

    $v2 = array (3, 4, 5, 8, 9);
    print_r($v2);
    echo "<p><span class='destaque'>'var_dump e 'var_export'' são variações semelhantes ao 'print_r':</span><p>";
    echo "<span class='destaque'>var_dump =></span>";
    var_dump($v2);
    echo "<br>";
    echo "<br><span class='destaque'>var_export =></span>  ";
    var_export($v2);
    

    ?>
</div>


</body>
</html>