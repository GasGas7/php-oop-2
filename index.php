<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

Strutturare le classi gestendo l'ereditarietà dove necessario; 

ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...

$c = new CreditCard(..); 
$user->insertCreditCard($c); -->


<?php

/* require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/TypeOfProd.php'; */
require_once __DIR__ . '/traits-exceptions/traits/carsTraits.php';
require_once __DIR__ . '/traits-exceptions/classes/cars.php';
require_once __DIR__ . '/traits-exceptions/classes/cupra.php';
require_once __DIR__ . '/traits-exceptions/classes/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2-traits</title>
</head>

<body>
    <div class="container-auto">
        <?php foreach ($model_list as $cupra) : ?>

            <div class="carta_auto">
                <h4><?= $cupra->getbrand() ?></h4>
                <h4><?= $cupra->getmodel() ?></h4>
                <h4><?= $cupra->getSegment() ?></h4>
                <h4><?= $cupra->getSafety() ?></h4>
                <h4><?= $cupra->getHP() ?></h4>
                <h4><?php #$cupra->setFuel("Petrol") #Change Petrol with Electric?></h4>
                <h4><?= $cupra->getPrice() ?></h4>
                
            </div>
            <?php try
            { 
                 echo $cupra->setFuel("Petrol");
            } catch (Exception $e) {
                 echo "Exception: " . $e->getMessage();
            } ?>
        <hr>
        <?php endforeach; ?>


    </div>
</body>

</html>