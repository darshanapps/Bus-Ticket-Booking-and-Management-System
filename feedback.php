<?php

$name=$_POST['Name'];
$city=$_POST['City'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$subject=$_POST['Subject'];


$conn =  new mysqli('localhost','root','','online Train');

if($conn->connect_error)
{
    alert("Connection Not established");
}
else
{
    $stmt= $conn->prepare("insert into feedback(Name, Email, City, Phone, Subject) values(?,?,?,?,?)");
    $stmt->bind_param("sssds", $name,  $city, $email, $phone, $subject);
    $stmt->execute();
    echo '<script>alert("Feedback submitted Sucessfully")</script>';
    header("location:Feedback.html");
    $stmt->close();
    $conn->close();
}

?>