<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções em arquivos externos</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

        include "function.php"; //chamada de funções que estão em um arquivo externo.
        /*
        Pode ser usado "require" támbem, a diferença é que o "include" vai tentar
        continuar executando o código mesmo se o arquivo de funções não existir, já o "require"
        vai interromper o código na hora. 
        */
        echo "<h1>Testando funções em arquivos externos...</h1>";
        ola(); // esta função entá no arquivo: "function.php"
        mostraValor(4); // esta função entá no arquivo: "function.php"


    ?>
</div>


</body>
</html>