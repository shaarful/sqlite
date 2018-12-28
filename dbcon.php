<?php
$db = new SQLite3('db.sqlite');

if($db){
    $tableCreate = "CREATE TABLE IF NOT EXISTS user(
                      id INTEGER PRIMARY KEY,
                      fname CHARACTER(20),
                      lname CHARACTER(20),
                      email CHARACTER(25),
                      password CHARACTER(15),
                      comments TEXT)";
    $db->exec($tableCreate);
}else{
    die("Error in database connection!!!");
}