<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "annecharlottelucas_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
$user = "annecharlottelucas";
$password = "08c91f0ff690677f4e839d460d76d0a4";

$db = new PDO(
        $connexionString,
        $user,
        $password
);

var_dump($db);

require "get_all_users.php";