<?php
if(!isset($_POST['course']) || !isset($_POST['subject']) || !isset($_POST['date']) ){
    header('Location: home.php');
    exit();
}

$course=$_POST['course'];
$subid=$_POST['subject'];
$date=$_POST['date'];

$conn = new mysqli('localhost', 'root', '', 'online_attendance_system') or die("server Is Down");
$query = "select `rollno` from `".$course."`";
if (!$result = $conn->query($query)) {
    echo $conn->error;
    die('Server is Down');
}
while($row = mysqli_fetch_assoc($result)){
    if(isset($_POST[$row['rollno']]) && !empty($_POST[$row['rollno']])){
        $query = "insert into `".$row['rollno']."` values(".$subid.",\"".$date."\",\"p\" )";
        $conn->query($query);
    }else{
        $query = "insert into `".$row['rollno']."` values(".$subid.",\"".$date."\",\"a\" )";
        $conn->query($query);
    }
}
mysqli_commit($conn);
header("Location: home.php?success=");
exit();
?>
