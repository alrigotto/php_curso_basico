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
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos";

    if ($i < 16) {
        $votoTipo = " você não vota.";
    }
    elseif (($i >= 16 && $i < 18) || ($i > 65) ) {
        $votoTipo = "o voto é opcional.";
    }
    else {
        $votoTipo = "o voto é obrigatório.";
    }
    
    echo "</br>Para essa idade $votoTipo";
    
    ?>
</div>


</body>
</html>