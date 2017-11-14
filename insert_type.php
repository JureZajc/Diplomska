<?php
include_once './session.php';
include_once './database.php';

$quiz_name = $_POST['quiz_name'];
$date_start = $_POST['date_start'];
$date_start2 = date('Y-m-d', strtotime($_POST['date_start']));
$date_end = $_POST['date_end'];
$date_end2 = date('Y-m-d', strtotime($_POST['date_end']));
$nmb = $_POST['nmb'];
$user_id = $_SESSION['user_id'];

    $query = sprintf("INSERT INTO quizes (ID_users,quiz_name, since_when, until, nmb_question) "
        . " VALUES($user_id,'%s','$date_start2', '$date_end2',$nmb )", 
            mysqli_real_escape_string($link, $quiz_name));
    
    mysqli_query($link, $query);
    
    header("Location: index.php");
?>