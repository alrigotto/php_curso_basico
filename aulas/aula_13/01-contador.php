<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Contador com 'for'</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <span class="destaque"> Contador 'for'</span>
    <br><br>
    <?php
    echo "Crescente: ";
    for ($i=1; $i <= 10; $i++) {
        echo "$i ";
    }
    echo "<br><br>";
    echo "Decrescente: ";
    for ($i = 10; $i >= 1 ; $i--) { 
        echo "$i ";
    }
    echo "<br><br>";
    echo "Crescente de 5 em 5: ";
    for ($i=10; $i <= 50 ; $i+=5) { 
        echo "$i ";
    }
    
    
    ?>
</div>


</body>
</html>