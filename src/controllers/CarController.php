<?php

use \models\classes\Car;
require "../models/interfaces/CarInterface.php";
require "../models/CarData.php";
require "../models/classes/Car.php";

$carData1 = array(
'label' => 'Audi',
'model' => 'TT',
'color' => 'Green',
'mileage' => 120000,
'weight' => 1.6,
'registrationNumber' => 'BE-VXV-975',
'registrationDate' => '1990-08-14'
);

$carData2 = array(
    'label' => 'Jaguar',
    'model' => 'Type E',
    'color' => 'Black',
    'mileage' => 220500,
    'weight' => 1.2,
    'registrationNumber' => 'BE-CCV-007',
    'registrationDate' => '1961-02-14'
);

$carData3 = array(
    'label' => 'Man',
    'model' => 'TGX',
    'color' => 'Gold',
    'mileage' => 343000,
    'weight' => 44.00,
    'registrationNumber' => 'DE-TYF-432',
    'registrationDate' => '2018-12-08'
);

$carData4 = array(
    'label' => 'Audi',
    'model' => 'A7',
    'color' => 'Grey',
    'mileage' => 148000,
    'weight' => 1.5,
    'registrationNumber' => 'FR-PRT-902',
    'registrationDate' => '2011-08-14'
);

$carData5 = array(
    'label' => 'VW',
    'model' => 'Polo',
    'color' => 'White',
    'mileage' => 78234,
    'weight' => 1.3,
    'registrationNumber' => 'BE-HJS-641',
    'registrationDate' => '2017-03-24'
);

$carData6 = array(
    'label' => 'Peugeot',
    'model' => '3008',
    'color' => 'Rouge',
    'mileage' => 199000,
    'weight' => 2.6,
    'registrationNumber' => 'FR-PLK-275',
    'registrationDate' => '2016-06-10'
);

$carData7 = array(
    'label' => 'Citroen',
    'model' => 'C3',
    'color' => 'Green',
    'mileage' => 245000,
    'weight' => 1.2,
    'registrationNumber' => 'DE-AGT-007',
    'registrationDate' => '2010-05-05'
);

$carData8 = array(
    'label' => 'VW',
    'model' => 'Caddy',
    'color' => 'Green',
    'mileage' => 120000,
    'weight' => 3.6,
    'registrationNumber' => 'BE-PLC-989',
    'registrationDate' => '2004-01-25'
);

$carData9 = array(
    'label' => 'Audi',
    'model' => 'A1',
    'color' => 'Blue',
    'mileage' => 12000,
    'weight' => 1.6,
    'registrationNumber' => 'FR-AZZ-075',
    'registrationDate' => '2021-11-29'
);

$cars = [];

$cars[] = new Car($carData1);
$cars[] = new Car($carData2);
$cars[] = new Car($carData3);
$cars[] = new Car($carData4);
$cars[] = new Car($carData5);
$cars[] = new Car($carData6);
$cars[] = new Car($carData7);
$cars[] = new Car($carData8);
$cars[] = new Car($carData9);
