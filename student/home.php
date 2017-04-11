<?php ?>

<html>
    <head>
        <title>Online Attendance System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>
        body{
            background: black;
        }
        img{
            width: 50%;
            margin: 5%;
            margin-top: 8%;
            float: left;
        }
        form{
            width: 30%;
            margin: 5%;
            margin-top: 10%;
            float: left;
        }
        select{
            padding: 1vw;
            margin-bottom: 5%;
            box-sizing: border-box;
            width: 75%;
            font-size: 1.5vw;
            border-radius: 1vw;
            border-color: darkseagreen;
            text-align-last: center;
            background: darkgray;
            cursor: pointer;

        }
        option{
            background: darkgray;
            color: black;
            font-size: 1.5vw;
            cursor: pointer;
            border-color: black;
        }
        input[type=submit]{
            width: 40%;
            padding: 1vw;
            margin-left: 18%;
            border: 0.5vw solid black;
            border-radius: 1vw;
            background-color: darkseagreen;
            font-size: 1vw;
            font-weight: bold;
            color: black;
            cursor: pointer;
        }
        select:focus,option:focus,input[type=submit]:focus{
            outline: none;
        }
        select:hover,option:hover,input[type=submit]:hover{
            opacity: 0.5;
        }


        /*for mobiles*/
        @media only screen and (max-width: 768px){
            body{
                background: black;
            }
            img{
                width: 90%;
                margin: 5%;
                float: left;
            }
            form{
                width: 90%;
                margin: 5%;
                margin-top: 8%;
                float: left;
            }
            select{
                padding: 2vw;
                margin-bottom: 7vw;
                box-sizing: border-box;
                width: 75%;
                margin-left: 12%;
                font-size: 5vw;
                border-radius: 1vw;
                border-color: darkseagreen;
                text-align-last: center;
                background: darkgray;
                cursor: pointer;
            }
            option{
                background: darkgray;
                color: black;
                font-size: 3vw;
                cursor: pointer;
                border-color: black;
            }
            input[type=submit]{
                width: 40%;
                padding: 2vw;
                margin-left: 30%;
                border: 0.5vw solid black;
                border-radius: 1vw;
                background-color: darkseagreen;
                font-size: 5vw;
                font-weight: bold;
                color: black;
                cursor: pointer;
            }
            select:focus,option:focus,input[type=submit]:focus{
                outline: none;
            }
            select:hover,option:hover,input[type=submit]:hover{
                opacity: 0.5;
            }
        }
    </style>


    <body>
        <img src="../res/studentHomePageLogo.png" ></img>
        <form action="attendanceView.php" method="POST" autocomplete="off">
            <select name="course" required="true">
                <option disabled selected value="" style="display: none" >---select course---</option>
                <option> B.Sc(Hons) Computer Science </option>
                <option> B.Sc(Hons) Computer Science </option>
                <option> B.Sc(Hons) Computer Science </option>
            </select>
            <select name="semester" required="true">
                <option disabled selected value="" style="display: none" >---select semester---</option>
                <option value="fill values according to table names">Semester 1</option>
                <option>Semester 2</option>
                <option>Semester 3</option>
                <option>Semester 4</option>
                <option>Semester 5</option>
                <option>Semester 6</option>
            </select>
            <select name="month" required="true">
                <option disabled selected value="" style="display: none" >---select month---</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
            </select>
            <input type="submit" value="SHOW ME !"/>
        </form>
    </body>
</html>
