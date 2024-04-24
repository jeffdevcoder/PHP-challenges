<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>  
        <?php
            $numero = $_GET["numero"] ?? "Sem numero";

            $sucessor = $numero + 1;
            $antecessor = $numero - 1;

            echo "O sucessor eh $sucessor e o antecessor eh $antecessor";
        ?>

        <button onclick="javascript:history.go(-1)">&#x1F504;Voltar</button> 
    </main>
</body>
</html>