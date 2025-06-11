<?php
require "../connexion.php";
//echo $_POST["street"];
//print_r($_POST);

$street = $_POST["street"];
$city = $_POST["city"];
$zipcode = $_POST["zipcode"];

$query = $db -> prepare("UPDATE address SET street= :street, city= :city, zipcode= :zipcode WHERE id= :id ");
$parameters = ["id" => $_POST['id'], "street" => $street, "zipcode" => $zipcode, "city" => $city];
$query->execute($parameters);

?>