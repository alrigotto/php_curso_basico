<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>PHP - Array personalizado</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <pre>
        <?php
        //compondo uma array por associação, pode-se colocar o indice... 
        // ...que quiser em qualquer ordem e mesmo pulando indices. 
        $v = array(3 => 5,
                                1 => 9,
                                0 => 8,
                                7 => 7);
        $v[] = 'E'; // acrescenta dinamicamente um elemento.
        unset($v[0]); //desalocando (deletando) o indice '0'.
        print_r($v);
        
        ?>
        </pre>
    </div>


</body>

</html>