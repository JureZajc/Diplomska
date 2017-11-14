<?php

include_once './header.php';
include_once './database.php';

include_once './session.php';
$user_id = $_SESSION['user_id'];
$a1 = $_POST['a1'];
echo $a1;

?>






<h1 style="text-align: center">your points:</h1>
		
        <?php
            $query = "SELECT * FROM questions";
            $result = mysqli_query($link, $query);
            //$rows = mysqli_query("SELECT * FROM questions");
            $row = mysqli_fetch_assoc($result);    
            $since = $_POST['a1'];
            $until = $_POST['a2'];
            $nmb_question = $_POST['a3'];
            $answer4 = $_POST['a4'];
            $count = $_POST['count'];
            echo $until;
            //$answer5 = $_POST['question-5-answers'];
            
            
        
            $totalCorrect = 0;
            
            
                $number1 = 0;
                $query2 = "SELECT id_scores FROM answers";
                $result2 = mysqli_query($link, $query2);
               /* while ($id_score = mysqli_fetch_array($result2)){
                    $number1++;
                }*/
                $number1++;
                
                
            
        
            if ($since == $row['correct']) { $totalCorrect++; }
            if ($until == $row['correct']) { $totalCorrect++; }
            if ($nmb_question == $row['correct']) { $totalCorrect++; }
            if ($answer4 == $row['correct']) { $totalCorrect++; }
            //if ($answer5) { $totalCorrect++; }
            echo "<div style=\"text-align:center\">";
            echo "<div id='results' div style=\"text-align:center\">$totalCorrect / 5 correct</div>";            
            /*$query = sprintf("INSERT INTO questions (score, ID_users, answers) VALUES('$totalCorrect','$user_id', '$answer1/$answer2/$answer3/$answer4')");
            mysqli_query($link, $query);*/
            $test = sprintf("INSERT INTO answers (Answer, correct, ID_users, ID_questions, ID_quizes) VALUES('$since/$until/$nmb_question/$answer4','33','$user_id', '14','5' )");
            mysqli_query($link, $test);
?>


<?php
        include_once './footer.php';
?>
