<?php

if (isset($_POST['login-submit'])) {
  require 'dbh.inc.php';

  $mail = $_POST['mail'];
  $password = $_POST['pwd'];

  if (empty($mail) || empty($password)) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdcheck = password_verify($password, $row['pwd']);
        if ($pwdcheck == false) {
          header("Location: ../login.php?error=wrongpwd");
          exit();
        }
        else if ($pwdcheck == true) {
          session_start();
          $_SESSION['fullname'] = $row['full_name'];
          $_SESSION['usermail'] = $row['email'];
          $_SESSION['mobile'] = $row['mobile'];
          $_SESSION['address'] = $row['address'];
          header("Location: ../dashboard.php?success=login");
          exit();
        }
      }
      else {
        header("Location: ../login.php?error=nouser");
        exit();
      }
    }
  }
}

else {
  header("Location: ../index.php");
  exit();
}
