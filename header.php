<?php
    include_once './session.php';
    include_once './database.php';
    
    
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->    
<html>
            <head>
                    <title>Diplomska naloga</title>
                    <meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1" />
                    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                    <link rel="stylesheet" href="assets/css/main.css" />
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
                     
            </head>
            <body>

                    <!-- Page Wrapper -->
                            <div id="page-wrapper">

                                    <!-- Header -->
                                            <header id="header" class="alt">
                                                    <h1><a href="index.php">Diplomska naloga</a></h1>
                                                    <nav>
                                                            <a href="#menu">Meni</a>
                                                    </nav>
                                            </header>

                                    <!-- Menu -->
                                            <nav id="menu">
                                                    <div class="inner">
                                                            <h2>Meni</h2>
                                                            <?php

                                                                if ($_SESSION) {
                                                                    $user_id = $_SESSION['user_id'];
                                                                    $queryAdmin = "SELECT * FROM users WHERE ID_users = $user_id";
                                                                    $resultAdmin = mysqli_query($link, $queryAdmin);
                                                                    $resultAdmin2 = mysqli_fetch_array($resultAdmin);
                                                                    if ($resultAdmin2['Admin'] != NULL){

                                                                    
                                                                        echo '<li><a href="index.php">Domov</a></li>';
                                                                        echo '<li><a href="all_results.php">Preveri svoje rezultate</a></li>';
                                                                        echo '<li><a href="all_results_admin.php">Preveri rezultate vseh študentov</a></li>';
                                                                        echo '<li><a href="quiz_result.php">Preveri rezultate posameznih kvizov</a></li>';
                                                                        echo '<li><a href ="edit_profile.php"> Uredi profil </a></li>';
                                                                        echo '<li><a href ="add_question.php"> Dodaj vprašanje </a></li>';
                                                                        echo '<li><a href ="type_question.php"> Dodaj tip kviza</a></li>';
                                                                        echo '<li><a href ="all_quizes.php"> Pregled vseh kvizov </a></li>';
                                                                        echo '<li><a href ="edit_question.php"> Uredi vprašanje</a></li>';                                                                  
                                                                        echo '<li><a href ="edit_quizes.php"> Uredi kviz </a></li>';                                                                  
                                                                        echo '<li><a href="./make_admin.php"> Dodaj skrbnika </a></li>';
                                                                        echo '<li><a href="./check_messages.php"> Preveri sporočila </a></li>';

                                                                        echo '<li><a href="./logout.php"> Odjava </a></li>';
                                                                    }
                                                                    else {
                                                                        echo '<li><a href="index.php">Domov</a></li>';
                                                                        echo '<li><a href ="all_quizes.php"> Pregled vseh kvizov </a></li>';
                                                                        echo '<li><a href="all_results.php">Preveri svoje rezulate</a></li>';
                                                                        echo '<li><a href ="edit_profile.php"> Uredi profil </a></li>';
                                                                        echo '<li><a href="./logout.php"> Odjava </a></li>';
                                                                    }
                                                                }
                                                                else {
                                                                    echo '<li><a href="./login.php">Prijava</a></li>';
                                                                    echo '<li><a href="./add_user.php">Registracija</a></li>';
                                                                }
                                                                ?>
                                                            <a href="#" class="close">Zapri</a>
                                                    </div>
                                            </nav>

                                    <!-- Banner -->
                                            <section id="banner">
                                                    <div class="inner">
                                                        <div class="logo"><span class="icon fa-diamond"></span></div>
                                                            <h2>Diplomska naloga - ZAJC - kviz</h2>
                                                           
                                                    </div>
                                            </section>
                            </div>

