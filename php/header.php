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

        <a class="name-header">
            <?php
                echo $_SESSION['Voornaam'];
            ?>
        </a>
        <br>
        <a href="logout.php" class="logout">
          logout
        </a>

        <?php } ?>
