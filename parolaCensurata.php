<?php
    $paragrafo = $_GET['paragrafo'];
    $badword = $_GET['badword'];
    $newString = str_replace($badword, "***", $paragrafo)
?>


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
    <h1><?php echo $paragrafo."  "."Il tuo paragrafo ha: ".strlen($paragrafo)."caratteri";?></h1>
    <h1><?php echo $newString."  "."Il tuo paragrafo ha: ".strlen($newString)."caratteri";?></h1>
</body>
</html>