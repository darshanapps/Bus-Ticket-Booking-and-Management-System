<?php

$id=uniqid();
$name= $_POST['Name'];
$email= $_POST['Email'];
$phone= $_POST['Phone'];
$city= $_POST['City'];
$bno= $_POST['bno'];
$Date= $_POST['Date'];
$seat= $_POST['seat'];
$amt= $_POST['amt'];
$mode= $_POST['mode'];


$conn =  new mysqli('localhost','root','','online train');

if($conn->connect_error)
{
    alert("Connection Not established");
}
else
{

        $stmt= $conn->prepare("insert into booking(ID, Name,  Email, Phone, City, T_no, Date, Seat, Amount, mode) values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss", $id, $name, $email,  $phone, $city, $bno, $Date, $seat, $amt, $mode);
        $stmt->execute();
        echo "Data Inserted Successfully!";
        header("location: error/book.html");
        $stmt->close();
        $conn->close();
}

?>