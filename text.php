<?php

    include_once './database.php';
    include_once './session.php';
    $ID_user = $_SESSION['user_id'];
    $test = "SELECT * FROM users WHERE ID_users = $ID_user";
    $test2 = mysqli_query($link, $test);
    $test3 = mysqli_fetch_array($test2);
    //$test3['text'] != NULL;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $surname = $_POST['surname'];


    $query = sprintf("UPDATE users SET Name ='$name', text = '$message', Surname = '$surname' WHERE ID_users = $ID_user");
    $result = mysqli_query($link, $query);
    header("Location: index.php");

?>
