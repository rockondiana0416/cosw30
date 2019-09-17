<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tuition Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="tuition.css" type="text/css">
    </head>

<?php

$resident = $_POST['resident'];
$units = $_POST['units'];
$health = $_POST['health'];
$services = $_POST['services'];
$parking = $_POST['parking'];

echo "<h1>Your Tuition Calculator Results:</h1>\n";

$tuition_total = ($resident * $units) + $health; 
echo "<p>Cost of tuition: $$tuition_total</p>\n"; 
echo "<p>College Services Card: $$services</p>\n";
echo  "<p>Parking: $$parking</p>\n";

$total_registration_cost = $tuition_total + $services + $parking;

echo "<h4>Total Registration Cost: $$total_registration_cost</h4>\n";

$scholarship_aid = rand(1 , $total_registration_cost);

echo "<p>Scholarship Award: $$scholarship_aid</p>\n";

echo "<h3>Total Tuition Balance Due: $$scholarship_aid</h3>"

?>

</html>