<?php
    $servername = "localhost";
    $username = "root";
    $password  = "";
    $dbName = "managment_school";

    //create connection

    $conn = new mysqli($servername , $username , $password, $dbName);
    //echo "connection succesful";
    //check connection

    if($conn -> connect_error)
    {
        die("connection failed .." .$conn -> connect_error);
    }


?>