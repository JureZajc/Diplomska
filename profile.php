<?php
    include_once './session.php';
    include_once './database.php';
    $pass3 = $_POST['pass3'];
    $pass4 = $_POST['pass4'];
    $user_id = $_SESSION['user_id'];
    $old_pass = $_POST['old_pass'];
    $old_pass = $salt.$old_pass;
    $old_pass = sha1($old_pass);
    $query = "SELECT * FROM users WHERE id_users=$user_id AND pass='$old_pass'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) == 1){
        if ((!empty($pass3))&&($pass3 == $pass4)){
        $pass3 = $salt.$pass3;
        $pass3 = sha1($pass3);
    
        $query = "UPDATE users SET pass='$pass3' WHERE id_users=$user_id";
        mysqli_query($link, $query);
    }
    header("Location: index.php");  
    
}
