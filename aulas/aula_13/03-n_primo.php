<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Número Primo</title>
</head>
<body>
    <div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
    </div>
    <div class = "div2">
        <span class="destaque">Testador de números Primos</span><br><br>
    <?php
    $n = isset($_GET["num"]) ? $_GET["num"] : 1;
    
    $mult =  "";
    $multTotal = 0; 
    for ($i=1; $i <= $n ; $i++) {
        if (($n % $i) == 0) {
            $mult = $mult . " $i";
            $multTotal++;
            if ($i != $n) {
                $mult = $mult . ",";
            }
        }
    }
    echo "Analisando o número $n...<br><br>";
    echo "Valores múltiplos: $mult. <br><br>";
    echo "Total de múltiplos: $multTotal.<br><br>";
    if ($multTotal > 2) {
        echo "Resultado: $n <span class='destaque'>NÃO É PRIMO</span>";
    } else {
        echo "Resultado: $n <span class='destaque'>É PRIMO</span>";
    }
    ?>

    <br><br><input type="button" value="Voltar" class="botao" onclick="history.back()">
    </div>


</body>
</html>