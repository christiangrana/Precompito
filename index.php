<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Prodotto = prodotto;
        $Prezzo = prezzo ;
        $Sconto = Sconto;

        $Prodotto = trim($_POST['Prodotto'] ?? '');
        $Prezzo = trim($_POST['Prezzo'] ?? '');
        $Sconto = trim($_POST['Sconto'] ?? '');

        $valido = true;

        $valProdotto = $_POST['Prodotto'] ?? '';
        $valPrezzo = $_POST['Prezzo'] ?? '';
        $valSconto = $_POST['Sconto'] ?? '';

        if (strlen($Prodotto) >= 30)
            echo ("Inserisci massimo 30 caretteri")
            $valido =  false

        if (is_numeric($Prodotto_str))
            $Prodotto



    }
















    ?>
    
</body>
</html>