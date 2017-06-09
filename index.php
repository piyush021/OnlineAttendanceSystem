<!DOCTYPE html>

<?php
/*
//validating login details here
$resultFromValidation = "";
$conn = new mysqli('localhost', 'root', '', 'online_attendance_system') or die("server Is Down");

if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    $id = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $query = "select `first_name`, `last_name` from `login_details` where id='$id' and password='$password'";

    if ($result = $conn->query($query)) {
        if ($result->num_rows === 1) {
            header("Location: teacher/index.php");
            exit();
        } else {
            $resultFromValidation = "Invalid Username Or Password !!!";
        }
    } else {
        //query did not run
        die('Server is Down');
    }
}
*/
?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Attendance System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>

    body {
        padding-top: 40px;
    }

    .main-container {
        margin: 2% 5%;
    }

    select {
        text-align-last: center;
        direction: ltr;
    }

    a:focus {
        outline: none
    }

    /*Making a line for Separation*/
    .separation {
        border-bottom: hidden;
        border-right: solid 2px darkgrey;
    }

    /*Making a line for Separation*/
    @media only screen and (max-width: 767px) {
        .separation {
            border-right: hidden;
            border-bottom: solid 2px darkgrey;
        }

        body {
            padding-top: 50px;
        }
    }

</style>

<body>

<div class="container-fluid main-container">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <div style="font-family : 'Century Gothic'; font-weight: bold;">Online Attendance System</div>
                </a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#redirectionModal"><span
                                        class="glyphicon glyphicon-education"></span> Visit Official Sites</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#aboutUsModal"><span
                                        class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="redirectionModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <div style="text-align: center;">Redirect To ?</div>
                    </h4>
                </div>
                <div class="modal-body">
                    <div style="text-align: center;">
                        <a href="http://www.cvs.edu.in">College Of Vocational Studies</a>
                        <br><b>OR</b><br>
                        <a href="http://www.du.ac.in/">Delhi University</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="aboutUsModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <div style="text-align: center;">NewGenDevelopers</div>
                    </h4>
                </div>
                <div class="modal-body">
                    <div style="text-align: center;">
                        <p>Write something here.</p>
                        <p>Write something here.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <img class="img-responsive center-block" src="res/frontPageLogo.png" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-3 separation">
            <!--Fill this form's content from database-->
            <form action="student/index.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Century Gothic';color: darkgrey;">FOR
                        STUDENTS</h5>
                </div>
                <div class="form-group">
                    <select class="form-control" name="course" required>
                        <option disabled selected value="" style="display: none">---select course---</option>
                        <option> B.Sc(Hons) Computer Science</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="semester" required>
                        <option disabled selected value="" style="display: none">---select semester---</option>
                        <option>Semester 1</option>
                        <option>Semester 2</option>
                        <option>Semester 3</option>
                        <option>Semester 4</option>
                        <option>Semester 5</option>
                        <option>Semester 6</option>
                    </select>
                </div>
                <input class="btn btn-info btn-block" type="submit" value="SHOW">
                <br>
            </form>
        </div>
        <div class="col-sm-3">
            <form action="index.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Century Gothic';color: darkgrey;">FOR
                        TEACHERS</h5>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" type="text" name="username" placeholder="Enter Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" type="password" name="password" placeholder="Enter Password"
                               required>
                    </div>
                </div>
                <input class="btn btn-info btn-block" type="submit" value="LOG IN">
                <br>
            </form>
        </div>
    </div>
</div>

</body>

</html>
