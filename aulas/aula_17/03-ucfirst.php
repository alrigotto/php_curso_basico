<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - ucfirst</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'ucfirst'
        echo "<span class='destaque'>Uso da função 'ucfirst':</span><p>";

        $nome = "andre luiz rigotto";
        echo "$nome<p>";
        $nome2 =  ucfirst($nome); // 'ucfirst' transforma a 1° palavra da string com maiuscula no começo

        echo "Seu nome todo minusculo é: $nome2";

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
        ?>
    </div>


</body>

</html>