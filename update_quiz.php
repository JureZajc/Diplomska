<?php
include_once './session.php';
include_once './database.php';

$ID_quizes = $_POST['id'];
$quiz_name = $_POST['quiz_name'];
//$since = $_POST['since'];
$since2 = date('Y-m-d', strtotime($_POST['since']));
//$until = $_POST['until'];
$until2 = date('Y-m-d', strtotime($_POST['until']));
$nmb_question = $_POST['nmb_question'];


if ((!empty($ID_quizes))) {
    
    $query = sprintf("UPDATE quizes SET quiz_name='%s', since_when='%s', until='%s', nmb_question='%s' WHERE ID_quizes = $ID_quizes", 
            mysqli_real_escape_string($link, $quiz_name), 
            mysqli_real_escape_string($link, $since2),
            mysqli_real_escape_string($link, $until2),
            mysqli_real_escape_string($link, $nmb_question));
    mysqli_query($link, $query);
    
    header("Location: edit_quizes.php");
}
?>