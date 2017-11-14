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

<h3 style="text-align: center"> Točke vseh študentov </h3>
<table>
    <tr>
        <td>Uporabniško ime</td>
        <td>Točke</td>
        <td>Procent</td>
        <td>Ime kviza</td>
    </tr>
<?php
    $query = "SELECT answers.ID_answers, answers.correct,users.Username, quizes.ID_quizes,quizes.quiz_name,quizes.nmb_question, answers.ID_users, users.email, users.Name FROM answers INNER JOIN quizes ON quizes.ID_quizes = answers.ID_quizes INNER JOIN users ON users.ID_users = answers.ID_users ";
    $result = mysqli_query($link, $query);
    while ($quiz_name = mysqli_fetch_array($result) ){
    echo '<tr>';
    
    echo '<td>'.$quiz_name['Username'].'</td>';
    echo '<td>'.$quiz_name['correct'];
    echo '/';
    echo $quiz_name['nmb_question'];
    $score = $quiz_name['correct']/(int)($quiz_name['nmb_question'])*100;
    $urejeno = round($score);
    echo '<td><font color = "##ff0000" weight ="bold"><span style="font-weight:bold">'.$urejeno.' % </td>';
    echo '<td>'.$quiz_name['quiz_name'].'</td>';
    echo '</tr>';
          
    }
    

  
?>
    
</table>


<?php
}
include_once './footer.php';
?>
