<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Tabuada com o 'for'</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    $n = isset($_GET["num"]) ? $_GET["num"] : 1;
    for ($i=1; $i <= 10 ; $i++) {
        $m = $i * $n;
        echo "$i x $n = $m<br>";
    }
    
    ?>
    <br><input type="button" value="Voltar" class="botao" onclick="history.back()">
</div>


</body>
</html>