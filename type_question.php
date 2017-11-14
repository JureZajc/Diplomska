<?php
    include_once './header.php';
    include_once './database.php';
    $user_id = $_SESSION['user_id'];
?>

<?php
// preverimo če je prijavljen admin ali ne
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
<h1 style="text-align: center">Dodaj tip kviza</h1>
<form action="insert_type.php" method="post">
            <label>Ime kviza</label>
            <input type="text" name="quiz_name" placeholder="Ime kviza" required="required"/>
            <label>Kdaj se naj kviz odpre?</label>
            <input type="date" name="date_start" required="required" style=" background-color:#3C4251; text-align: center; width: 100%; " />           
            <label>Kdaj se naj kviz konča?</label>
            <input type="date" name="date_end"  required="required" style="background-color:#3C4251; text-align:  center; width: 100%;" />
            <label>Koliko vprašanj bo v kvizu?</label>
            <input type="text" name="nmb" placeholder="Število vprašanj na kvizu" required="required" />
            <input type="submit" name="submit" value="Pošlji" />
            <input type="reset" name="reset" value="Prekliči" />
        </form>
<?php
 }
    include_once './footer.php';
?>

