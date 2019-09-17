<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Regiões do Brasil</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    $est = isset($_GET["estados"]) ? $_GET["estados"] : "Acre";

    

    switch ($est) {

    case "Acre":
    case "Amapa":
    case "Amazonas":
    case "Para":
    case "Rondonia":
    case "Roraima":
    case "Tocantins":
        echo "Você mora na <span class='destaque'>Região Norte</span>.";
        break;
    case "Alagoas":
    case "Bahia":
    case "Ceara":
    case "Maranhao":
    case "Paraiba":
    case "Pernambuco":
    case "Piaui":
    case "Rio_Grande_do_Norte.":
    case "Sergipe":
        echo "Você mora na <span class='destaque'>Região Nordeste.";
        break;
    case "Goias":
    case "Mato_Grosso":
    case "Mato_Grosso_do_Sul":
        echo "Você mora na <span class='destaque'>Região Centro-Oeste.";
        break;
    case "Espirito_Santo":
    case "Minas_Gerais":
    case "Rio_de_Janeiro":
    case "São_Paulo":
        echo "Você mora na <span class='destaque'>Região Sudeste.";
        break;
    case "Parana":
    case "Santa_Catarina":
    case "Rio_Grande_do_Sul":
        echo "Você mora na <span class='destaque'>Região Sul.";
        break;
    default:
        echo "Estado inválido!";
        break;
    }
//     switch ($d) {
//         case 2:
//         case 3:
//         case 4:
//         case 5:
//         case 6:
//             echo "Levanta e vai estudar!! =)";
//             break;
//         case 7:
//         case 8:
//             echo "Descanse pequeno gafanhoto!! ;)";
//             break;
//         default:
//             echo "Dia da semana inválido!";
//             break;
// }    



    ?>
    <br><br><input type="button" class="botao" value="Voltar" onclick="history.back()"/>
</div>


</body>
</html>




