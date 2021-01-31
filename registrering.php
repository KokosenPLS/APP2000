<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <title>GreenBook</title>
  </head>
  <body>
    <div class="helesiden">
      <div class="boks">
        <div class="logo2">
          <a href="index.php">GreenBook</a>
        </div>
        <div class="tekst2">
          <form class="login" action="kobling/reg.php" method="post">
            <input name="navn" type="text" placeholder="Fullt navn" />
            <input name="telefon" type="text" placeholder="Telefonnummer" />
            <input name ="date" type="date" value="<?php echo date('Y-m-d'); ?>" />
            <input name="epost" type="text" placeholder="E-post" />
            <input name="passord" type="password" placeholder="Passord" />
            <input name="bpassord" type="password" placeholder="Gjenta passord" />
            <button name="registrert" type="submit">Registrer deg</button>
        </div>
      </div>
    </div>
  </body>
</html>
