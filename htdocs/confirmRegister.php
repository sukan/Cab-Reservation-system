<?php
    $con = mysqli_connect("localhost","root","", "cab_reservation");

    if( mysqli_connect_errno() )
    {
        echo "Failed to connect to MySql:". mysqli_connect_error();
    }
    else
    {
        echo "Sucsessfuly conncted";

    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Confirm Register </title>
</head>
<link href="home2%20css.css" type="text/css" rel="stylesheet">
<body>

    <section >
        <div style="background-color: #333333;opacity: 40;width: 100%;height: 100px"> <img src="LOgo.png">


        </div>

        <br/>

        <div style="width: 100%;height:50px">


            <ul>
                <li><a class="active" href="home2.html">Home</a></li>
                <li><a href="#news">GoRide</a></li>
                <li><a href="Register%20as%20Driver.html">GoDirive</a></li>
                <li><a href="RegisterDelivery.html">GoDelivery</a></li>
                <li><a href="ContactUs.html">Contact Us</a></li>
                <li><a href="AboutUS.html">About Us</a></li>

            </ul>


        </div>

        <br/>
        <div style="width: 100%;height: 200px;background-color: #bbbbbb">
        <?php
        if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['nic']) && isset($_POST['telephone']) && isset($_POST['state']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) )
        {
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $nic = $_POST['nic'];
            $telephone = $_POST['telephone'];
            $state = $_POST['state'];
            $user = $_POST['username'];
            $password =$_POST['password'];
            $email = $_POST['email'];
        }

        $sql = "INSERT INTO user1(fname,lname,nic,telephone,state,username,password,email)
          VALUES('$firstname','$lastname','$nic','$telephone','$state','$user','$password','$email')";

        if(!mysqli_query($con,$sql))
        {
            die('Error : '.mysqli_error($con));
        }
        else
        {
            echo "<h1 align='center'>"."Register Successfull"."</h1>";

        }

        ?>


             <a href="LOGIN%20driver.html"> Please Login</a>


        </div >

    </section>







    <footer class="f">All Right Reserved :::    Sri lanka institiute of Information Techonology     :::First Year Final Project   :: Group 2.2</footer>



</body>
</html>