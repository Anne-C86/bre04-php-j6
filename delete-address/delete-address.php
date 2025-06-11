<?php
require "../connexion.php";
//echo $_POST["street"];
//print_r($_POST);
$id = $_POST['id'];


$query = $db -> prepare("DELETE FROM address WHERE id= :id");
$parameters = ["id" => $id];
$query->execute($parameters);

?>