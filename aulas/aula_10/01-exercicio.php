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

    $n = isset($_GET["num"]) ? $_GET["num"] : 0;
    $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

    switch ($o) {
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n ** 3; // no PHP potência não é "^"
            //pode ser usada também a função pow(b,exp).
            break;
        case 3:
            $r = sqrt($n); // ou [$n ^ (1/2)]
            break;
        default:
            echo "Escolha uma operação válida!";
            break;
    }
    echo "O resultado da operação solicitada é <span class='destaque'>$r</span>."

    
    
    ?>
    <br><br><input type="button" class="botao" value="Voltar" onclick="history.back()"/>
</div>


</body>
</html>