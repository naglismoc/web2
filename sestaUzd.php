<?php

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $color = "green";
}else{
    header("Location:./sestaUzd.php");
    die;
    $color = "yellow";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?=$color?>;">
    <form action="" method="get">
        <button type="submit">get</button>
    </form>
    <form action="" method="post">
        <button type="submit">post</button>
    </form>
</body>

</html>