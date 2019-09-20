<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Tabuada</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    
    <form method="get" action="03-exercicio-B.php">
        Escolha um número para ver sua Tabuada:<br><br>
        Número:&nbsp
        <select name="sel" id="sel" class="sel">
        <!-- Gerando options com PHP  -->
        <?php
        $a = 1;
        do {
            echo "<option value='$a'>$a</option>";
            $a += 1;
        } while ($a <= 10);
        ?>
        <!-- Fim -->
        </select>&nbsp
        <input type="submit" value="Tabuada" class="botao">
    
    </form>



</div>


</body>
</html>