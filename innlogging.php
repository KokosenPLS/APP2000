
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>GreenBook</title>
  </head>
  <body>
    <div class="helesiden">
      <div class="boks">
        <div class="logo1">
          <a href="index.php">GreenBook</a>
        </div>
        <div class="tekst">
          <form class="login" action="kobling/login.php" method="post">
            <input name="epost" type="text" placeholder="E-post" />
            <input name="passord" type="password" placeholder="Passord" /><br>
            <button name="logginn-knapp" type="submit">Logg inn</button><br><br><br><br>
            <a href="glemtpassord.php">Glemt passord?</a><br><br><br>
          </form>
          <div class="strek">
          </div>
          <form class="lagny" action="registrering.php" method="post"><br>
            <button name="">Lag ny konto</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
