<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções em PHP</title>
</head>
<body>
<div class = "div1">
    Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
        function soma ($a, $b) {
            // $s = $a + $b;
            // return $s;
            return ($a + $b);
        }
    
        
        $x = -9;
        $y = 18;
        $r = soma ($x, $y);
        echo "A soma entre $x e $y é igual a $r.";
    
    
    ?>
</div>


</body>
</html>