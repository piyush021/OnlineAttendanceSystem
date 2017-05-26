<?php

    //require this file on every page
    //use $connection variable directly to perform databse operations
    $host="localhost";
    $username="root";
    $password="";
    $database="online_attendance_system";
    //connect to database
    $connection = new mysqli($host,$username,$password,$database);
    if($connection==FALSE){
        die("Unable To Connect To Server.");
    }

?>
