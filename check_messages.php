<?php
    include_once './header.php';
    include_once './database.php';
    include_once './session.php';
    $user_id = $_SESSION['user_id'];
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

<h3 style="text-align: center">Tukaj lahko preverite vsa sporočila, katera so vam poslali uporabniki</h3>
<br>
<br>

<table>
    <tr>
        <td>Ime</td>
        <td>Priimek</td>
        <td>E-mail</td>
        <td>Sporočilo</td>
    </tr>
    <?php
    $query = sprintf("SELECT * FROM users");
        $result = mysqli_query($link, $query);
        while($result2 = mysqli_fetch_array($result) ){
            if ($result2['text']!= NULL){
                echo '<tr>';
                echo '<td>'.$result2['Name'].'</td>';
                echo '<td>'.$result2['Surname'].'</td>';
                echo '<td>';
                echo '<a href="mailto:'.$result2['email'].'")" >Pošlji email</a> ';
                echo '</td>';
                echo '<td>'.$result2['text'].'</td>';
                echo '</tr>';
            }
        }
        
    ?>
</table>

<?php
 }
        include_once './footer.php';
 
?>



