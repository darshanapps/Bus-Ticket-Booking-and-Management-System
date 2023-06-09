<html>
    <head>
        <title>Tourism managemnet </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width , initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/book.css">
        <link rel="stylesheet" type="text/css" href="css/Table.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/form1.css"> -->
        <link rel="stylesheet" href="css/from.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="icon" href="res/icon2.jpg">
        
    </head>

    

    <body>
        <div class="container">
            <div class="navbar">
                <img src="res/logo11.png" alt="header_logo" class="logo" width="5px" height="100px">
                <nav>
                    <ul id="menuList">
                        <li><a class="active" href="Booking.php">Booking</a></li>
                       
                        <li><a href="Feedback.html">Feedback</a></li>
                        <li><a href="Homepage.html">Log out</a></li>
                    </ul>
                </nav>
                <img src="res/nav.png" alt="" class="menu-icon" onclick="togglemenu()">
                <!----------------------------------------------------------------------------------------->
                <script>
                    var menuList=document.getElementById("menuList");

                    menuList.style.maxHeight="0px";

                    function togglemenu(){
                        if( menuList.style.maxHeight=='0px')
                        {
                            menuList.style.maxHeight="200px";
                        }
                        else
                        {
                            menuList.style.maxHeight="0px";
                        }
                    }
                </script>
            </div>
 <!---------------------Bg image-------------------------------------------------------------------->
                <div class="htitle">
                    <h1>Booking page</h1>
                </div>
                <div class="dest">
                    <form action="" method="POST">
                    <input type="text" name="source" placeholder="Source">
                    <center><label for="">   To   </label></center>
                    <input type="text" name="destination" placeholder="Destination"><br>
                    <br>
                    <input type="submit">
                    </form>
                </div>

                <div class="Tabledata" style="overflow-x:auto;">
                
                <table>
                    <tr>
                        <th> Train no</th>
                        <th> Train Name </th> 
                        <th> Arrival time</th> 
                        <th> Source</th> 
                    </tr>
                    <?php

                        if(isset($_POST['source'])&& $_POST['destination'] )
                        {

                        $source=$_POST['source'];
                        $destination=$_POST['destination'];

                        $conn= new mysqli('localhost','root','','online train');

                        if(!$conn)
                        {
                            die("Sorry we failed to connect :". mysqli_connect_error());
                        }
                        else{
                            
                        }

                        $sql = "SELECT T_Number, T_Name, Time, Source from train Where Source='$source' And Destination='$destination';";
                        $result= mysqli_query($conn, $sql);
                        $num=mysqli_num_rows($result);

                        if($num!=0)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>".$row['T_Number']."</td><td>".$row['T_Name']."</td><td>".$row['Time']."</td><td>".$row['Source']."</td></tr>";
                            }
                        }
                    }
                        ?>
                </table>
            </div>
                

                <div class="form1">
                <form action="bookinginsert.php" method="POST">
                    <label for="fname">Full Name</label>
                    <input type="text" id="fname" name="Name" placeholder="Your name..">
                
                    <label for="lname">E-mail</label>
                    <input type="Email" id="lname" name="Email" placeholder="">

                    <label for="fname">Phone number</label>
                    <input type="text" id="fname" name="Phone" placeholder="">
                
                    <label for="lname">City</label>
                    <input type="text" id="lname" name="City" placeholder="">

                    <label for="lname">Train ID</label>
                    <input type="text" id="lname" name="bno" placeholder="">
                
                    <label for="lname">Date</label>
                    <input type="date" id="date_picker" name="Date" placeholder="">
                    <br><br>

                    <script type="text/javascript">
                            function amountset()
                            {
                                var ss=document.getElementById('s').value;
                                console.log(ss);
                                var ssv=parseFloat(ss);
                                var amt=ssv*500;
                                document.getElementById('amount').value=amt;
                            }

                                // function amountset()
                                //  {
                                //     var aa=document.getElementById('a').value;
                                //      var av=parseFloat(aa);
                                //     var amt= av*1000;
                                //     document.getElementById('show').value=amt;
                
                                //  }
                 </script>

                    <label for="lname">No. of Seats</label>
                    <input type="number"  name="seat" id="s" placeholder="" onchange="amountset()">

                        <label for="">Amount</label>

                        <input type="text" placeholder="" id="amount" name="amt" readonly>
                        <!-- <input type="text" placeholder="" name="amt" > -->
                        <br><br>
                    <label for="">Mode of Payment</label><br><br>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="UPI">UPI (travelgotickets@ybl)</label><br>

                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="">Cash</label><br>
                    <br>
                    <input type="text" name="mode" placeholder="Enter your UPI Transcation id" hidden="hidden">

                    <input type="submit" value="Submit" >
                  </form>
            </div>

                

                
               
                   

</div>
<!------------------footer design----------------------------------------------->
            <footer class="footer">
                <div class="container1">
                    <div class="row1">
                        <div class="footer-col">
                            <h4>About TravelGO</h4>
                            <ul>
                                <li><a href="About.html">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Offers</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Info</h4>
                            <ul>
                                <li><a href="#">T & C</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="Admin login.php">Admin Panel</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Travel Place</h4>
                            <ul>
                                <li><a href="#">Maharashtra</a></li>
                                <li><a href="#">Gujrat</a></li>
                                <li><a href="#">Punjab</a></li>
                                <li><a href="#">Karnatak</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Follow us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <h5 style="color: aliceblue;">Copyright @ 2021-22</h5>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </footer>
       
    </body>
</html>