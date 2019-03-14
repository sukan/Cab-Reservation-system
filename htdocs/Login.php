<?php
ob_start();
session_start();
include('db_connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>

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
            <li><a href="#contact">GoDelivery</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">About Us</a></li>

        </ul>


    </div>
    <br/>



</section>



<div style="width: 100%;height: 300px;">

    <form method="post" action="<?php echo $PHP_SELF;?>"

    <table align="center" style="background-color: yellow;margin-top: 100px">
        <tr>
            <td style="color: darkblue;font-size: large;font-family: Sans"> Email</td>
            <td> <input name="email" type="email" placeholder="example@yourmail.com"></td>

        </tr>
        <tr>
            <td style="color: darkblue;font-size: large;font-family: Sans"> Password</td>
            <td> <input name="pwd" type="password"></td>
        </tr>
        <tr>
            <td> <input type="button" value="Login" name="Login"></td>
            <td> <input type="reset"></td>


        </tr>
    </table>





</div>

<br>
<br>


<footer class="f">All Right Reserved :::    Sri lanka institiute of Information Techonology     :::First Year Final Project   :: Group 2.2</footer>




</body>
</html>>