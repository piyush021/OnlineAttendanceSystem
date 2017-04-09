<!DOCTYPE html>

<?php
//validating login details here
$resultFromValidation = "";
$conn = new mysqli('localhost', 'root', '', 'online_attendance_system') or die("server Is Down");

if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    $id = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $query = "select `first_name`, `last_name` from `login_details` where id='$id' and password='$password'";

    if ($result = $conn->query($query)) {
        if ($result->num_rows === 1) {
            header("Location: homepageTeacher.php");
        } else {
            $resultFromValidation = "Invalid Username Or Password !!!";
        }
    } else {
        //query did not run
        die('Server is Down');
    }
}
?>


<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Attendance System</title>
    </head>

    <style>
        /*for desktop browsers*/
        body{
            background: black;
        }
        img{
            width: 50%;
            float: left;
            margin: 5%;
            margin-top: 10%;
        }
        form{
            width: 30%;
            float: right;
            margin: 5%;
            padding-top : 2%;
            margin-top: 10%;
            font-size: 0;
        }
        input[type=text],input[type=password]{
            width: 100%;
            /* 1wv=1% of screen width 
               normal % are not woking here */
            margin: 0.5vw;
            padding: 1vw;
            font-size: 1.5vw;
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
            padding: 1vw;
            margin: 3vw;
            margin-top: 2vw;
            border: 0.5vw solid black;
            border-radius: 1vw;
            background-color: gray;
            font-size: 1vw;
            font-weight: bold;
            color: black;
            cursor: pointer;
        }
        input[type=button]{
            width: 40%;
            padding: 1vw;
            border: 0.5vw solid black;
            border-radius: 1vw;
            background-color: darkseagreen;
            font-size: 1vw;
            font-weight: bold;
            color: black;
            cursor: pointer;
        }
        input[type=submit]:hover,button:hover{
            opacity: 0.5;
        }
        
        .result{
            color: red;
            margin-left: 25%;
            font-size: 1vw;
        }

        /*for mobiles*/
        @media only screen and (max-width: 768px){
            body{
                background: black;
            }
            img{
                width: 90%;
                float: left;
                margin: 5%;
                margin-top: 10%;
            }
            form{
                width: 90%;
                float: left;
                margin: 5%;
                padding-top : 2%;
                font-size: 0;
            }
            input[type=text],input[type=password]{
                width: 100%;
                /* 1wv=1% of screen width 
                   normal % are not woking here */
                margin: 2vw;
                padding: 2vw;
                font-size: 5vw;
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
                padding: 2vw;
                margin: 7vw;
                border: 0.5vw solid black;
                border-radius: 3vw;
                background-color: gray;
                font-size: 4vw;
                font-weight: bold;
                color: black;
                cursor: pointer;
            }
            input[type=button]{
                width: 50%;
                padding: 2vw;
                border: 0.5vw solid black;
                border-radius: 3vw;
                background-color: darkseagreen;
                font-size: 4vw;
                font-weight: bold;
                color: black;
                cursor: pointer;
            }
            input[type=submit]:hover,button:hover{
                opacity: 0.5;
            }
            
            
            .result{
                color: red;
                margin-left: 15%;
                font-size: 5vw;
            }


        }

    </style>    

    <body>
        <img src="res/frontPageLogo.png" alt=" Attendance Matters " ></img>
        <form action="index.php" method="POST" autocomplete="off">
            <div class="result" ><?php echo $resultFromValidation; ?></div>
            <input type="text" name="username" placeholder="Enter Username" required="true"></input>
            <input type="password" name="password" placeholder="Enter Password" required="true"></input>
            <input type="submit" value="LOG IN"></input>
            <input type="button" onclick="location.href = 'homepageStudent.php'" value="I AM A STUDENT !"></input>
        </form>
    </body>

</html>
