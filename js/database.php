<?php

$obj=$_GET['obj'];
$conn=new mysqli('localhost','root','','mydb');
$que="insert into contact(data) values('$obj')";
if($conn->query($que))
{
    echo true;
}
else
{
    echo false;
}
$conn->close();
?>