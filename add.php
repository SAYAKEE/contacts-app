<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header class="text-center container">
        <h1>CONTACTS</h1>
        <hr>
        <!-- <button class="btn btn-info w-100"><a href="add.php">+ ADD NEW CONTACT</a></button> -->
    </header>
    <main class="container">
        <h4>Create New Contact</h4>
        
        <form action="create.php" method="post">
            <label for="names" class="form-label">Name</label>
            <input type="text" id="names" name="name" class="form-control">
            <br>
            <label for="ph" class="form-label">Phone Number</label>
            <input type="text" id="ph" name="phone" class="form-control">
            <hr>
            <input type="submit" value="Create" class="btn btn-light w-100">
        </form>
        <button class="btn btn-light w-100 mt-2">
            <a href="index.php" class="text-link">Cancel</a>
        </button>
    </main>
    <hr>
    <footer class="container text-center">
        2023 Rights &checkmark; bla la laala Blala blaa la laa
    </footer>
</body>
</html>