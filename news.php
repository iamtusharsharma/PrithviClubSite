<?php
$connect=mysqli_connect("localhost","root","","mydb");
$data=json_decode(file_get_contents("php://input"));
$semail=mysqli_real_escape_string($connect,$data->semail);
if($semail=="")
{
    echo "Please enter correct email";
}
elseif (count($data)>0) {
    $query="INSERT INTO newsletter(mail) VALUES ('$semail')";
    if(mysqli_query($connect,$query))
    {
        echo "Subscribed successfully";
    }
    else
    {
        echo "error";
    }
    
}
$connect->close();
?>