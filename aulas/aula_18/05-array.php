<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>PHP - Array - Matriz</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <pre class="pre">

        <?php
        //para compor matrizes em PHP usa-se array dentro de array.
        $m = array(
            array(6, 4), //"linha 0"
            array(4, 9), //"linha 1"
            array(3, 2)  //"linha 2"
        );

        print_r($m);

        $m[0][1] = 8; //modificando valores usando [linhas][colunas]
        $m[2][0] = 7;

        print_r($m);

        ?>
        </pre>
    </div>


</body>

</html>