<?php

function connect()
{
    $database = new PDO("mysql:dbhost=localhost;dbname=contacts;", "root", "",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);
    return $database;
}