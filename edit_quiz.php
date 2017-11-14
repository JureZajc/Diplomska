<?php
    include_once './header.php';
    include_once './database.php';
    include_once './session.php';

    $ID_quizes = (int) $_GET['id'];

    $query = "SELECT * FROM quizes WHERE ID_quizes=$ID_quizes";
    $result = mysqli_query($link, $query);
    $quiz_name = mysqli_fetch_array($result);
?>
<h1 style="text-align: center">Ureditev kviza</h1>
<form action="update_quiz.php" method="post">
    <input type="hidden" name="id" value="<?php echo $ID_quizes;?>" />
    <label>Ime kviza</label>
    <input type="text" name="quiz_name" value="<?php echo $quiz_name['quiz_name'];?>" required="required" />
    <label>Kdaj se kviz odpre</label>
    <input type="date" name="since" value="<?php echo $quiz_name['since_when'];?>" required="required" style=" background-color:#3C4251; text-align: center; width: 100%; " />
    <label>Kdaj se kviz konča</label>
    <input type="date" name="until" value="<?php echo $quiz_name['until'];?>" required="required" style=" background-color:#3C4251; text-align: center; width: 100%; " />
    <label>Število vprašanj</label>
    <input type="text" name="nmb_question" value="<?php echo $quiz_name['nmb_question'];?>" required="required" />
    <input type="submit" name="submit" value="Pošlji" />
    <input type="reset" name="reset" value="Prekliči" />

</form>
<?php
include_once './footer.php';
?>