<?php

include __DIR__ . "/models/Product.php";

$ProductsList = [

    new Product ("crocchette", "cane", 19,99),
    new Product ("cuccia", "cane", 15,00),
    new Product ("acquario", "pesce", 4,99),
    new Product ("topo di gomma", "gatto", 1,99),
    new Product ("sella in pelle", "cavallo", 50,00)

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">

        <input type="text" >

    </form>

    <?php 
        foreach($ProductsList as $product) { ?>

        <h2><?= $product->typeProduct ?></h2>
        <div>Categoria: <?= $product->animal ?></div>
        <div>Prezzo: <?= number_format($product->price, 2, ',', ' ' )  ?></div>

    <?php    } ?>
    
</body>
</html>
