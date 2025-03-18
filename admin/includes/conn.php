<?php
$servername = "yanshuptl.mysql.database.azure.com";
$username = "username@yanshuptl";
$password = "";
$dbname = "votesystem";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
