<?php
session_start();

$_username = $_POST["username"];
$_password = $_POST["password"];

include 'db.php';


$sql = 'SELECT * FROM `users` WHERE (username = "' . $_username . '" or phone = "' . $_username . '" or email = "' . $_username . '")  and password ="'.$_password.'";';


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION["isLogin"] = true;
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["priv"] = $row["priv"];
    }
}


if ($result->num_rows > 0) {
    
    
}else{
    $_SESSION["isLogin"] = false;
}
  
  $conn->close();
  
  header("Location: index.php");
  die();
