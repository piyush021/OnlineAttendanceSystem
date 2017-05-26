<?php

    //require this file on every page
    //use $connection variable directly to perform databse operations
    $host="localhost";
    $username="root";
    $password="";
    $database="online_attendance_system";
    //connect to database
    $connection = @new mysqli($host,$username,$password,$database);
    //check if error occurred
    //connect_errno will be 0 if no ecrror occurred
    if($connection->connect_errno){
        die("Server is down.");
    }

?>
