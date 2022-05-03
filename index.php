<?php


$home = "index.php";
$car = "src/views/carView.php";

require "src/views/templates/head.php";
require "src/views/navigation.php";

echo "<h1>hello world</h1>";

$arr = [];

$pr = new Car($arr);

require "src/views/templates/footer.php";