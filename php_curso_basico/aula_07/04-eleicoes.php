<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Eleições</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    $ano = $_GET ["an"];
    $idade = 2019 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos. <br/>";
    $tipo = ($idade >= 18 && $idade<65) ? "OBRIGATÓRIO." : "NÃO OBRIGATÓRIO."; // pode ser 'and' no lugar de '&&'
    echo "E dessa foram seu voto é $tipo";



    ?>
</div>


</body>
</html>