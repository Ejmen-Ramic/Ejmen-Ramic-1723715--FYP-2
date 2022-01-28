<?php 
$servername = "localhost";
$dbname = "donations";
$username = "root";
$password = "";

$target = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO dons (amount,code)
VALUES ('".$_GET['amount']."','".$_GET['name']."')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
    $message = "THANKS ".$_GET['name']." FOR DONATAING ".$_GET['amount'];
} else {
    $message = "NOOOOOOO";
  //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
die();
?>