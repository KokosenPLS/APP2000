<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    if (isset($_POST['registrert'])) {

      require 'kob.php';

      $fnavn = $_POST['fnavn'];
      $enavn = $_POST['enavn'];
      $dato = $_POST['date'];
      $epost = $_POST['epost'];
      $passord = $_POST['passord'];
      $bpassord = $_POST['bpassord'];


      if (empty($fnavn) || empty($enavn) || empty($dato) || empty($epost) || empty($passord) || empty($bpassord)){
        header("Location: ../innlogging.php?error=tommefelt");
        exit();
      } else if ($passord != $bpassord) {
        header("Location: ../innlogging.php?error=passord_samsvarer_ikke");
      } else {
            $sql = "CALL LeggTilBruker('$fnavn', '$enavn', '$dato', '$epost', '$bpassord')";
            if ($conn->query($sql) === TRUE) {
                if ($conn->query($sql) === TRUE) {
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
