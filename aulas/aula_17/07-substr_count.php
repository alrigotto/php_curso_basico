<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - substr_count</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'substr_count'
        echo "<span class='destaque'>Uso da função 'substr_count':</span><p>";

        $frase = "Estou aprendendo PHP no Curso em Video de PHP";
        $conta = substr_count($frase, "PHP"); //retorna quantas vezes uma string aparece numa frase.
        echo "$frase<p>";
        echo "A string 'PHP' foi encontra $conta vezes na frase.";
        

       //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";

        
        
        
        ?>
    </div>


</body>

</html>