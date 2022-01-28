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
//echo "Connected successfully";

$sql = "SELECT * FROM $dbname.comps";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    $target = $row["target"];
} else {
    echo "0 results";
}


$currentDontations = 0;

$sql = "SELECT * from dons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $currentDontations = $currentDontations + $row["amount"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>


<html>

<head>

</head>

<body>

    <?php echo $currentDontations; ?>/ <?php echo  $target; ?>
    <div id="outerBar">
        <div id="innerBar">

        </div>
    </div>

    <form action="dontations.php" method="get">
        Name: <input type="text" name="name"><br>
        Amount: <input type="text" name="amount"><br>
        <input type="submit">
    </form>

    <style>
        #outerBar {
            width: 700px;
            height: 40px;
            background-color: lightgray;
        }

        #innerBar {
            width: 0;
            height: 100%;
            background-color: green;
        }
    </style>

    <script>
        setBar();

        function setBar() {
            var target = getTarget();
            var current = getCurrent();

            var percentage = 100 / target * current;

            document.getElementById("innerBar").style.width = percentage + "%";

        }

        function getCurrent() {
            var mc = <?php echo $currentDontations; ?>;
            return mc;
        }

        function getTarget() {
            var mt = <?php echo  $target; ?>;
            return mt;
        }
    </script>

</body>

</html>