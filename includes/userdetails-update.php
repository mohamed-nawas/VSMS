<?php
  if (isset($_POST['submit-userdetails'])) {
    require 'dbh.inc.php';

    $fullnameUpdate = $_POST['full-name'];
    $loggedmail = $_POST['logged-mail'];
    $mobileUpdate = $_POST['mobile'];

    if (empty($fullnameUpdate) || empty($mobileUpdate)) {
      header("Location: ../profile.php?error=emptyuserfields");
      exit();
    }

    else if (!preg_match("/^[0-9]{10}+$/", $mobileUpdate)) {
      header("Location: ../profile.php?error=invalidphoneuser");
      exit();
    }


    $sql = "UPDATE users SET full_name=?, mobile=? WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../profile.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "sss", $fullnameUpdate, $mobileUpdate, $loggedmail);
      mysqli_stmt_execute($stmt);

      header("Location: ../profile.php?success=userdetailsupdated");
      exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

  else {
    header("Location: ../index.php");
    exit();
  }
