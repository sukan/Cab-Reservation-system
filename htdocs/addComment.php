<!DOCTYPE html>
<html>
<head>
    <title> Cab Reservation System</title>
</head>

<body>
<div align="center">

    <h4>
        <?php
        if(isset($_POST["regNO"]) && isset($_POST["fullname"]) && isset($_POST["comment"])){

            $regNumber = $_POST["regNO"];
            $name = $_POST["fullname"];
            $comment= $_POST["comment"];

        }
        else{


            $error = "One or more fields are not filled";
            echo $error;
        }
        //insert data to database
        if(isset($_POST["btnInsert"])) {

            $insertString = " INSERT INTO LIBRAR_COMMENT VALUES ('$regNumber','$name','$comment')";

            if (!mysql_query($insertString)) {

                die('Error :' . mysql_error());
            } else {
                echo '<br/>';
                echo '1 Recoed Added...';

            }
        }
           else if(isset ($_POST["btnUpdate"])){

             $updateString = "UPDATE LIBRARY_COMMENT SET stdName= '$name', comment='$comment' WHERE regNo='$regNumber'";

             if (!mysql_query($updateString)){


                 die('Error : '.mysql_error());
             }
             else{

                 echo "<br/>";
                 echo "1 recoard Updated";
             }

            }

            else if(isset($_POST['delete'])){
               $updateString = "DELETE FROM LIBRARY_COMMENT WHERE regNo = '$regNumber'";

               if (!mysql_query($updateString)){

                   die('Error :'. mysql_error());
               }
               else{

                   echo '<br/>';
                   echo '1 Recoard Deleted...';
               }

            }



        ?>
        <hr/>
    </h4>

</div>

</body>
</html>
