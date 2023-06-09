<?php

$username= $_POST['name'];
$password= $_POST['password'];
$email= $_POST['email'];
$mobile= $_POST['phone'];

echo $username;


$conn =  new mysqli('localhost','root','','online train');

if($conn->connect_error)
{
    alert("Connection Not established");
}
else
{
    $dup="SELECT * FROM register WHERE Email='$email'";
    $result= mysqli_query($conn, $dup);
    $num=mysqli_num_rows($result);

    if($num>0)
    {
        echo "Wrong password";
        header("location: error/error1.html");
    }
    else{
        $stmt= $conn->prepare("insert into register(Name,  Email, Mobile, Password) values(?,?,?,?)");
        $stmt->bind_param("ssss", $username, $email,   $mobile, $password,);
        $stmt->execute();
        echo "Data Inserted Successfully!";
        header("location: login.html");
        $stmt->close();
        $conn->close();
    }
}

?>