<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - wordwrap</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php

    $texto = "Conta-se que por volta do ano 250 A.C, na China antiga, um príncipe da região norte do país, estava às vésperas de ser coroado imperador, mas, de acordo com a lei, ele deveria se casar.";
    // 'wordwrap' é para fazer quebra de textos.
    $txt = wordwrap($texto, 5, "<br>\n", false);


    echo $txt;

    ?>
</div>


</body>
</html>