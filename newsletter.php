<?php
$email=$_POST['subscribe'];
$dbservername = "localhost";
$dbusername = "username";
$dbpassword = "password";
$dbname = "myDB";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO newsletter (mail) VALUES ('$email')";
if ($conn->query($sql) === TRUE) {
    echo "subsscribed successfully";
} else {
    echo "Error : ".$sql."<br>". $conn->error;
}
$conn->close();
?>