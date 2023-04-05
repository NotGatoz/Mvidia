<?php if(session_status() !== PHP_SESSION_ACTIVE) session_start(); ?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'connect.php';
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $Wachtwoord = mysqli_real_escape_string($conn, $_POST['Wachtwoord']);
        error_reporting(E_ERROR | E_PARSE);
        $result = mysqli_query($conn, "SELECT * FROM gebruikers WHERE Email = '$Email' and Wachtwoord = '$Wachtwoord'")
        or die("Failed".mysqli_error());
        $row = mysqli_fetch_array($result);

        if ($row['Email'] == $Email && $row['Wachtwoord'] == $Wachtwoord) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['email'] = $row['Email'];
            $_SESSION['Voornaam'] = $row['Voornaam'];
            header("location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php';?>
    <body>
        <div class="box-inlog"> 
            <div class="name-box-for-text-login">
                <div class="name-box-text">
                    Login
                </div>
            </div>
            <div class="text-box-login">
                <form method="post">
                    <text class="text-login">Email</text><br>
                    <input type="Email" maxlength="49" name="Email" class="text-box" placeholder="Email" required><br>
                    <text class="text-login">Wachtwoord</text><br>
                    <input type="password" maxlength="49" name="Wachtwoord" class="text-box" placeholder="Wachtwoord" required><br>
                    <button class="inloggen-Button" type="Inloggen" Inloggen="Inloggen">Inloggen</button>
                </form>
                <a href="registratie.php" class="register-login">Register</a>
            </div>
        </div>
    </body>
</html>

<div class="footer">
</div>
</div>
</body>
</html>