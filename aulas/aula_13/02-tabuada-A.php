<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Tabuada com o 'for'</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <form method="get" action="02-tabuada-B.php">
        <select class="sel" name="num">
            <?php
                for ($i=1; $i <=10 ; $i++) { 
                    echo "<option class='opt'>$i</option>";
                }            
            ?>
        </select>
        <br><br>
        <input class="botao" type="submit" value="Gerar Tabuada">
    
    </form>
</div>


</body>
</html>