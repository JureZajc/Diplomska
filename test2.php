<?php

include_once './header.php';
include_once './database.php';

include_once './session.php';
$user_id = $_SESSION['user_id'];
//$a1 = $_POST['a1'];
//$a2 = $_POST['a2'];
//$a3 = $_POST['a3'];
//$a4 = $_POST['a4'];
//echo $a1;
//echo $a2;
//echo $a3;
//echo $a4;
$quiz_id = $_POST['ID_quizes'];
//echo $quiz_id."<br/>";


$name = $_POST['a'];
$test4 = $_POST['b'];
$stevilo = 14;
// optional
// echo "You chose the following color(s): <br>";
$testquery = sprintf("SELECT questions.ID_questions, questions.Question,questions.correct, questions.answer1, questions.answer2,questions.answer3, questions.answer4,quizes.ID_quizes, quizes.since_when, quizes.until, quizes.nmb_question, quizes.quiz_name FROM questions INNER JOIN quizes ON quizes.ID_quizes = questions.ID_quizes WHERE questions.ID_quizes = $quiz_id");
$result2 = mysqli_query($link, $testquery);
$rezultat = mysqli_fetch_array($result2);
$ID_quizes = $rezultat['ID_quizes'];
$steviloVprasanj = (int) $rezultat['nmb_question'];
$stevec = 1;
/*while ($stevec <= 3){
    $idQ = $_POST['ID_questions'];
    echo $idQ."<br />";
    $stevec++;
}*/
//echo $rezultat['correct'];
$dodajmo = array();
$tocke = 0;

foreach ($test4 as $delaj4){
    echo "<br />";
    //echo $delaj4;
    $query4 = sprintf("SELECT * FROM questions WHERE ID_questions = $delaj4");
    $result4 = mysqli_query($link, $query4);
    $rezultat4 = mysqli_fetch_array($result4);
    
    foreach ($name as $color){ 
        //echo "<br />";
        //echo $color."<br />";
        //$testna = $_POST['ID_questions'];
        //echo $testna."<br />";
        //if ($testna == $rezultat['ID_questions'] ){


        $pravilni = $rezultat['correct'];
        //echo $pravilni."<br />";
        $dodajmo[] = $color;

        //echo $pravilni;
        //echo strcmp($color,$pravilni);
        //echo "<br>";

        $pravi4 = $rezultat4['correct'];
        if (strcmp("$color", "$pravi4") == 0){
            $tocke++;
        }
}
   /* if (  strcmp("$color", "$pravilni") == 0) {
        $tocke++;
    }*/
    }

//}
foreach($dodajmo as $result) {
    //echo $result. '<br>';
}
$delaj = serialize($dodajmo);
$delaj2 = unserialize($delaj);
foreach($delaj2 as $result) {
   // echo $result. '<br>';
}

//echo $tocke;
$test123 = sprintf("INSERT INTO answers(Answer, correct, ID_users,  ID_quizes) VALUES('$delaj', '$tocke', '$user_id','$quiz_id')");
$result123 = mysqli_query($link, $test123);
?>


<h1 style="text-align: center">Vaše dosežene točke:</h1>

<?php 
$deljenje = $tocke/$steviloVprasanj*100;
$deljenje2 = round($deljenje);
echo '<p style="text-align:center"> Dosegel si: '.$tocke.' od možnih: '.$steviloVprasanj.' točk kar je enako '.$deljenje2.' %.</p>';
echo '<p style="text-align:center"> Lahko preveriš vse svoje rezultate kvizov tukaj: <a href="all_results.php">Preveri rezultate</a> </p>';
?>
		
        
       <?php     

        include_once './footer.php';
?>