<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        echo "A soma vale: ". ($n1 + $n2);
        echo "<br/> A subtração vale: ". ($n1 - $n2);
        echo "<br/> A multiplicação vale: ". ($n1 * $n2);
        echo "<br/> A divisão vale: ". ($n1 / $n2);
        echo "<br/> O modulo vale: ". ($n1 % $n2);
        echo "<br/> A média vale: ". ($n1 + $n2) / 2;
    
    ?>
</div>


</body>
</html>