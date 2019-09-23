<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - strlen e trim</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'strlen'
        echo "<span class='destaque'>Função 'strlen':</span><br>";
        $palavra = "Curso em vídeo";
        $tamanho = strlen($palavra);
        /*
        'strlen' retorna a quantidade de string contando também os espaços.
        obs: os caracteres acentuados contam como 2.
        */
        echo "'Curso em video' tem ao todo <span class='destaque'>$tamanho</span> letras e espaços.";
        // echo "<br>";

        //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";
        
        // Função 'trim'
        $nome = "   André Luiz Rigotto   ";//o nome possui 3 espaços no inicio e 3 no final
        $t = strlen($nome); // 
        echo $nome . " 'strlen' é igual a " . $t;
        echo "<br>";
        $trim_nome = trim($nome); // aplicando 'trim' os espaços no inicio e no fim são retirados.
        $t = strlen($trim_nome);
        echo "Após o 'trim' os espaços iniciais e finais são retirados.";
        echo "<br>";
        echo $trim_nome . " 'strlen' é igual a " . $t;

        //################################################################################
        
        echo "<p>--------------------------------------------------------------------------<p>";
        // Função 'ltrim'
        // É o mesmo que 'trim, mas tira apenas os espaços da esquerda, ou seja, do inicio.'
        $nome = "   André Luiz Rigotto   ";//o nome possui 3 espaços no inicio e 3 no final
        $t = strlen($nome); // 
        echo $nome . " 'strlen' é igual a " . $t;
        echo "<br>";
        $ltrim_nome = ltrim($nome); // aplicando 'ltrim' os espaços no inicio (esquerda) são retirados.
        $t = strlen($ltrim_nome);
        echo "Após o 'ltrim' apenas os espaços iniciais (esquerda) são retirados.";
        echo "<br>";
        echo $ltrim_nome . " 'strlen' é igual a " . $t;

        //################################################################################
        
        echo "<p>--------------------------------------------------------------------------<p>";
        
        // Função 'rtrim'
        // É o mesmo que 'trim, mas tira apenas os espaços da direita, ou seja, do final.'
        $nome = "   André Luiz Rigotto   ";//o nome possui 3 espaços no inicio e 3 no final
        $t = strlen($nome); // 
        echo $nome . " 'strlen' é igual a " . $t;
        echo "<br>";
        $rtrim_nome = ltrim($nome); // aplicando 'rtrim' os espaços do final (direita) são retirados.
        $t = strlen($rtrim_nome);
        echo "Após o 'rtrim' apenas os espaços do final (direita) são retirados.";
        echo "<br>";
        echo $rtrim_nome . " 'strlen' é igual a " . $t;

        //################################################################################
        
        echo "<p>--------------------------------------------------------------------------<p>";















        ?>
    </div>


</body>

</html>