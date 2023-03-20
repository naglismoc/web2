<?php

$color = "black";
if( $_SERVER['REQUEST_METHOD'] == "POST"){
    $color = "white";

}
$letters = ["A","B","C","D","E","F","G","H","I", "J"];
print_r($_POST);
$rnd = rand(3,10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    label{
        color:white;
    }
</style>
<body style="background-color: <?=$color?>">

<?php if( $_SERVER['REQUEST_METHOD'] == "GET"){ ?>
    <form action="" method="post">
    <?php for ($i=0; $i < $rnd; $i++) { ?>
        <label><?=$letters[$i]?></label>
        <input type="checkbox" name="varneles[]" id="">
    <?php } ?>

    <button class="btn btn-primary" type="submit">pateikti duomenis</button>
    <input type="hidden" name="count" value="<?=$rnd?>">
    </form>

<?php }else{ ?>
    <h1>    <?=    (isset($_POST['varneles'])) ? count($_POST['varneles']) : "varniukai išskrido"   ?>      </h1>
    <h1><?=$_POST['count']?></h1>
<?php } ?>
</body>
</html>