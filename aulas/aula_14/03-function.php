<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções com múltiplos parâmetros</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        function soma() //embora não tenha parametros essa função pode aceitar varios...
        { // ...que serão capturados por 'func_get_args' abaixo:
            $p = func_get_args(); //essa função pega todos os parametros passados e coloca numa array
            $t = func_num_args(); //aqui é para pegar no numero de elementos da array
            $s = 0;
            for ($i = 0; $i < $t; $i++) { // esse 'for' é para fazer a varredura da array
                $s += $p[$i];
            }
            return $s;
        }

        $r = soma(4, 5, 6, 7);
        echo "A soma dos valores é igual a $r.";


        ?>
    </div>


</body>

</html>