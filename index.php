<!DOCTYPE html>


<?php

    $resultFromValidation="";
    $conn=new mysqli('localhost', 'root', '', 'online_attendance_system') or die("server Is Down");
    
    //validating login details here
    if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
        
        $id=$conn->real_escape_string($_POST['username']);
        $password=$conn->real_escape_string($_POST['password']);
        $query="select `first_name`, `last_name` from `login_details` where id='$id' and password='$password'";
        
        if($result=$conn->query($query)){ 
            if($result->num_rows===1){
                header("Location: https://www.google.com");
            }else{
                $resultFromValidation="Invalid Username Or Password !!!";
            }
        }else{
            //query did not run
            die('Server is Down');
        }
        
    }
    
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Attendance System</title>
    </head>
    <style>
        body{
            background: black;
        }
        form{
            position: absolute;
            top: 145px;
            left: 800px;
            padding: 30px 30px;
            width: 30%;
        }
        input[type=text],input[type=password]{
            padding: 10px 10px;
            margin: 10px 0px;
            width: 100%;
            font-size: 20px;
            background: black;
            color: white;
            display: inline-block;
            border: 0px;
            border-bottom: 1px solid darkgray;
            box-sizing: border-box;
        }
        
        input[type=text],input[type=password]:focus{
            outline: none;
        }
        
        input[type=submit]{
            width: 30%;
            padding: 10px 10px;
            margin: 30px 20px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: gray;
            font-size: 15px;
            color: black;
            cursor: pointer;
        }
        button{
            padding: 10px 10px;
            margin: 30px 35px;
            border: 3px solid red;
            border-radius: 5px;
            background-color: lightgray;
            font-size: 15px;
            color: black;
            cursor: pointer;
            position: absolute;
            top: 300px;
            left: 985px;
            width: 200px;
        }
        input[type=submit]:hover,button:hover{
            opacity: 0.5;
        }
    </style>    
    
    <body>
        <img src="res/frontPageLogo2.png" alt=" Attendance Matters " style="margin-left: 5%;margin-top: 10%"></img>
        <br/>
        <div style="color: red;position: absolute;top: 150px;left: 915px;"><?php echo $resultFromValidation;?></div>
        <form action="index.php" method="POST" autocomplete="off">
            <input type="text" name="username" placeholder="Enter Username" required="true"></input>
            <input type="password" name="password" placeholder="Enter Password" required="true"></input>
            <input type="submit" value="LOG IN"></input>
        </form>
        <a href="https://www.google.com"><button>I AM A STUDENT !</button></a>     
    </body>
    
</html>
