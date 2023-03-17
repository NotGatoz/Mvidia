<!DOCTYPE html>
<html>
   <head> 
    <title>logindb</title>
   
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0" />
    </head>
 <body>

<?php
    session_start();
    include_once "connect.php";
    $Email = $_POST['Email'];
    $Wachtwoord = $_POST['Wachtwoord'];

    $Email = stripcslashes($Email);
    $Wachtwoord = stripcslashes($Wachtwoord);

    $result = mysqli_query($conn, "SELECT * FROM gebruikers WHERE Email = '$Email' and wachtwoord = '$Wachtwoord'")
    or die("Failed".mysqli_error());
    $row = mysqli_fetch_array($result);

    if ($row['Email'] == $Email && $row['wachtwoord'] == $Wachtwoord) {
        $_SESSION['email']=$row['Email'];
        $_SESSION['loggedIn'] = true;
        header("location: index.php");
    } else {
        header("location: login.php");
    }
?>










  </body>
</html>