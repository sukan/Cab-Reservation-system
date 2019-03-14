<?php

require 'db_connect.php'

?>

<!DOCTYPE html>
<htmL>
<head>

<title>Cab Reservation Service</title>
<style type="text/css">

    th,td{
        padding-right: 40px;
        padding-left: 40px;
        height: 40px;

        }

</style>

</head>
<body>
<div align="center">
    <h2> Cooooments In Cab Reservation Service</h2>
    <table border="1">
        <tr>
            <th>Registraion Number</th>
            <th>Full Name</th>
            <th>Comment</th>
        </tr>
        <?php


        //select all data from the Canb Reservation System

        $selectString = "SELECT * FROM LIBRARY_cOMMENT";
        $comments = mysql_query($selectString);

        while($row = mqsql_fetch_array($comments)){
       ?>
        <tr>
            <td> <?php echo $row['regNo']; ?> </td>
            <td> <?php echo $row['stdName']; ?> </td>
            <td> <?php echo $row['comment']; ?> </td>
        </tr>
        <?php
        }
        ?>



    </table>


</div>



</body>

</htmL>
