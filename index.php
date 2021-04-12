<?php
require_once 'autoload.php';

use Entity\Ingredient;
use Entity\Pizza;

$ingredient = new Ingredient();
$ingredient->setName("Sauce Tomate");
$ingredient->setisAllergen(false);

$ingredient2 = new Ingredient();
$ingredient2->setName("Mozzarela");
$ingredient2->setisAllergen(true);

$pizza = new Pizza();
$pizza->setName('Margharita');
$pizza->setIngredients([$ingredient, $ingredient2]);
?>

<h1><?= $pizza->getName()?></h1>
<ul>
    <?php foreach ($pizza->getIngredients() as $ingredient) :?>
        <li><?= $ingredient->getName() ?> (Allergène ?
        <?= $ingredient->getisAllergen()? "Oui" : "Non"; ?>)
        </li>
    <?php endforeach; ?>
</ul>