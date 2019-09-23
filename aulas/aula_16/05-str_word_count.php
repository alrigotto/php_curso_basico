<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - str_word_count</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'str_word_count'
        echo "Uso da função 'str_word_count'<p>";
        $frase = "Eu vou estudar PHP agora";

        //'str_word_count' com parametro '0' retorna o n° de palavras numa frase.
        $count = str_word_count($frase, 0); 
        echo "'$frase'. => Esta frase possui <span class='destaque'>$count</span> palavras";
        echo "<p>";
        
        //'str_word_count' com parametro '1' retorna um vetor com cada palavra em um index.
        $count_array1 = str_word_count($frase, 1);
        echo "'$frase'. Esta frase virou um array:<br>";
        print_r($count_array1);
        echo "<p>";

        //'str_word_count' com parametro '2' retorna um vetor onde o index de cada...
        //...palavra é a posição real da primeira letra da palavra na frase como um todo.
        $count_array2 = str_word_count($frase, 2);
        echo "'$frase'. Esta frase virou um array com index<br> em posições reais:<br>";
        print_r($count_array2);
        echo "<br>";

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
















        ?>
    </div>


</body>

</html>