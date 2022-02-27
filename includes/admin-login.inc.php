<?php
  if (isset($_POST['admin-login-submit'])) {
    $mail = $_POST['mail-admin'];
    $password = $_POST['pwd-admin'];

    if (empty($mail) || empty($password)) {
      header("Location: ../admin-login.php?error=emptyfields");
      exit();
    }
    else {
      if ($mail == "admin@cleancodeonline.org" && $password == "admin") {
        header("Location: ../admin-dashboard.php");
        exit();
      }
      else {
        header("Location: ../admin-login.php?error=invaliduser");
        exit();
      }
    }
  }

  else {
    header("Location: ../index.php");
    exit();
  }
