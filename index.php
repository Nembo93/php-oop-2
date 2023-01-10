<?php
require_once __DIR__ ."/classes/Products.php";
// var_dump($foods);
// var_dump($toys);
// var_dump($shelters);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php-oop-2</title>
</head>
<body>
    <div class="container">

    <div class="titolo_pagina">
        <h1>Pet's world</h1>
    </div>

    <div class="box_categorie">
        <div class="box_titolo">
            <h2>Food</h2>
        </div>
        <div class="box_prodotti">
            <?php foreach($foods as $food){ ?>
                <div class="card">
                    <h3><?php echo $food->name ?></h3>
                    <div class="img"><?php echo $food->image ?></div>
                    <div class="info"><?php echo $food->type ?></div>
                    <div class="info"><?php echo $food->price ?></div>
                    <div class="info"><?php echo $food->ingredients ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
        


        <div class="box_categorie">
            <div class="box_titolo">
                <h2>Toys</h2>
            </div>
            <div class="box_prodotti">
                <?php foreach($toys as $toy){ ?>
                    <div class="card">
                        <h3><?php echo $toy->name ?></h3>
                        <div class="img"><?php echo $toy->image ?></div>
                        <div class="info"><?php echo $toy->type ?></div>
                        <div class="info"><?php echo $toy->price ?></div>
                        <div class="info"><?php echo $toy->item ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        

        <div class="box_categorie">
        <div class="box_titolo">
            <h2>Shelters</h2>
        </div>
            <div class="box_prodotti">
                <?php foreach($shelters as $shelter){ ?>
                    <div class="card">
                        <h3><?php echo $shelter->name ?></h3>
                        <div class="img"><?php echo $shelter->image ?></div>
                        <div class="info"><?php echo $shelter->type ?></div>
                        <div class="info"><?php echo $shelter->price ?></div>
                        <div class="info"><?php echo $shelter->size ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        

    </div>
</body>
</html>