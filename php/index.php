<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel=stylesheet href=../css/index.css>
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include "menu.php"; ?>
    <input type="text" div class="zoekbalk">
    <div class="filter">
        <h2>filter</h2>
        <form action="action_page.php">
            <input type="checkbox" id="filter" name="2D" value="2D">
            <label for="2D">2D</label><br>
            <input type="checkbox" id="filter" name="3D" value="3D">
            <label for="3D">3D</label><br>
            <input type="checkbox" id="filter" name="fps" value="fps">
            <label for="fps">fps</label><br>
            <input type="checkbox" id="filter" name="indie" value="indie">
            <label for="indie">indie</label><br>
            <input type="checkbox" id="filter" name="open world" value="open world">
            <label for="open world">open world</label><br>
            <input type="checkbox" id="filter" name="race" value="race">
            <label for="race">race</label><br>
            <input type="checkbox" id="filter" name="rpg" value="rpg">
            <label for="rpg">rpg</label><br>
            <input type="checkbox" id="filter" name="shooter" value="shooter">
            <label for="shooter">shooter</label><br>
            <input type="checkbox" id="filter" name="tycoon" value="tycoon">
            <label for="tycoon">tycoon</label><br>
        </form>
    </div>
    <div class="games">
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

$sql = "SELECT Naam, Beschrijving, Prijs, Genre FROM games ORDER BY Naam desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Naam: " . $row["Naam"]. "<br>Beschrijving: " . $row["Beschrijving"]. "<br>" . "Prijs:" .$row["Prijs"]. "<br>" .$row["Genre"]. "<br><br>"
;
  }
} else {
  echo "er is hier niks";
}
$conn->close();

?>
    </div>
</body>
</html>