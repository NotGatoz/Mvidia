<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
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

$Naam = $_POST['Naam'];
$Beschrijving = $_POST['Beschrijving'];
$Prijs = $_POST['Prijs'];
$Genre = $_POST['genre_id'];


$sql = "INSERT INTO games (GameID, Naam, Beschrijving, Prijs, Genre) VALUES (NULL, '$Naam', '$Beschrijving', '$Prijs', '$Genre' );";
$result = $conn->query($sql);
header('Location: index.php');
?>
</body>
</html>