<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Igual e Idêntico</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    $a = 3;
    $b = "3";
    /* No PHP o operador "igual" (==) considera o n° 3 igual a string "3"
    mesmo não sendo do mesmo tipo. */
    $r = ($a == $b) ? "SIM" : "NÃO";
    echo "(==) As variéveis A e B são iguais? $r";
    
    echo "<br>";

    /* No PHP o operador "idêntico" (===) é verdadeiro quando as variáveis
    são iguais e do mesmo tipo */
    $r = ($a === $b) ? "SIM" : "NÃO";
    echo "(===) As variéveis A e B são iguais? $r";
    
    ?>
</div>


</body>
</html>