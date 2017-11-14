<?php
    include_once './header.php';
    include_once './database.php';
    $user_id = $_SESSION['user_id'];
    $kvizID = $_GET['id'];
?>

<?php 
    $query2 = "SELECT answers.ID_answers, answers.correct, quizes.ID_quizes,quizes.quiz_name,quizes.nmb_question, answers.ID_users, users.email, users.Name, users.Username FROM answers INNER JOIN quizes ON quizes.ID_quizes = answers.ID_quizes INNER JOIN users ON users.ID_users = answers.ID_users WHERE quizes.ID_quizes =$kvizID";
    $result2 = mysqli_query($link, $query2);
    $quiz_name2 = mysqli_fetch_array($result2);
?>

<h3 style="text-align: center"> Točke uporabnikov na kvizu: <?php echo $quiz_name2['quiz_name'];?> </h3>
<table>
    <tr>
        <td>#Poizkus</td>
        <td>Točke</td>
        <td>Procent</td>
        <td>Uporabniško ime</td>
    </tr>
<?php
    $number = 1;
    $query = "SELECT answers.ID_answers, answers.correct, quizes.ID_quizes,quizes.quiz_name,quizes.nmb_question, answers.ID_users, users.email, users.Name, users.Username FROM answers INNER JOIN quizes ON quizes.ID_quizes = answers.ID_quizes INNER JOIN users ON users.ID_users = answers.ID_users WHERE quizes.ID_quizes =$kvizID";
    $result = mysqli_query($link, $query);
    while ($quiz_name = mysqli_fetch_array($result) ){
    echo '<tr>';
    //if($quiz_name['ID_users'] == $user_id and $quiz_name['ID_answers'] != NULL){
            echo '<td>'.$number.'</td>';
            echo '<td>'.$quiz_name['correct'];
            echo '/';
            echo $quiz_name['nmb_question'];
            $score = $quiz_name['correct']/(int)($quiz_name['nmb_question'])*100;
            $urejeno = round($score);
            echo '<td><font color = "##ff0000" weight ="bold"><span style="font-weight:bold">'.$urejeno.' % </td>';
            /*echo '<td>'.($question['correct']/(int)($question['nmb_question']))*100;
            echo ' %</td>';*/ // če nočemo met urejenega rezultata 
            echo '<td>'.$quiz_name['Username'].'</td>';
            $number++;
    }         
    //}
    

  
?>
    
</table>

<?php
include_once './footer.php';
?>
