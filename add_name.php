<?php
    include_once './session.php';
    include_once './database.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    //$username = $_POST['username'];
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM users WHERE id_users=$user_id"; 
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) == 1) {
        if ((!empty($name))&&(!empty($surname))){
            $query = "UPDATE users SET name = '$name', surname = '$surname'WHERE ID_users = $user_id ";
            mysqli_query($link, $query);
            
        }
     header("Location: index.php");  
        
    }
    
?>