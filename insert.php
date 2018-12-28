<?php
require('dbcon.php');

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$comments = $_POST['comments'];

$sql = "INSERT INTO user(fname,lname,email,password,comments)
        VALUES ('$fname','$lname','$email','$password','$comments');";

//echo $sql;

if ($db->query($sql)){
    echo "Inter Success";
    header('Location:index.php');
}else{
    die('Insert Fail');
}