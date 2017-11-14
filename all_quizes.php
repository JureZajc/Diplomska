<?php
    include_once './header.php';
    include_once './database.php';
?>
<h1 style="text-align: center">Vsi kvizi ki so na voljo ta hip</h1>
<div id ="test2">
    
<table id="test">
    <tr>
        <td>Ime kviza</td>
        <td>Reši kviz</td>
        <td>Odprt od</td>
        <td>Do kdaj bo kviz trajal</td>
        <td>Število vprašanj</td>
    </tr>
<?php
    $query = "SELECT * FROM quizes";
    $result = mysqli_query($link, $query);
    $current_date = date('Y-m-d');
    while ($user = mysqli_fetch_array($result)) {   
        if ($user['since_when'] <= $current_date && $user['until'] >= $current_date ){
        echo '<tr>';
        echo '<td>'.$user['quiz_name'].'</td>';
        echo '<td>';
        echo '<a href="quiz2.php?id='.$user['ID_quizes'].'" >Reši kviz</a> ';
        echo '</td>';
        echo '<td>'.$user['since_when'].'</td>';
        echo '<td>'.$user['until'].'</td>';
        echo '<td>'.$user['nmb_question'].'</td>';
       /* echo '<a href="game_score.php?id='.$game['ID_games'].'" >Add your score</a> ';
        echo '<br>';
        echo '<br>';
        echo '<a href="scores.php?id='.$game['ID_games'].'"> See high scores </a>';
        echo '</td>';*/
        echo '</tr>';
        }
    }
?>
</table>
</div>




<div>
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  -->
<button name="create_excel" id="create_excel">Izvozi v Excel </button>
</div>
 <script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
           var excel_data = $('#test2').html();  
           var page = "excel.php?data=" + excel_data;  
           window.location = page;  
      });  
 });  
 </script>
<?php
include_once './footer.php';