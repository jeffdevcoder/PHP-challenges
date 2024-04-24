<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversao de Moeda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php
            $din = $_REQUEST["dinheiro"] ?? 0;
            $dolar = $din / 5.16;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<a>Seu dinheiro: </a>". numfmt_format_currency($padrao, $din, "BRL") . "<a> em USD vale:</a>" . numfmt_format_currency($padrao, $dolar, "USD");           
        ?> 

        <button onclick="javascript:history.go(-1)">&#x1F504;Voltar</button> 
    </main>    
</body>
</html>