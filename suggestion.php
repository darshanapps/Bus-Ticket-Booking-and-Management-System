<?php

$name=$_POST['Name'];
$city=$_POST['City'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$suggest=$_POST['suggest'];
$subject=$_POST['Subject'];


$conn =  new mysqli('localhost','root','','online_bus');

if($conn->connect_error)
{
    alert("Connection Not established");
}
else
{
    $stmt= $conn->prepare("insert into suggestion(Name, City, Email, Phone, Resto, Address) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $name,  $city, $email, $phone, $suggest, $subject);
    $stmt->execute();
    echo "<script>alert('Feedback submitted Sucessfully')</script>";
    header("location: Suggestion.html");
    $stmt->close();
    $conn->close();
}

?>