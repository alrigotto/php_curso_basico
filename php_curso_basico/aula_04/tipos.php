<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Document</title>
</head>

<body>
    <div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 

    </div>
    <div class = "div2">
    <?php

    $n = 4; // declarando variavel
    $no = "Gustavo";// declarando variavel
    echo $no."<br>"; //<br> é para mudar de linha
    echo "<br>"; // somente para pular uma linha

    //===================================
    
    echo $no." tem ".$n." anos!<br>"; // Concatenação
    echo "<br>"; // somente para pular uma linha
    echo "$no tem $n anos!<br>"; // Concatenação alternativa
    echo "<br>"; // somente para pular uma linha
    echo '$no tem $n anos!<br>'; // Usando aspas simples o PHP ignora as variaveis!!

    
    
    
    ?>
    </div>
</body>
</html>