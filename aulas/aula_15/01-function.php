<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Function - Passagem por Referência</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

        //passagem por referência
        echo "<p>Passagem por referência:<p>";
        echo "Para usar passagem por referêcia você deve usar '&' antes da variável no parâmetro da função."; 
        function teste(&$x) { //O '&' antes da variável no parâmetro da função indica passagem por referência
            $x += 2;
            echo "<p> O valor de X é $x<p>";
        }
        
        $a = 3;
        teste($a);
        echo "<p> O valor de A é $a<p>";

    
    ?>
</div>


</body>
</html>