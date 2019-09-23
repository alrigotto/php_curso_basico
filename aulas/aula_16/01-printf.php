<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções String - printf</title>
</head>
<body>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">
    <?php
    
    $p = "leite";
    $pr = 4.5;
    $n = 3.547896;
    $j = 8.678;
    
    echo "<span class='destaque'>Uso do 'printf'</span><p>";
    // usando 'echo' e 'number_format'
    echo "Aqui foi usado 'echo'. O $p custa R$ " . number_format($pr, 2, ',', '.') . ".<p>"; 
    //Usando o 'printf' para escrever igual acima:
    printf("Aqui foi usado 'printf'. O %s custa R$ %.2f.<p>", $p, $pr);
    //  '%s' -> string.
    //  '%.2f' -> valor real formatado com duas casas decimais.
    
    printf("Número com parte inteira apenas: %d <p>", $pr);
    //  '%d' -> valor inteiro

    printf("Número real sem limitaçãi de casas: %f <p>", $n);
    //  '%f' -> valor real
    
    printf("Número absoluto: %u <p>", $j);
    //  '%u' -> valor absoluto
    
    ?>
</div>


</body>
</html>