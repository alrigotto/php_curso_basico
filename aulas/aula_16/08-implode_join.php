<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - implode ou join</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'implode' ou 'join'
        echo "<span class='destaque'>Uso da função 'implode' ou 'join':</span><p>";
        
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";

        $texto = implode("#", $vetor); //'implode' ou 'join' junta palavras de um...
        //...vetor pra formar frases, sendo o 1° parametro o caracter que irá separar as palavras.

        print_r($vetor);
        print ("<p>$texto");
        

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
















        ?>
    </div>


</body>

</html>