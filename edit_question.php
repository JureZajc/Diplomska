<?php
    include_once './header.php';
    include_once './database.php';
    $user_id = $_SESSION['user_id'];
?>
<?php
    $queryAdmin = "SELECT * FROM users WHERE ID_users = $user_id";
    $resultAdmin = mysqli_query($link, $queryAdmin);
    $resultAdmin2 = mysqli_fetch_array($resultAdmin);
    if ($resultAdmin2['Admin'] == NULL){
        echo '<h1 style=text-align:center;> Nimaš zadostnih pravic za ogled te strani!</h1>';
        echo '<div style="text-align: center">';
        echo "<a style=text-align:center; href=\"javascript:history.go(-1)\">POJDI NAZAJ</a>";
        echo '</div>';
    }
 else {
     
 ?>
<h1 style="text-align: center">Uredite svoja vprašanja</h1>
<br>



<table id="test">
    <tr>
        <td>Vprašanje</td>
        <td>Odgovor 1</td>
        <td>Odgovor 2</td>
        <td>Odgovor 3</td>
        <td>Odgovor 4</td>
        <td>Pravilni odgovor</td>
        <td>Tip kviza</td>
        <td>Uredi vprašanje</td>
    </tr>
<?php
    $query = "SELECT questions.ID_questions, questions.Question,questions.correct, questions.answer1, questions.answer2,questions.answer3, questions.answer4,quizes.ID_quizes, quizes.since_when, quizes.until, quizes.nmb_question, quizes.quiz_name FROM questions INNER JOIN quizes ON quizes.ID_quizes = questions.ID_quizes";
    $result = mysqli_query($link, $query);
    while ($quiz_name = mysqli_fetch_array($result)) {        
        echo '<tr>';
        echo '<td>'.$quiz_name['Question'].'</td>';
        echo '<td>'.$quiz_name['answer1'].'</td>';
        echo '<td>'.$quiz_name['answer2'].'</td>';
        echo '<td>'.$quiz_name['answer3'].'</td>';
        echo '<td>'.$quiz_name['answer4'].'</td>';
        echo '<td ><font color = "##ff0000" weight ="bold"><span style="font-weight:bold">'.$quiz_name['correct'].'</td></span>';
        echo '<td>'.$quiz_name['quiz_name'].'</td>';
        echo '<td>';
        echo '<a href="edit_q.php?id='.$quiz_name['ID_questions'].'")" >Uredi vprašanje</a> ';
        echo '</td>';
        echo '</tr>';
    }
?>
</table>


<?php
 }
    include_once './footer.php';
?>