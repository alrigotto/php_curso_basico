<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio 02</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    
    <form method="get" action="ex_02_parte2.php">
        <?php
        $a = 1;
        while ($a <= 5) {
            echo " Valor $a: <input type='number' name='v$a' max='100' min='0' value='0'/><br>";
            $a++;
        }


    ?>

    <br>
    <input type="submit" value="Enviar" class='botao'/>
</form>


</div>


</body>
</html>