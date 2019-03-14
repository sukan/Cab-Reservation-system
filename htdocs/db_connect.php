<?php
//connect to the database


$mysql_host ="localhost";
$mysql_user = "root";
$mysql_pass = ""; //kalana


$mysql_db = "cab_reservation";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db)){

    die(mysql_error());

}
else{
    echo "Successfull Connected with cab_reservation Database";
}


?>