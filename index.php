<?php
include_once "./header.php";
?>

<h1 style="text-align: center">Pozdravljeni na kvizu,</h1>

<?php
    if ($_SESSION == NULL){
        echo "<div style=\"text-align:center\">";
        echo "Ne morate delati veliko, če niste prijavljeni, prosim da se prijavite oziroma registrirate.";
    }
    else {
        echo "<div style=\"text-align:center\">";
        if ($_SESSION['first_name']){
            echo $_SESSION['first_name'];
        }
        else {
            echo  $_SESSION['username']; 
        }
               
    }
?>

<?php
/*
    echo "<div style=\"text-align:center\">";
    echo  $_SESSION['fullname'];
 */
?>

<?php
include_once './footer.php';
?>