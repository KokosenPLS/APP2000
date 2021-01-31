<?php

  if (isset($_POST['logginn-knapp'])) {

    require 'kob.php';

    $epost = $_POST['epost'];
    $passord = $_POST['passord'];


    if (empty($epost) || empty($passord)) {
      header("Location: ../innlogging.php?error=tommefelt");
      exit();
    }
    else {
      $sql = "SELECT * FROM innlogging i, person p WHERE i.epost = p.epost AND i.epost = '$epost'";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../innlogging.php?error=sqlfeil");
        exit();
      }
      else {

        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          if ($passord !== $row['passord']) {
            header('Location:../innlogging.php?=feilpassord');
          }
          else if ($passord == $row['passord']) {
            session_start();
            $_SESSION['epost'] = $row['epost'];
            $_SESSION['fornavn'] = $row['fornavn'];
            $_SESSION['id'] = $row['pnr'];

            header("Location: ../index.php?logget_inn");
            exit();
          }
          else {
            header("Location: ../innlogging.php?error=feilpassord2");
            exit();
          }
        }
        else {
          header("Location: ../innlogging.php?error=ingenbruker");
          exit();
        }

      }
    }

  }
  else {
    header("Location: ../innlogging.php");
    exit();
  }
 ?>
