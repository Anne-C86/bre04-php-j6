<?php

$query = $db ->prepare("SELECT * FROM users");
$parameters = [

];
$query->execute($parameters);

var_dump($query);