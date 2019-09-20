<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Tabuada</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    
    <?php
    
    $num = isset($_GET["sel"]) ? $_GET["sel"] : 1;
    
    echo "Mostrando a Tabuada do <span class='destaque'>$num</span>:<br><br>";
    
    $a = 1;
    
    do {
        echo $num . " x " . $a . " = " . $num * $a . "<br>";
        $a += 1;
    } while ($a <= 10);

    
    
    
    ?>
    
    <br><input type="button" value="Voltar" class="botao" onclick="history.back()">
</div>


</body>
</html>