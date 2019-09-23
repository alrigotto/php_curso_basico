<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - str_split</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'str_split'
        echo "<span class='destaque'>Uso da função 'str_split':</span><p>";
        $nome = "Rigotto";
        $vetor = str_split($nome); // 'str_split' tranforma uma string em vetor onde cada index é uma letra.
        echo "$nome <p>";
        print_r($vetor);

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
















        ?>
    </div>


</body>

</html>