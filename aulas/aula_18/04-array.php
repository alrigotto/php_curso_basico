<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>PHP - Array - Chaves Associativas</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        
        <?php
        //compondo uma array com chaves associativas, onde o indice pode
        //...ser uma string e os valores podem ser de tipos diferentes
        $cad = array("nome" => "Ana",
                    "idade" => 23,
                    "peso" => 78.5);
        $cad["fuma"] = true; // acrescenta dinamicamente um elemento.
        // print_r($cad);
        foreach ($cad as $campo => $valor) {
            echo "O campo $campo possui o conteúdo $valor <br>";
        }
        
        ?>
        
    </div>


</body>

</html>