<?php

use \models\classes\Car;
require "../models/interfaces/CarInterface.php";
require "../models/CarData.php";
require "../models/classes/Car.php";

$home = "../../index.php";
$car = "carView.php";

$carData = array(
    'label' => 'Audi',
    'model' => 'TT',
    'color' => 'Green',
    'mileage' => 120000,
    'weight' => 1.6,
    'registrationNumber' => 'BE-bcv-975',
    'registrationDate' => '1990-08-14'
);

require "templates/head.php";
require "navigation.php";

echo "<h1>Car page !</h1>";
$car = new Car($carData);
echo "<h2>$car->weight T</h2>";
echo "<h2>$car->color</h2>";

echo $car->dateDiff() . "<br>";

echo $car->checkFromCountry() . "<br>";
echo $car->checkMileage() . "<br>";

echo $car->checkCategory() . "<br>";
echo $car->checkIfAudi() . "<br>";


require "templates/footer.php";
