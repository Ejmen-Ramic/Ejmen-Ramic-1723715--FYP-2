<?php
session_start();

$_username = $_POST["username"];
$_password = $_POST["password"];
$_fullname = $_POST["fullname"];
$_phone = $_POST["phone"];
$_email = $_POST["email"];

include 'db.php';


$sql = "INSERT INTO `users`( `username`, `password`, `phone`, `email`, `fullname`) VALUES ('$_username','$_password','$_phone ','$_email','$_fullname')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["register"] = true;
  } else {
    $_SESSION["register"] = false;
  }


  
  $conn->close();
  
  header("Location: index.php");
  die();

  ?>
  
