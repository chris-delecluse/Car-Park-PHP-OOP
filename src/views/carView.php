<?php
require "../controllers/CarController.php";

$home = "../../index.php";
$carPage = "carView.php";

$title = "Car";
$linkCSS = "../../styles/table.css";

require "templates/head.php";
require "navigation.php";

echo "<h1>Car page !</h1>";

?>

<table>
    <thead>
        <tr>
            <th>Label</th>
            <th>State</th>
            <th>Model</th>
            <th>Color</th>
            <th>Registration date</th>
            <th>Date difference</th>
            <th>Mileage</th>
            <th>Weight</th>
            <th>Registration plate</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cars as $item) {
            echo $item->display();
        } ?>
    </tbody>
</table>

<?php

require "templates/footer.php";
