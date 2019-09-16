<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercício 02</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar!! =)";
                break;
            case 7:
            case 8:
                echo "Descanse pequeno gafanhoto!! ;)";
                break;
            default:
                echo "Dia da semana inválido!";
                break;
        }
    
    ?>
    <br><br><input type="button" class="botao" value="Voltar" onclick="history.back()"/>
</div>


</body>
</html>