<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercício 02</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    /* O 'isset' é para verificar se foi
    configurado ou passado o parametro */
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]";
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
    $idade = date("Y") - $ano;
    echo date("Y") . "<br>";
    echo "$nome é $sexo e tem $idade anos.";
    ?>
    <a href="02-exercicio.html"><br>Voltar</a>
</div>


</body>
</html>