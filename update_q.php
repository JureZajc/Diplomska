<?php
include_once './session.php';
include_once './database.php';

$ID_quizes = $_POST['id'];
$quiz_name = $_POST['question'];
$since = $_POST['a1'];
$until = $_POST['a2'];
$nmb_question = $_POST['a3'];
$answer4 = $_POST['a4'];
$correct = $_POST['correct'];

if ((!empty($ID_quizes))) {
    
    $query = sprintf("UPDATE questions SET Question='%s', answer1='%s', answer2='%s', answer3='%s', answer4='%s', correct='%s' WHERE ID_questions = $ID_quizes", 
            mysqli_real_escape_string($link, $quiz_name), 
            mysqli_real_escape_string($link, $since),
            mysqli_real_escape_string($link, $until),
            mysqli_real_escape_string($link, $nmb_question),
            mysqli_real_escape_string($link, $answer4),
            mysqli_real_escape_string($link, $correct));
    mysqli_query($link, $query);
    
    header("Location: edit_question.php");
}
?>