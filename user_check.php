<?php

include_once './database.php';
//prenesemo podatke iz sign upa.
$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

if ((!empty($email))&&(!empty($pass1))&&($pass1 == $pass2)) {
    //geslu dodam "začimbo"
    $query2 = "SELECT * FROM users";
    $rezultat = mysqli_query($link, $query2);
    $stevilo = mysqli_fetch_array($rezultat);
    // preverimo če je prvi uporabnik, potem ga dodamo avtomatsko za admina.
    if ( $stevilo['ID_users'] == NULL){
        $pass1 = $salt.$pass1;
        //geslo zakodiram
        $pass1 = sha1($pass1);
        $query = sprintf("INSERT INTO users (Username,email, pass, Admin) "
                . " VALUES('%s','%s','$pass1', 1)",
                mysqli_real_escape_string($link, $username),
                mysqli_real_escape_string($link, $email));

        mysqli_query($link, $query);
    }
 else {
    $pass1 = $salt.$pass1;
    //geslo zakodiram
    $pass1 = sha1($pass1);
    $query = sprintf("INSERT INTO users (Username,email, pass) "
            . " VALUES('%s','%s','$pass1')",
            mysqli_real_escape_string($link, $username),
            mysqli_real_escape_string($link, $email));
    
    mysqli_query($link, $query);
    }

}

header("Location: index.php"); 
?>