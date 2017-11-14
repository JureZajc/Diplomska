<?php
    session_start();
    include_once './database.php';
    
    $email = $_POST['email'];
    
    $pass = $_POST['pass'];
    //zakodiram geslo, da ga lahko primerjam
    $pass = sha1($salt.$pass);
    //zaščitim poizvedbo pred sql injection
    $query = sprintf("SELECT * FROM users WHERE email='%s' "
            . " AND pass='$pass'",
            mysqli_real_escape_string($link,$email));
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) == 1) {
        //vse je ok
        $user = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $user['ID_users'];
        $_SESSION['first_name'] = $user['Name'];
        $_SESSION['last_name'] = $user['Surname'];
        $_SESSION['fullname'] = $user['Name'].' '.$user['Surname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['username'] = $user['Username'];
        
        header("Location: index.php");        
    }
    else {
        //napaka - nepravilno geslo, ali email

        header("Location: login.php");
    }
?>