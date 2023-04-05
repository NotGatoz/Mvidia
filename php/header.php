<?php if(session_status() !== PHP_SESSION_ACTIVE) session_start(); ?>
<div class="header">
    <a href="../php/index.php" class="button">home</a> 
    <a href="../php/login.php" class="button">inloggen</a>
    <a href="../php/gameupload.php" class="button">verkopen</a> 
</div>
<link rel=stylesheet href=../css/index.css>
<?php

    if (isset($_SESSION['loggedIn']) && $_SESSION["loggedIn"]== true) { 
    ?>
        <div class="user">

        <a class="name-header">
            <?php
                echo $_SESSION['Voornaam'];
            ?>
        </a>
        <div class="seperator">|</div>
        <a href="logout.php" class="login-button-header">
          logout
        </a>

        </div>
    <?php } else { ?>
        <div class="user">
        <a href="registratie.php" class="login-button-header">
            register
        </a>
        <div class="seperator">|</div>
        <a href="login.php" class="login-button-header">
            login
        </a>
    <?php } ?>
