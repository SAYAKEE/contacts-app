<?php

include("mySQL.php");

$db = connect();

$id = $_GET["id"];

$statement = $db->query("SELECT * FROM people WHERE id = $id");
$contact = $statement->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .wrap{
            width: 100%;
            max-width: 450px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <header class="text-center">
        <h1>CONTACTS</h1>
        <hr>
    </header>
    <main class="wrap">
        <h4 class="text-center">Edit <?=$contact->name?>'s Contact</h4>
        <hr>
        <form action="update.php" method="post">
            <input type="hidden" name=id value="<?=$contact->id?>">
            <label for="names" class="form-label">Name</label>
            <input type="text" id="names" name="name" class="form-control" value="<?=$contact->name?>">
            <br>
            <label for="ph" class="form-label">Phone Number</label>
            <input type="text" id="ph" name="phone" class="form-control" value="<?=$contact->phone?>">
            <hr>
            <input type="submit" value="Create" class="btn btn-light w-100">
        </form>
        <button class="btn btn-light w-100 mt-2">
            <a href="index.php" class="">Cancel</a>
        </button>
    </main>
    <hr>
    <footer class="container text-center">
        2023 Rights &checkmark; bla la laala Blala blaa la laa
    </footer>
</body>
</html>