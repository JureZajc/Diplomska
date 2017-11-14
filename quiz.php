<?php

    include_once './header.php';
    include_once './database.php';
    $ID_quizes = (int) $_GET['id'];
?>

<form action="test2.php" method="post" style="text-align: center">
    
    <?php
    $query = "SELECT questions.ID_questions, questions.Question, questions.answer1, questions.answer2,questions.answer3, questions.answer4,quizes.ID_quizes, quizes.since_when, quizes.until, quizes.nmb_question FROM questions INNER JOIN quizes ON quizes.ID_quizes = questions.ID_quizes WHERE questions.ID_quizes = $ID_quizes ORDER BY RAND() ";
    $result = mysqli_query($link, $query);
    $count = 0;
    $stevec = 0;
    $current_date = date('Y-m-d');
    $rezultat2 = mysqli_fetch_array($result);
    
    $del =  intval($rezultat2['nmb_question'] * 4); 
    echo $del;
    while($stevec <= $del) {
        
        while ($rezultat = mysqli_fetch_array($result)){            
            if ($rezultat['Question'] != NULL){
                if ($rezultat['ID_quizes'] == $ID_quizes){
                    $stevec++;
                    //if ($rezultat['since_when'] <= $current_date && $rezultat['until'] >= $current_date ){
                        echo '<h3 style = "text-align: center">';
                        echo $rezultat['Question'];
                        echo '</h3>';
                        echo '<input type="hidden" name="ID_quizes" value ='.$rezultat['ID_quizes'].'>';
                        echo '<input type="hidden" name="ID_questions" value ='.$rezultat['ID_questions'].'>';
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer1'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer1'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer2'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer2'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']"value ="'.$rezultat['answer3'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer3'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer4'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer4'];
                        echo '</label>';
                        echo '</div>'; 
                        $count++;
                    }
                    $stevec++;
                }// if kviz
        }
    }//if vprasanje
    
    echo '<input type="submit" value="Submit Quiz" />';
    echo $del;
    
    /*    echo '<form action="grade.php" method="post" id="quiz">';
        echo '<ol>';
        echo '<li id = "q1"';
        echo '<div class="Question">'.$rezultat['Question'].'</div>';
        echo '<div class="Answer">';
        echo '<label for="q1_a"><div class="Radio"><input type = "radio" name ="q1" id="q1_a" value="A"'.$rezultat['answer1'].'</div></label></div>';
        echo '<div class="Answer">';
        echo '<label for="q1_b"><div class="Radio"><input type = "radio" name ="q1" id="q1_b" value="B"'.$rezultat['answer2'].'</div></label></div>';
        echo '<div class="Answer">';
        echo '<label for="q1_c"><div class="Radio"><input type = "radio" name ="q1" id="q1_c" value="C"'.$rezultat['answer3'].'</div></label></div>';
        echo '<div class="Answer">';
        echo '<label for="q1_d"><div class="Radio"><input type = "radio" name ="q1" id="q1_d" value="D"'.$rezultat['answer4'].'</div></label></div>';
        echo '<div class="Answer">';
        echo '</li>';
        echo '</ol>';
     * echo</div>;
        echo '<input type ="submit" value = "Submit quiz">';
        echo '</form>';*/
        
    ?>
    

          
 <!--
    <?php/*
        $query = "SELECT Questions.ID_questions, Questions.Question, Answers.Answer, Answers.answer1, Answers.answer2, Answers.answer3, Answers.answer4 FROM Questions INNER JOIN Answers ON Questions.ID_answers = Answers.ID_answers ";
        $result = mysqli_query($link, $query);
        $count = 0;
        if (!$result){
            die('Invalid query:' .mysqli_error($link));
        }
        while ($rezultat = mysqli_fetch_array($result)){

            if ($rezultat['Answer'] != NULL){
                echo '<h3 style = "text-align: center">';
                echo $rezultat['Question'];
     * echo '</h3>'
                echo '<div style = "text-align:center">';
                echo '<input type="radio" name="answer1" id="['.$count.']" value="answer1"/>';
                echo '<label for="['.$count.']">'.$rezultat['answer1'];
                echo '</label>';
                echo '</div>';
                $count++;
                echo '<div style = "text-align:center">';
                echo '<input type="radio" name="answer2" id="['.$count.']" value="answer2"/>';
                echo '<label for="['.$count.']">'.$rezultat['answer2'];
                echo '</label>';
                echo '</div>';
                $count++;
                echo '<div style = "text-align:center">';
                echo '<input type="radio" name="answer3" id="['.$count.']" value="answer3"/>';
                echo '<label for="['.$count.']">'.$rezultat['answer3'];
                echo '</label>';
                echo '</div>';
                $count++;
                echo '<div = "text-align:center">';
                echo '<input type="radio" name="answer4" id="['.$count.']" value="answer4"/>';
                echo '<label for="['.$count.']">'.$rezultat['answer4'];
                echo '</label>';
                echo '</div>'; 
               $count++;
               if ($count > 12){
                   break;
               }
            }
        }
        echo '<input type="submit" value="Submit Quiz" />';*/
    ?>
-->
<!--
                
                    <h3 style="text-align: center">CSS Stands for...</h3>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) Computer Styled Sections </label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                    
                    <br>
                

                
                    <h3 style="text-align: center">Internet Explorer 6 was released in...</h3>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 2001</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 1998</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 2006</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 2003</label>
                    </div>
                    <br>

                
                    <h3 style="text-align: center">SEO Stand for...</h3>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Secret Enterprise Organizations</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Special Endowment Opportunity</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Search Engine Optimization</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Seals End Olives</label>
                    </div>
                
                    <br>
                
                    <h3 style="text-align: center">A 404 Error...</h3>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) is an HTTP Status Code meaning Page Not Found</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) is a good excuse for a clever design</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) should be monitored for in web analytics</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) All of the above</label>
                    </div>
                    <br>
                    <h3 style="text-align: center">Your favorite website is</h3>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) CSS-Tricks</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) CSS-Tricks</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) CSS-Tricks</label>
                    </div>
                    
                    <div style="text-align: center">
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) CSS-Tricks</label>
                    </div>


            <input type="submit" value="Submit Quiz" />
</form>
-->
<?php

    include_once './footer.php';

?>