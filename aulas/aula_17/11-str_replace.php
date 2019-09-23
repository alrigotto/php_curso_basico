<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - str_replace</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'str_replace'
        echo "<span class='destaque'>Uso da função 'str_replace':</span><p>";

        $txt = "Gosto de estudar Matemática, Matemática é muito legal!";   
        print ("$txt<p>");
        echo "Após o uso do 'str_replace':<p>";
        $nova_frase = str_replace("Matemática", "PHP", $txt); // o 'str_replace' localiza a substring
        // desejada e substitui por outra em todas as ocorrências que ele encontrar.
        print("$nova_frase");

        //Obs: 'str_replace' é case sensitive, se usar 'str_ireplace' ele não será case sensitive.




        ?>
    </div>


</body>

</html>