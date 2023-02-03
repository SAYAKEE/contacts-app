<?php

include("mySQL.php");

$db = connect();

$id = $_GET["id"];

$statement = $db->query("DELETE FROM people WHERE id = $id");

header("location: index.php");