<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - chr e ord</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'chr'
        echo "<span class='destaque'>Uso da função 'chr':</span><p>";

        $letra = chr(67);
        echo "A letra de código '67' é '$letra'";
        // 'chr' retorna o caracter referente ao código fornecido como parametro.
        

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
        // Função 'ord'
        echo "<span class='destaque'>Uso da função 'ord':</span><p>";

        $codigo = ord("c");
        echo "O código de 'c' é '$codigo'.";
        echo "<p>";
        $codigo = ord("C");
        echo "O código de 'C' é '$codigo'.";
        // 'ord' retorna o código referente ao caracter fornecido como parametro.

        ?>
    </div>


</body>

</html>