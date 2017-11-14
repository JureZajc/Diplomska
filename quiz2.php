<?php

    include_once './header.php';
    include_once './database.php';
    $ID_quizes = (int) $_GET['id'];
?>
<h3 style="text-align: center">Pozdravljeni na kvizu, ne pozabite da lahko na vsak kviz odgovorite samo s enim odgovorom.</h3>
<form action="test2.php" method="post" style="text-align: center">
    
    <?php
    $query = "SELECT questions.ID_questions, questions.Question, questions.answer1, questions.answer2,questions.answer3, questions.answer4,quizes.ID_quizes, quizes.since_when, quizes.until, quizes.nmb_question FROM questions INNER JOIN quizes ON quizes.ID_quizes = questions.ID_quizes WHERE questions.ID_quizes = $ID_quizes ORDER BY RAND() ";
    $result = mysqli_query($link, $query);
    $count = 0;
    $stevec = 1;
    $current_date = date('Y-m-d');
    $rezultat2 = mysqli_fetch_array($result);

    
       $del =  (intval($rezultat2['nmb_question'])) ;
       //$del2 = (int) $rezultat2['nmb_question'];
       //echo json_encode($del);
       $mnozenje = $del * 4;
       //echo 'Število vprašanj: ';
    //echo $del."<br />";
    echo '</br />';
    echo '</br />';
    
    $query4 = "SELECT COUNT(*) as nmb FROM questions WHERE ID_quizes = $ID_quizes ";
    $result4 = mysqli_query($link, $query4);
    $rezultat4 = mysqli_fetch_array($result4);
    $test9 = (int) $rezultat4['nmb'];
    //echo $test9;
    //echo (gettype($test9));
    $nic = 0;
    //echo $del;
    //$stev = (int) $test9;
    //echo $stev;
    //echo '('.$rezultat4['nmb'].')';
    //echo $del2;
    //do{
    //for ($i = 1; $i <=$del; $i++){
    if ($test9 === $del && $del != 0){
        $rezultat = $rezultat2;  
        //echo 1;
        //if ($rezultat['Question'] != NULL){
                //if ($rezultat['ID_quizes'] == $ID_quizes){
                    
                    //if ($rezultat['since_when'] <= $current_date && $rezultat['until'] >= $current_date ){
                        echo '<h3 style = "text-align: center">';
                        echo $rezultat['Question'];
                        echo '</h3>';
                        echo '<input type="hidden" name="ID_quizes" value ='.$rezultat['ID_quizes'].'>';
                        echo '<input type="hidden" name="b[]" value ='.$rezultat['ID_questions'].'>';
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer1'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer1'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer2'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer2'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']"value ="'.$rezultat['answer3'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer3'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer4'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer4'];
                        echo '</label>';
                        echo '</div>'; 
                        $count++;
                           
                    }
                    
                   
                //}// if kviz
    //}
    elseif ($test9 < $del) {echo "<script>alert('Na ta kviz še niste dodali dovolj vprašanj') ; window.location.href = 'all_quizes.php'</script>";
        /*echo '<div style="text-align: center">';
                echo '<h1 style=text-align:center;> Na ta kviz še niste dodali zadosti vprašanj!</h1>';
        echo "<a style=text-align:center; href=\"javascript:history.go(-1)\">POJDI NAZAJ</a>";
        echo '</div>';*/
    
    }
        

                  elseif ($del === 0) {
        echo "<script>alert('Na ta kviz še niste dodali dovolj vprašanj') ; window.location.href = 'all_quizes.php'</script>";              
        /*echo '<div style="text-align: center">';
        echo '<h1 style=text-align:center;> Na ta kviz še niste dodali zadosti vprašanj!</h1>';
        echo "<a style=text-align:center; href=\"javascript:history.go(-1)\">POJDI NAZAJ</a>";
        echo '</div>';*/
}      
    
    while($stevec <= $del) {
        $stevec++;
        $rezultat = mysqli_fetch_array($result);         
            if ($rezultat['Question'] != NULL){
                if ($rezultat['ID_quizes'] == $ID_quizes){
                    
                    //if ($rezultat['since_when'] <= $current_date && $rezultat['until'] >= $current_date ){
                        echo '<h3 style = "text-align: center">';
                        echo $rezultat['Question'];
                        echo '</h3>';
                        echo '<input type="hidden" name="ID_quizes" value ='.$rezultat['ID_quizes'].'>';
                        echo '<input type="hidden" name="b[]" value ='.$rezultat['ID_questions'].'>';
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer1'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer1'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer2'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer2'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']"value ="'.$rezultat['answer3'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer3'];
                        echo '</label>';
                        echo '</div>';
                        $count++;
                        echo '<div style = "text-align:center">';
                        echo '<input type="checkbox" name="a[]" id="['.$count.']" value ="'.$rezultat['answer4'].' "/>';
                        echo '<label for="['.$count.']">'.$rezultat['answer4'];
                        echo '</label>';
                        echo '</div>'; 
                        $count++;
                            
                    }
                   
                }// if kviz
                
        }//while($stevec <= $del);
    //}//if vprasanje
        if ($test9 != 0 && $test9 >= $del){
        echo '<input type="submit" value="Oddajte kviz" />';}

    echo '</form>';
    
    echo '<script>var arrayFromPhp = ' . json_encode($del) . ';</script>';
?>


       
 <?php
  
     include_once './footer.php';
    ?>

    