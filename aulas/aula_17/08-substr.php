<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - substr</title>
</head>

<body>
    <div class="div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo"
    </div>
    <div class="div2">
        <?php
        // Função 'substr'
        echo "<span class='destaque'>Uso da função 'substr':</span><p>";

        $site = "Curso em Video";
        $sub = substr($site, 0, 5); //retorna uma substring baseada nos 2° (posição inicial) e... 
        //...3° (quantidade de caracteres) parametros.
        echo "$site<p>";
        echo "$sub "; // resultado-> 'Curso' | 'C' é a posição 0 e foram pegos 5 caracteres, foramndo 'Curso'
        /*
        Outros exemplos são:
        - Se colocar apenas o 2° parametro, será retornado desta posição até o final da string.
        - Se colocar o 2° parametro negativo a contagem seá de trás para frente.
        - Existem muitas combinações e precisam ser estudas quando for realmente usa-las.
        */
       //################################################################################
        echo "<p>--------------------------------------------------------------------------<p>";

        
        
        
        ?>
    </div>


</body>

</html>