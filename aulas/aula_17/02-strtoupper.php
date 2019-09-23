<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - strtoupper</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'strtoupper'
        echo "<span class='destaque'>Uso da função 'strtoupper':</span><p>";

        $nome = "Andre Luiz Rigotto";
        echo "$nome<p>";
        $nome_minusculo =  strtoupper($nome); // 'strtoupper' retorna uma string com todos os...
        //...caracteres maiusculos. OBS: não funciona com caracteres acentuados.

        echo "Seu nome todo minusculo é: $nome_minusculo";

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
        ?>
    </div>


</body>

</html>