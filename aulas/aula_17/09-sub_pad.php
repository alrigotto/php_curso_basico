<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - str_pad</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'str_pad'
        echo "<span class='destaque'>Uso da função 'str_pad':</span><p>";

        /*
        O "str_pad" preenche com o caracter (2° parametro) e a quantidade desejada (3° parametro) 
        em torno de uma substring selecionada (1° parametro). O ultimo parametro determina se a
        distribuição será toda a direita, a esquerda ou em ambos os lados. Execute o código abaixo
        para um melhor entendimento.
        */
        $nome = "Guanabara";
        $novo = str_pad($nome, 30, "_", STR_PAD_RIGHT);
        print("Meu professor $novo é lindo!");

        echo "<p>";

        $novo = str_pad($nome, 30, "_", STR_PAD_LEFT);
        print("Meu professor $novo é lindo!");

        echo "<p>";

        $novo = str_pad($nome, 30, "_", STR_PAD_BOTH);
        print("Meu professor $novo é lindo!");
        
        ?>
    </div>


</body>

</html>