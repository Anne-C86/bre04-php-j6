<?php
require "../connexion.php";
//echo $_POST["street"];
print_r($_POST);
$street = $_POST["street"];
$city = $_POST["city"];
$zipcode = $_POST["zipcode"];

$query = $db -> prepare("INSERT INTO address (street, zipcode, city) values (:street, :zipcode, :city)");
$parameters = ["street" => $street, "zipcode" => $zipcode, "city" => $city];
$query->execute($parameters);

?>