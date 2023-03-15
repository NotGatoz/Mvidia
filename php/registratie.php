<!DOCTYPE html>
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
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="email invullen" name="email" id="email" required>
    <label for="psw"><b>wachtwoord</b></label>
    <input type="wachtwoord" placeholder="wachtwoord invullen" name="psw" id="psw" required>
    <label for="psw-repeat"><b>herhaal wachtwoord</b></label>
    <input type="wachtwoord" placeholder="wachtwoord herhalen" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <button type="register" class="registreerbtn">registreren</button>
  </div>
  <div class="container login">
    <p>heb je al een account? <a href="../php/inlog.php">inloggen</a>.</p>
  </div>
    
</body>
</html>