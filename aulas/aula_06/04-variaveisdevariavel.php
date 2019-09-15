<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variáveis de variável</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    $x = "abc";
    $$x = "def";
    //variavel de variavel é um recurso pouco utilizado, segue abaixo um exemplo.
    echo "O conteúdo da variável X é $x";
    echo "<br>A variável ABC criada recebeu o valor $abc";
    
    
    
    ?>
</div>


</body>
</html>