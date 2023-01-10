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

        <div class="box_prodotti">
            <?php foreach($foods as $food){ ?>
                <div class="card">
                    <h2><?php echo $food->name ?></h2>
                    <div class="img"><?php echo $food->image ?></div>
                    <div class="info"><?php echo $food->type ?></div>
                    <div class="info"><?php echo $food->price ?></div>
                    <div class="info"><?php echo $food->ingredients ?></div>
                </div>
            <?php } ?>
        </div>
        

    </div>
</body>
</html>