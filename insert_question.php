<?php
    include_once './database.php';
    include_once './session.php';
    $ID_quizes = $_POST['ID_quizes'];
    $quiz_name = $_POST['question'];
    $since = $_POST['answer1'];
    $until = $_POST['answer2'];
    $nmb_question = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $correct = $_POST['correct_answer'];
    $user_id = $_SESSION['user_id'];
    $correct2 = $correct + " ";
    //$sql = "SELECT id_answers FROM answers ORDER BY id_answers DESC LIMIT 1";
    //$answer_max = mysqli_query("SELECT max(id_answers) FROM answers");
    /*$result = mysql_query("SELECT max(id_answers FROM answers");
    if (!$result){
        die('Could not queri');
    }
    $answer_max = mysql_result($result, 0, 'id');*/
    //$answer_max++;
    $number = 0;
    $query = "SELECT id_answers FROM answers";
    $result = mysqli_query($link, $query);
    while ($id = mysqli_fetch_array($result)){
        $number++;
    }
    $number++;
    

   
   /* foreach ($result as $test){
        $number++;
    };
    $number++;
*/
    $correct_answer = $_POST['correct_answer'];
    $query = sprintf("INSERT INTO questions (Question, answer1, answer2, answer3, answer4,  ID_users, correct, ID_quizes) VALUES ('$quiz_name', 'A:$since', 'B:$until', 'C:$nmb_question', 'D:$answer4', $user_id, '$correct_answer', $ID_quizes)");
    mysqli_query($link, $query);
    //echo $query;    die();
   // $query = sprintf("INSERT INTO answers (answer, answer1, answer2, answer3, answer4) VALUES ('$correct', 'A:$answer1', 'B:$answer2', 'C:$answer3','D:$answer4')");
    //mysqli_query($link, $query);
    header("location:add_question.php");
?>
    
    

