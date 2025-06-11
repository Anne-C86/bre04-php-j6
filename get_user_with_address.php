<?php
require "connexion.php";

$query = $db -> prepare("SELECT * FROM users JOIN address ON address.id = users.address WHERE users.id=:id");
$parameters = [
    "id" => $_GET["id"]
];
$query->execute($parameters);
$user_with_address = $query->fetch(PDO::FETCH_ASSOC);
var_dump($user_with_address);
