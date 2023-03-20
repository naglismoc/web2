<?php
$color = "800000";
if (isset($_GET['color'])) {
    $color = $_GET['color'];
}
print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#<?= $color ?>;">
    <a href="./index.php">home</a>

    <a href="./treciaUzd.php">i save pati</a>
    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">press</button>
    </form>

</body>

</html>

<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->