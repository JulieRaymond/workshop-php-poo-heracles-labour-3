<?php

require '../vendor/autoload.php';

/** ✅ DEBUT DE LA ZONE À MODIFIER ✅ **/

use App\Fighter;

use App\Shield;
use App\Weapon;
use App\Hero;
use App\Monster;
use App\Arena;

$heracles = new Hero('Heracles', 20, 6, 'heracles.svg');
$bird1 = new Monster('Bird', 25, 12, 'bird.svg');
$bird2 = new Monster('Bird', 25, 12, 'bird.svg');
$bird3 = new Monster('Bird', 25, 12, 'bird.svg');

// $sword = new Weapon();
// $heracles->setWeapon($sword);

$shield = new Shield();
$heracles->setShield($shield);

$birds = [$bird1, $bird2, $bird3];
$arena = new Arena($heracles, $birds, 10);

$heracles->setX(7);
$heracles->setY(5);

$bird1->setX(2);
$bird1->setY(3);

$bird2->setX(7);
$bird2->setY(2);

$bird3->setX(9);
$bird3->setY(6);

$bow = new Weapon(5, 8, "bow.svg");
$heracles->setWeapon($bow);


/** FIN DE LA ZONE A MODIFIER **/
/** ⛔ Ne pas modifier en dessous ⛔ **/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heracles Labours</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Heracles vs Stymphalian Birds</h1>
    </header>
    <main>
        <div class="fighters">
            <a href="#hero">
                <figure class="heracles">
                    <img src="<?= $heracles->getImage() ?>" alt="heracles">
                    <figcaption><?= $heracles->getName() ?></figcaption>
                </figure>
            </a>
        </div>

        <?php include 'map.php' ?>

    </main>

    <?php include 'inventory.php' ?>
</body>

</html>