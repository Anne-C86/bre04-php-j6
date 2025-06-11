<?php


require "connexion.php";

$query = $db->prepare("SELECT * FROM users JOIN address ON address.id = users.address");

$query->execute();
$users_with_addresses = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($users_with_addresses);

