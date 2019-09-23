<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - explode</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'explode'
        echo "<span class='destaque'>Uso da função 'explode':</span><p>";
        $site = "Curso em vídeo";
        $vetor = explode(" ", $site); // 'explode' é similar ao 'str_word_count 1'...
        //...o 1° parametro é o caracter delimitador o segundo é a string em si a ser explodida num array.
        echo "Curso em Vídeo<br>";
        print_r($vetor);

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
















        ?>
    </div>


</body>

</html>