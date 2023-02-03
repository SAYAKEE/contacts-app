<?php

include("mySQL.php");

$db = connect();

$id = $_POST["id"];
$name = $_POST["name"];
$phone = $_POST["phone"];

$query = "UPDATE people SET name = :name , phone = :phone WHERE id = :id";

$statement = $db->prepare($query);
$statement->execute([
    ":id" => $id,
    ":name" => $name,
    ":phone" => $phone,
]);

header("location: index.php");