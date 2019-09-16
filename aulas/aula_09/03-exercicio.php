<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .media {
            color: #f03052;
            font-weight: bold;
        }
        
    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercício 03</title>
</head>
<body>
<div>
<div class = "div1">
        Curso Básico de PHP - Canal do YouTube "Curso em Vídeo" 
</div>
<div class = "div2">



    <?php
    /* 
    Exercicío do Guanabara:
    Média de notas:
    - De 0 e 5 -> Reprovado.
    - De 5 e 7 -> Recuperação.
    - De 7 a 10 -> Aprovado.
    */

    /* O 'isset' é para verificar se foi
    configurado ou passado o parametro */
    $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
    $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
    $calculaOK = 0;
    $media = 0;
    $mErro = "";
    $resultado = "";

    // verificando se as duas notas foram digitadas corretamente
    if ($n1 == "" || $n2 == "") {
        $mErro = "Digite uma nota entre 0 e 10!";
        $calculaOK = 0;
    }
    elseif ($n1 > 10 || $n2 >10) {
        $mErro = "Digite uma nota entre 0 e 10!";
        $calculaOK = 0;
    }
    elseif ($n1 < 0 || $n2 < 0) {
        $mErro = "Digite uma nota entre 0 e 10!";
        $calculaOK = 0;
    }
    else {
        $calculaOK = 1;
    }    
    
    if ($calculaOK) {
        $media = ($n1 + $n2) / 2;
    }

    $txtMedia = number_format($media, 1, ',', '.');
    $txtN1 = number_format($n1, 1, ',', '.');
    $txtN2 = number_format($n2, 1, ',', '.');
    
    if ($media < 5) {
        $resultado = "Reprovado";
    }
    elseif ($media >= 5 && $media <= 7) {
        $resultado = "Recuperação";
    }
    elseif ($media > 7) {
        $resultado = "Aprovado";
    }
    
    if ($calculaOK) {
        echo "A média entre <span class='media'>$txtN1</span> e <span class='media'>$txtN2</span> é igual a <span class='media'>$txtMedia</span>.<br>";
        echo "<br>Situação do aluno: <span class='media'>$resultado</span>. ";
    }
    else {
        echo $mErro;
    }
    ?>
    <br><br><input type="button" value="Voltar" onclick="history.back()"/>
</div>


</body>
</html>