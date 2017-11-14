<?php
    include_once './database.php';
    include_once './session.php';
    $user_id = $_SESSION['user_id'];
    $ID_quizes = (int) $_POST['ID_quizes'];
    $ID_questions = (int) $_POST['ID_questions'];
    $pravi = 'A:6';
    
    $count = 0;
    $correct = 0;
    $answered = null;
    //while ($count <= 1){
        if (isset($_POST['a1']) ){
            $since = $_POST['a1'];
            if ($since ==  $pravi){
                $correct++;
                $answered = $_POST['a1'];
                $count++;               
            }
       
            
            
        }
        elseif (isset($_POST['a2']) ){
                $until = $_POST['a2'];
                if ($until == $pravi){
                    $correct++;
                    $answered = $_POST['a2'];
                    $count++;                   
                }

 
 

            
        
        }
        elseif (isset($_POST['a3'])) {
                $nmb_question = $_POST['a3'];
                if ($nmb_question == $pravi){
                    $correct++;
                    $answered = $_POST['a3'];
                    $count++;
                }


            

        }
        elseif (isset ($_POST['a4'])){
            $answer4 = $_POST['a4'];
        
            $correct++;
            
             $answered = $_POST['a4'];
        $count++;
}
        
    
  //  }//while naredi še sql prej da dobimo število vprašanj
    $query = "INSERT INTO answers (Answer, correct, ID_users, ID_questions, ID_quizes) VALUES ('$answered', '$correct', $user_id, 14,$ID_quizes)";
    $result = mysqli_query($link, $query);
?>