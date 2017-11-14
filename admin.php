<?php

    include_once './database.php';
    include_once './session.php';
    $ID_user = $_POST['ID_users'];
    $query = "UPDATE USERS SET Admin = 1 WHERE ID_users = $ID_user";
    $result = mysqli_query($link, $query);
    header("Location: index.php");
    ?>

