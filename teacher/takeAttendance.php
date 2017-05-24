<?php
session_start();
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    header('Location: ../index.php');
    exit();
}
if (!isset($_POST['subject']) || !isset($_POST['day']) || !isset($_POST['month']) || !isset($_POST['year'])) {
    header('Location: ../index.php');
    exit();
}

$subid = $_POST['subject'];
$conn = new mysqli('localhost', 'root', '', 'online_attendance_system') or die("server Is Down");
$query = "select `course`,`semester` from `subjects` where subjectid='$subid'";
if (!$result = $conn->query($query)) {
    echo $conn->error;
    die('Server is Down');
}
$row = $result->mysqli_fetch_assoc();
$course = $row['course'];
switch ($row['semester']) {
    case 1:
    case 2:
        $course .= '_1st_year_students';
        break;
    case 3:
    case 4:
        $course .= '_2nd_year_students';
        break;
}
$date = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
$query = "select `rollno`,`name` from `" . $course . "`";
if (!$result = $conn->query($query)) {
    echo $conn->error;
    die('Server is Down');
}
$var = '';

$tablevar = "<table> <tr><th>ROLL NO.</th> <th>NAME</th> <th>IS PRESENT?</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $tablevar .= "<tr><td>" . $row['rollno'] . "</td> <td>" . $row['name'] . "</td> <td> <input type='checkbox' name=".$row['rollno']." value='p'/> </td></tr>";
}
?>



<html>
    <head>
        <title>Online Attendance System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background: black;
            }
            form{
                width: 90%;
                margin: 5%;
                margin-top: 2%;
                float: left;
            }
            input[type=submit]{
                width: 60%;
                padding: 1vw;
                margin-left: 20%;
                margin-bottom: 3%;
                border: 0vw solid black;
                border-radius: 1vw;
                background-color: darkseagreen;
                font-size: 1vw;
                font-weight: bold;
                color: black;
                cursor: pointer;
            }
            input[type=submit]:focus{
                outline: none;
            }
            input[type=submit]:hover{
                opacity: 0.5;
            }
            table{
                text-align: center;
                margin-left: 20%;
                width: 60%;
                color: white;
                border: 3px solid darkgray;
                border-collapse: collapse;
            }
            tr{
                padding: 2.5%;
                color: white;
                border: 3px solid darkgray;
                border-collapse: collapse;  
            }
            th{  
                padding: 2.5%;
                color: white;
                border: 3px solid darkgray;
                border-collapse: collapse;

            }
            td{ 
                padding: 2.5%;
                color: white;
                border: 3px solid darkgray;
                border-collapse: collapse;

            }
            input[type="checkbox"]{
                width: 30px; /*Desired width*/
                height: 30px; /*Desired height*/
                cursor: pointer;

            }
            /*for mobiles*/
            @media only screen and (max-width: 768px){
                body{
                    background: black;
                }
                form{
                    width: 100%;
                    margin-top: 2%;
                    margin-left: 1%;
                    float: left;
                }
                input[type=submit]{
                    width: 60%;
                    padding: 2vw;
                    margin-left: 20%;
                    border: 0.5vw solid black;
                    border-radius: 3vw;
                    background-color: darkseagreen;
                    font-size: 4vw;
                    font-weight: bold;
                    color: black;
                    cursor: pointer;
                }
                input[type=submit]:focus{
                    outline: none;
                }
                input[type=submit]:hover{
                    opacity: 0.5;
                }
                table{
                    font-size: 4vw;
                    text-align: center;
                    margin-left: 0%;
                    width: 99%;
                    color: white;
                    border: 3px solid darkgray;
                    border-collapse: collapse;
                }
                tr{
                    padding: 2.5%;
                    color: white;
                    border: 1vw solid darkgray;
                    border-collapse: collapse;  
                }
                th{  
                    padding: 2.5%;
                    color: white;
                    border: 1vw solid darkgray;
                    border-collapse: collapse;

                }
                td{ 
                    padding: 2.5%;
                    color: white;
                    border: 1vw solid darkgray;
                    border-collapse: collapse;

                }
                input[type="checkbox"]{
                    width: 5vw; /*Desired width*/
                    height: 5vw; /*Desired height*/
                    cursor: pointer;

                }

            }

        </style>


    </head>
    <body>
        <form action="submit.php" method="POST" autocomplete="off">
            <input type="hidden" name="course" value="<?php echo $course;?>"/>
            <input type="hidden" name="subject" value="<?php echo $subid;?>"/>
            <input type="hidden" name="date" value="<?php echo $date;?>"/>
            <input type="submit" value="SUBMIT"/>
            <?php echo $tablevar; ?>
        </form>
    </body>
</html>
