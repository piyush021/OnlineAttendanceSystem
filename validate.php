<?php
    //require_once 'connectToDatabase.php';
    //not able to require because i need that $conn variable
    //table structure
    //database name online_attendance_system
    //table name login_details
    //table coloums           id        password        first_name       last_name
    //everything is working
    $conn=new mysqli('localhost', 'root', '', 'online_attendance_system') or die("server Is Down");
    if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
        //put real escape here
        $id=$_POST['username'];
        $password=$_POST['password'];
        $query="select `first_name`, `last_name` from `login_details` where id='$id' and password='$password'";
        if($result=$conn->query($query)){ 
            if($result->num_rows===1){
                die("logged in");
            }else{
                header('Location: index.php?r=""');
            }
        }else{
        
            echo $conn->error;
        }
    }
?>

