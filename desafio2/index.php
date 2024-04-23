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
        <h1>
            Trabalhando com numeros aleatorios
        </h1>
    </header>

    <main>  
        <?php
            $numero = rand(0, 100);

            echo "<p>O numero gerado entre 0 e 100 eh <strong>$numero</strong></p>"           

        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro numero</button>     
    </main>
</body>
</html>