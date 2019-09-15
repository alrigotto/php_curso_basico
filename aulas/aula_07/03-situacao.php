<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Situação</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    $nota1 = $_GET ["n1"];
    $nota2 = $_GET ["n2"];
    $m = ($nota1 + $nota2) / 2;
    echo "A média entre $nota1 e $nota2 é $m <br/>";
    $situacao = ($m < 6) ? "REPROVADO" : "APROVADO";
    echo "(Método 1) A situação do aluno é $situacao";
    echo "<br>";
    echo "(Método 2) A situação do aluno é " . (($m < 6) ? "REPROVADO" : "APROVADO");



    ?>
</div>


</body>
</html>