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


	$Voornaam = 	$_POST['voornaam'];
	$Achternaam = 	$_POST['achternaam'];
	$Email = 		$_POST['email'];
	$Wachtwoord = 	$_POST['wachtwoord'];
	
	$sql = "INSERT INTO `gebruikers` (`ID`, `Voornaam`, `Achternaam`, `Email`, 'Wachtwoord') VALUES (NULL, '$Voornaam', '$Achternaam', '$Email', $Wachtwoord)";
	$result = $conn->query($sql);

    header("Location:login.php");
?>