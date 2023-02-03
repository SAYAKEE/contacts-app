<?php

include("mySQL.php");

$db = connect();

$statement = $db->query("SELECT * FROM people");

$contacts = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header class="text-center container">
        <h1>CONTACTS</h1>
        <hr>
        
    </header>
    <main class="container text-center">
        <table class="table table-striped table-border border-3 table-hover">
            <thead>
                <th>Name</th>
                <th>Phone  Number</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact) : ?>
                    <tr>
                        <td><?= $contact->name ?></td>
                        <td><?= $contact->phone ?></td>
                        <td>
                            <a href="edit.php?id=<?=$contact->id?>">Edit</a>
                            <a href="delete.php?id=<?=$contact->id?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn btn-secondary bg-light w-100"><a href="add.php">+ ADD NEW CONTACT</a></button>
    </main>
    <hr>
    <footer class="container text-center">
        2023 Rights &checkmark; bla la laala Blala blaa la laa
    </footer>
</body>
</html>