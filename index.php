<?php

require "vendor/autoload.php";

$title = "Home";

$home = "index.php";
$carPage = "src/views/carView.php";

require "src/views/templates/head.php";
require "src/views/navigation.php";

echo "<h1>hello world</h1>";

require "src/views/templates/footer.php";