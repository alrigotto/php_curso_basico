<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercício 01</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    $a = isset($_GET["ano"]) ? $_GET["ano"] : "1900";
    echo "teste $a";
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos";

    if($i >= 18) {
        $v = "já pode votar";
        $d = "já pode dirigir.";
    }
    else {
        $v = "não pode votar";
        $d = "não pode dirigir.";
    }
    echo "</br>Com essa idade você $v e também $d";
    
    ?>
</div>


</body>
</html>