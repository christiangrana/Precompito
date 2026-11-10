<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Calcolatrice</title>
</head>
<body>

    <h1>Calcolatrice</h1>

    <form action="calcolatrice.php" method="POST">
        
        
        a: <input type="number" step="any" name="a" required><br><br>
        b: <input type="number" step="any" name="b" required><br><br>

        
        <fieldset>
            <legend>Operazione</legend>
            <input type="radio" name="operazione" value="somma" checked> somma<br>
            <input type="radio" name="operazione" value="differenza"> differenza<br>
            <input type="radio" name="operazione" value="prodotto"> prodotto<br>
            <input type="radio" name="operazione" value="quoziente"> quoziente<br>
        </fieldset>

        <br>

        
        <fieldset>
            <legend>Opzioni</legend>
            <input type="checkbox" name="valore_assoluto" value="1"> valore assoluto<br>
            <input type="checkbox" name="quadrato" value="1"> quadrato<br>
            <input type="checkbox" name="arrotonda" value="1"> arrotonda a 2 decimali<br>
        </fieldset>

        <br>

        <input type="submit" name="calcola" value="Calcola">

    </form>

    <?php   
    if (isset($_POST['calcola'])) {
        
        // Lettura dei due numeri
        $a = $_POST['a'];
        $b = $_POST['b'];
        $operazione = $_POST['operazione'];
        $risultato = 0;

        // 1. Calcolo dell'operazione principale
        if ($operazione == 'somma') {
            $risultato = $a + $b;
        } elseif ($operazione == 'differenza') {
            $risultato = $a - $b;
        } elseif ($operazione == 'prodotto') {
            $risultato = $a * $b;
        } elseif ($operazione == 'quoziente') {
            if ($b != 0) {
                $risultato = $a / $b;
            } else {
                echo "<br><b>Errore: impossibile dividere per zero!</b>";
                exit();
            }
        }

        
        if (isset($_POST['valore_assoluto'])) {
            $risultato = abs($risultato);
        }

    
        if (isset($_POST['quadrato'])) {
            $risultato = $risultato * $risultato;
        }

        
        if (isset($_POST['arrotonda'])) {
            $risultato = round($risultato, 2);
        }

        echo "<h2>Risultato: " . $risultato . "</h2>";
    }
    ?>

</body>
</html>