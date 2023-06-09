<?php

    date_default_timezone_set('Asia/Kolkata');
    $username=$_POST['username'];
    $password=$_POST['password'];

    $date=date("Y-M-D");
    $time=date("h:i:sa");

    $conn= new mysqli('localhost','root','','online train');

    if(!$conn)
    {
        echo "Connection error";
    }
    else
    {
        $stmt2=$conn->prepare("INSERT INTO history(Date,Time) values(?,?)");
        $stmt2->bind_param('ss',$date,$time);
        $stmt2->execute();

        $stmt="Select * from admin where username='$username' AND password='$password'";
        $result=mysqli_query($conn,$stmt);
        $num=mysqli_num_rows($result);

        if($num==1)
        {
           
            header("location: Admin Panel/dashboard.php");
        }
        else{
            $_SESSION['status']="Wrong password" ;
            header("location: error/error1.html");
        }
    }
?>