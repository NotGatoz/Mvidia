<!DOCTYPE html>

<?php
    session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "marktplaats";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
    

    if(isset($_POST['Voornaam']) && isset($_POST['Wachtwoord'])){
       


		
    }


?>

<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
    <link rel=stylesheet href=../css/registratie.css>

</head>
<body>
  <?php include'../php/header.php'?>
  <div class="container">
    <h1>registreren</h1>
    <p>vul alles in</p>
    <hr>
	<form method="POST" action="registratie-process.php">
    <label for="voornaam"><b>voornaam</b></label>
    <input type="text" placeholder="voornaam invullen" name="voornaam" id="Voornaam" required>
    <label for="achternaam"><b>achternaam</b></label>
    <input type="text" placeholder="achternaam invullen" name="achternaam" id="Achternaam" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="email invullen" name="email" id="Email" required>
    <label for="wachtwoord"><b>wachtwoord</b></label>
    <input type="text" placeholder="wachtwoord invullen" name="wachtwoord" id="Wachtwoord" required>
    <label for="wacht-herhaal"><b>herhaal wachtwoord</b></label>
    <input type="text" placeholder="wachtwoord herhalen" name="Wacht-herhaal" id="Wacht-herhaal" required>
    <hr>
    <button type="registreer" class="registreerbtn">registreren</button>
</form></div>
  <div class="container login">
    <p>heb je al een account? <a href="../php/inlog.php">inloggen</a>.</p>
  </div>
    
</body>
</html>