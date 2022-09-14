<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include "vendor.php";


use classes\CreateChicken,
    classes\CreateCow,
    classes\Farm;



$cow = new CreateCow(10);
$chicken = new CreateChicken(20);


$farm = new Farm(
    $cow->getAnimals(),
    $chicken->getAnimals()
);


echo $farm->CountTypeAnimals();
echo  $farm->getProductAllAnimal();


$farm->addCow($cow->updateCountAnimals());
$farm->addChicken($chicken->updateCountAnimals(5));


echo $farm->countTypeAnimals();
echo  $farm->getProductAllAnimal();


