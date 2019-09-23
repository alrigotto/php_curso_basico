<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - strrev</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'strrev'
        echo "<span class='destaque'>Uso da função 'strrev':</span><p>";

        $nome = "Andre Luiz Rigotto";
        echo "$nome<p>";
        $nome2 =  strrev($nome); // 'strrev' retorna a string...
        //...em ordem invertida. OBS: não funciona com acentos!!

        echo "Seu nome todo minusculo é: $nome2";

        echo "<p>";
        $nome = "internet";
        echo "$nome<p>";
        $nome2 =  strrev($nome);

        echo "Seu nome todo minusculo é: $nome2";





        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
        ?>
    </div>


</body>

</html>