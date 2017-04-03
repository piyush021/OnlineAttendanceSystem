<!DOCTYPE html>
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
            top: 110px;
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
        input[type=text],input[type=password]:focus{
            outline: none;
        }
        input[type=submit]:hover,button:hover{
            opacity: 0.5;
        }
    </style>    
    <body>
        <img src="src/frontPageLogo2.png" alt=" Attendance Matters " style="margin-left: 5%;margin-top: 10%"></img>
        <br/>
        <form action="https://www.google.com">
            <b>Username</b><input type="text" name="username" placeholder="Enter Username" required="true"></input>
            <b>Password</b><input type="password" name="password" placeholder="Enter password" required="true"></input>
            <input type="submit" value="Log In"></input>
        </form>
        <a href="https://www.facebook.com"><button>I Am A Student !</button></a>     
    </body>
</html>
