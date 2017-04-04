<!DOCTYPE html>
<?php
    $resultFromValidation="";
    if(isset($_GET['r'])){
        $resultFromValidation="Invalid Username Or Password !!!";
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Attendance</title>
    </head>
    <style>
        body{
            background: black;
        }
        form{
            position: absolute;
            top: 146px;
            left: 800px;
            border: 3px solid black;
            padding: 30px 30px;
            width: 30%;
        }
        input[type=text],input[type=password]{
            padding: 10px 10px;
            margin: 10px 0px;
            width: 100%;
            font-size: 20px;
            font-family: cursive;
            background: black;
            color: white;
            display: inline-block;
            border: 0px;
            border-bottom: 1px solid whitesmoke;
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
            font-family: cursive;
            color: black;
            cursor: pointer;
        }
        button{
            padding: 10px 10px;
            margin: 30px 35px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: lightgray;
            font-size: 15px;
            font-family: cursive;
            color: black;
            cursor: pointer;
            position: absolute;
            top: 317px;
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
        <form action="validate.php" method="POST" autocomplete="off">
            <input type="text" name="username" placeholder="Enter Username" required="true"></input>
            <input type="password" name="password" placeholder="Enter Password" required="true"></input>
            <input type="submit" value="Log In"></input>
        </form>
        <a href="https://www.google.com"><button>I Am A Student !</button></a>     
    </body>
</html>
