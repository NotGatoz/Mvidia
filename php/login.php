<!DOCTYPE html>
<html>
   <head> 
    <title>Apotheek</title>
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

  <?php include_once "header.php" ?>
<div class="main">
1
<p></p><br>



    <div class="box-register"> 
           
                    <div class="name-box-for-text-login">
                <div class="name-box-text">
                    Login
                </div>
            </div>
            <div class="text-box-login">
                <form action="logindb.php" method="post">
                    <text class="text-login">Emailadres</text><br>
                    <input type="email" maxlength="49" name="Emailadres" class="text-box" placeholder="Emailadres"><br>
                    <text class="text-login">Wachtwoord</text><br>
                    <input type="password" maxlength="49" name="Wachtwoord" class="text-box" placeholder="Wachtwoord"><br>
                    <a href="" class="wachtwoord-vergeten">Wachtwoord vergeten?</a><br>
                    <button class="inloggen-Button" type="Inloggen" Inloggen="Inloggen">Inloggen</button>
                </form>
                <a href="register.php" class="register-login">Register</a>
            </div>
        </div>
    

        






<div class="footer">
Pharmeon | Beheer
info@apotheekschagen.nl
Privacy - Voorwaarden
</div>
</div>
</body>
</html>