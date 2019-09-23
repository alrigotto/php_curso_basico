<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - strpos</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'strpos'
        echo "<span class='destaque'>Uso da função 'strpos':</span><p>";

        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP"); // faz a busca de uma string retornando sua posição.
        // OBS: é case sensitive
        echo "$frase<p>";
        echo "A string 'PHP' foi encontra da na posição $pos";
        

       //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";

        // Função 'stripos'
        echo "<span class='destaque'>Uso da função 'stripos':</span><p>";

        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php"); // faz a busca de uma string retornando sua posição.
        // OBS: é igual a 'strpos' mas não é case sensitive.
        echo "$frase<p>";
        echo "A string 'php' foi encontra da na posição $pos";
        
        
        ?>
    </div>


</body>

</html>