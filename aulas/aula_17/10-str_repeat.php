<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - str_repeat</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'str_repeat'
        echo "<span class='destaque'>Uso da função 'str_repeat':</span><p>";

        $txt = str_repeat("Php" ,5); // 'Php' será repetido 5 vezes.        
        print ("O texto gerado foi $txt");
        echo "<p>";
        print (str_repeat("-", 20)); // '-' será impress o20 vezes.




        ?>
    </div>


</body>

</html>