<?php
  if (isset($_POST['submit-contactdetails'])) {
    require 'dbh.inc.php';

    $addressUpdate = $_POST['address'];
    $addressUpdate = $addressUpdate."-".$_POST['city'];
    $addressUpdate = $addressUpdate."-".$_POST['country'];
    $loggedmail = $_POST['logged-mail'];

    if (empty($_POST['address']) || empty($_POST['city']) || empty($_POST['country'])) {
      header("Location: ../profile.php?error=emptycontactfields");
      exit();
    }

    else {
      $sql = "UPDATE users SET address=? WHERE email=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../profile.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ss", $addressUpdate, $loggedmail);
        mysqli_stmt_execute($stmt);

        header("Location: ../profile.php?success=contactdetailsupdated");
        exit();
      }

      mysqli_stmt_close($stmt);
      mysqli_close($conn);
    }
  }

  else {
    header("Location: ../profile.php");
    exit();
  }
