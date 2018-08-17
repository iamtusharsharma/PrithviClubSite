<?php
$connect=mysqli_connect("localhost","root","","mydb");
$data=json_decode(file_get_contents("php://input"));
if (!empty(count($data)>0)) {
    $name=mysqli_real_escape_string($connect,$data->name);
    $email=mysqli_real_escape_string($connect,$data->email);
    $message=mysqli_real_escape_string($connect,$data->message);
    $query="INSERT INTO contact(name,email,message) VALUES ('$name','$email','$message')";
    if(mysqli_query($connect,$query))
    {
        echo "Query Entered";
    }
    else
    {
        echo "Failed Due To Some Exceptions";
    }
    
}
else
{
    echo "Failed";
}
$connect->close();
?>