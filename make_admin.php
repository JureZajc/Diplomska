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
<h1 style="text-align: center">Če želite dodati skrbnika ga lahko dodate na tej strani</h1>
<form action="admin.php" method="post">
    <select name="ID_users">
        <?php
                
        $query = "SELECT * FROM users";
        $result = mysqli_query($link, $query);
        while ($user = mysqli_fetch_array($result)){
                echo '<option value="'.$user['ID_users'].'">'.$user['Username'].'</option>';
            
            }
        ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Dodaj skrbnika" onclick="return you_sure()" />
</form>

<?php
 }
        include_once './footer.php';
 
?>