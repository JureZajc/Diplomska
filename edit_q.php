<?php
    include_once './header.php';
    include_once './database.php';
    include_once './session.php';

    $ID_quizes = (int) $_GET['id'];

    $query = "SELECT * FROM questions WHERE ID_questions=$ID_quizes";
    $result = mysqli_query($link, $query);
    $quiz_name = mysqli_fetch_array($result);
?>
<h1 style="text-align: center">Uredi vprašanje</h1>
<form action="update_Q.php" method="post">
    <input type="hidden" name="id" value="<?php echo $ID_quizes;?>" />
    <label>Vprašanje</label>
    <input type="text" name="question" value="<?php echo $quiz_name['Question'];?>" required="required" />
    <label>Odgovor 1</label>
    <input type="text" name="a1" value="<?php echo $quiz_name['answer1'];?>" required="required" />
    <label>Odgovor 2</label>
    <input type="text" name="a2" value="<?php echo $quiz_name['answer2'];?>" required="required" />
    <label>Odgovor 3</label>
    <input type="text" name="a3" value="<?php echo $quiz_name['answer3'];?>" required="required" />
    <label>Odgovor 4</label>
    <input type="text" name="a4" value="<?php echo $quiz_name['answer4'];?>" required="required" />
    <label>Pravilni odgovor</label>
    <input type="text" name="correct" value="<?php echo $quiz_name['correct'];?>" required="required" />
    <input type="submit" name="submit" value="Pošlji" />
    <input type="reset" name="reset" value="Prekliči" />

</form>
<?php
include_once './footer.php';
?>