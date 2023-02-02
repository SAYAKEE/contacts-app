<?php

include("mySQL.php");

$db = connect();

$name = $_POST["name"];
$phone = $_POST["phone"];

$query = "INSERT INTO people (name, phone) VALUES (:name, :phone)";

$statement = $db->prepare($query);
$statement->execute([":name" => $name, ":phone" => $phone]);

header("location: index.php");