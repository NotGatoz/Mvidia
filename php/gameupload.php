<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game verkopen</title>
    <link rel=stylesheet href=../css/gameupload.css>
</head>
<body>
<?php include 'header.php'; ?>
<div class="submit">
  <form action="upload.php" method="POST">
    <label for="fname">naam</label>
    <input type="text" id="fname" name="Naam" placeholder="Plaats hier de naame van de game"><br>
    <label for="lname">beschrijving</label>
    <input type="text" id="lname" name="Beschrijving" placeholder="Plaats hier een beschrijving van game"><br>
    <label for="email">prijs</label>
    <input type="text" id="email" name="Prijs" placeholder="Plaats hier de prijs"><br>
    <label for="genre">genre</label>
    <input type="text" id="genre" name="Genre" placeholder="Genre"><br>
    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>