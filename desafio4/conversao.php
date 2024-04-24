<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversao de moeda Oficial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $din = $_REQUEST["dinheiro"] ?? 0;

            $inicioDia = date("m-d-Y", strtotime("-1 days"));

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\''. $inicioDia .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $dolar = $din / $cotacao;

            echo "<a>Seu dinheiro: </a>". numfmt_format_currency($padrao, $din, "BRL") . "<a> em USD vale:</a>" . numfmt_format_currency($padrao, $dolar, "USD");
        ?>

        <button onclick="javascript:history.go(-1)">&#x1F504;Voltar</button>
    </main>
</body>
</html>