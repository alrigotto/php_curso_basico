<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>PHP - Array e foreach</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <pre>
            <table border="1"><tr>
        <?php
        //composição de array usando 'range'
        $c = range(5, 20, 2); // compõe uma array onde:
        // começa com '5' e vai até '20' com passo '2'
        //print_r($c);
        foreach ($c as $v) {
            echo "<td>$v ";
        }
            

        ?>
        </table>
        </pre>
    </div>


</body>

</html>