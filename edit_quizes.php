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
<h1 style="text-align: center">Tukaj lahko uredite kvize</h1>
<br>



<table id="test">
    <tr>
        <td>Ime kviza</td>
        <td>Od kdaj je kviz odprt</td>
        <td>Do kdaj je kviz odprt</td>
        <td>Število vprašanj</td>
        <td>Uredi kviz</td>
    </tr>
<?php
    $query = "SELECT * FROM quizes";
    $result = mysqli_query($link, $query);
    while ($quiz_name = mysqli_fetch_array($result)) {        
        echo '<tr>';
        echo '<td>'.$quiz_name['quiz_name'].'</td>';
        echo '<td>'.$quiz_name['since_when'].'</td>';
        echo '<td>'.$quiz_name['until'].'</td>';
        echo '<td>'.$quiz_name['nmb_question'].'</td>';
        echo '<td>';
        echo '<a href="edit_quiz.php?id='.$quiz_name['ID_quizes'].'")" >Uredi kviz</a> ';
        echo '</td>';
        echo '</tr>';
    }
?>
</table>


<?php
 }
    include_once './footer.php';
?>