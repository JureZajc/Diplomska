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
<h1 style="text-align: center">Dodaj vprašanje</h1>
        <form action="insert_question.php" method="post">
            <select name="ID_quizes">
            <?php
                
                $query = "SELECT * FROM quizes";
                $result = mysqli_query($link, $query);
                while ($user = mysqli_fetch_array($result)){
                    echo '<option value="'.$user['ID_quizes'].'">'.$user['quiz_name'].'</option>';
                }
            ?>
            <label>Vprašanje</label>
            <input type="text" name="question" placeholder="Dodaj vprašanje" required="required"/>
            <label>Odgovor A</label>
            <input type="text" name="answer1" placeholder="Odgovor A" required="required" />
            <label>Odgovor B</label>
            <input type="text" name="answer2" placeholder="Odgovor B" required="required" />
            <label>Odgovor C</label>
            <input type="text" name="answer3" placeholder="Odgovor C" required="required" />
            <label>Odgovor D</label>
            <input type="text" name="answer4" placeholder="Odgovor D" required="required" />
            <label>Kopiraj pravilni odgovor na način A:pravilni odgovor in na koncu dodaj presledek</label>
            <input type="text" name="correct_answer" placeholder="Napiši pravilni odgovor na način A:pravilni odgovor in na koncu dodaj presledek" required="required" />
            <br>
            <input type="submit" name="submit" value="Pošlji" />
            <input type="reset" name="reset" value="Prekliči" />
        </form>
<?php
 }
    include_once './footer.php';
?>

