<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="icon" href="res/tablogo.jpg">
    <link rel="stylesheet" href="css/adminlog.css">
    <title>Admin login</title>
</head>
<body>
    
    <div class="loginmain">
        <div class="rowl">
            <div class="loginpanel">
                <?php
                    if(isset($_SESSION['status']))
                    {
                        $show=$_SESSION['status'];
                        echo "<div class='alert2'>
                        <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                        <center><strong>'$show'</strong> </center>
                        </div>";
                        unset($_SESSION['status']);
                    }
                ?>
                <h1>Log In</h1>
                <form action="adminverify.php" method="post">
                     <div class="box">
                        <i class="fa fa-envelope"></i>
                        <input type="text" name="username" id="email" placeholder="Enter Your Email">
                     </div>

                    <div class="box">
                        <i class="fa fa-key"></i>
                         <input type="password" name="password" id="password" placeholder="Enter Your Password">
                     </div>

                <button class="btn">Sign In</button>
                     <!-- <div class="box1">
                         <h3>New User, <a href="Register.html">Register</a></h3>
                     </div> -->

            </form>
            </div>

        </div>
    </div> 
</body>
</html>