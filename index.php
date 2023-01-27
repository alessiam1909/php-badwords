


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Prima prova php</title>
</head>
<body>
    <h1 class="titolo">Benvenuto!</h1>
    <h3>In questa pagina potrai scrivere un paragrafo a piacimento e censurare una parola del paragrafo a tua scelta: Per cominciare inserisci i dati nella form, poi premi il tasto submit:</h3>
    <form action="./parolaCensurata.php" method="GET" >
        <input type="text" name="paragrafo" id="paragrafo" placeholder="  Scrivi qui il tuo paragrafo">
        <input type="text" name="badword" id="badword" placeholder="  Scrivi qui la parola che vuoi censurare">
        <button type="submit">Submit</button>
    </form>
</body>
</html>