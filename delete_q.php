<?php
    include_once './database.php';
    include_once './session.php';
    
    $ID_quizes = (int) $_GET['id'];
    
    $query = "DELETE FROM questions WHERE ID_questions= $ID_quizes";
    mysqli_query($link, $query);
    
    
    header("location: edit_question.php");
    
?>