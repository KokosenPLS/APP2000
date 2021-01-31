<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    if (isset($_POST['registrert'])) {

      require 'kob.php';

      $navn = $_POST['navn'];
      $tlf = $_POST['telefon'];
      $dato = $_POST['date'];
      $epost = $_POST['epost'];
      $passord = $_POST['passord'];
      $bpassord = $_POST['bpassord'];


      if (empty($navn) || empty($tlf) || empty($dato) || empty($epost) || empty($passord) || empty($bpassord)){
        header("Location: ../innlogging.php?error=tommefelt");
        exit();
      } else if ($passord != $bpassord) {
        header("Location: ../innlogging.php?error=passord_samsvarer_ikke");
      } else {
            $sql = "INSERT INTO person (navn, tlf, fdato, epost, profilbilde) VALUES ('$navn', $tlf, '$dato', '$epost', '')";
            if ($conn->query($sql) === TRUE) {
              $sql1 = "INSERT INTO innlogging (epost, passord) VALUES ('$epost', '$passord')";
                if ($conn->query($sql1) === TRUE) {
                  header("Location: ../index.php?registrering_vellykket");
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                  exit();
                  }
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                exit();
                }
        }
        } else {
          exit();
        }


?>
  </body>
</html>
