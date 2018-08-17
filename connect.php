<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$dbservername = "localhost";
$dbusername = "username";
$dbpassword = "password";
$dbname = "myDB";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
if ($conn->query($sql) === TRUE) {
    echo "new record added successfully";
} else {
    echo "Error : ".$sql."<br>". $conn->error;
}
$conn->close();
?>