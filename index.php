<html>
<head>
<title>Fanta Feel the Fun!</title>
</head>
<body>
<?php
include 'creds.php';

// Create connection
$conn = new mysqli(servername, username, password, dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM FeelTheFun WHERE `id`='.rand(1,3).' LIMIT 1';
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
    while($row = $result->fetch_assoc()){
        echo "<h1 style=\"color:". $row["colour"] . "\";> Fanta Feel the Fun!!</h1>";
        echo "<br/>";
        echo "<img src=\"" . $row["image"] . "\" atl=\"can\">";
        echo "<br />";
    }
} else {
    echo "0 results.";
}
$conn->close();
?>
</body>
</html>
