<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Aritmeticas em PHP</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    // abs() retorna o valor absoluto e é uma funçao embutida no PHP.
    echo "O valor absoluto de $v2 é ". abs($v2);
    // pow() é a potẽncia que também é embutida no PHP.
    echo "<br/>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);
    // sqrt() é a raiz quadrada que também é embutida no PHP.
    echo "<br>A raiz de $v1 é " .sqrt($v1);
    // round() é para aredondar valores.
    echo "<br>O valor de $v2 arredondado é " . round($v2);
    // ceil() é para aredondar valores sempre para cima.
    echo "<br>O valor de $v2 arredondado para cima é " . ceil($v2);
    // floor() é para aredondar valores sempre pra baixo.
    echo "<br>O valor de $v2 arredondado para baixo é " . floor($v2);
    // intval() retorna somente a parte inteira do valor.
    echo "<br>A parte inteira de $v2 é " . intval($v2);
    // number_format() formata números. Abaixo é: valor, n° de casas decimais, sep decimal, sep milhar.
    echo "<br>O valor de $v1 em moeda é R$" . number_format($v1, 2, ",", ".");

    
    ?>
</div>


</body>
</html>