<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Numero Real</h1>
    </header>

    <main>
        <?php
            $num = $_POST["num"] ?? 0;

            echo "Analisando o numero <strong>". number_format($num, 3, ",", ".") . "</strong> informado pelo usuario:\n";

            echo "<p>Parte inteira: <strong>" . intval($num) . "</strong></p>";
            echo "<p>Parte fracionaria: <strong>". fmod($num, 1) . "</strong></p>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x1F504;Voltar</button>
    </main>
</body>
</html>