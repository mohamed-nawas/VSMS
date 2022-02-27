<?php
  if (isset($_POST['add-mechanic-submit'])) {
    require 'dbh.inc.php';

    $mechanicname = $_POST['add-mechanic-name'];
    $mechanicaddress = $_POST['add-mechanic-address'];
    $mechanicmobile = $_POST['add-mechanic-mobile'];

    if (empty($mechanicname) || empty($mechanicaddress) || empty($mechanicmobile)) {
      header("Location: ../add-mechanic.php?error=emptyfields");
      exit();
    }
    else {
      $sql = "INSERT INTO mechanic (Name, Address, Mobile) VALUES (?, ?, ?)";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../add-mechanic.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "sss", $mechanicname, $mechanicaddress, $mechanicmobile);
        mysqli_stmt_execute($stmt);
        header("Location: ../add-mechanic.php?success=detailssaved");
        exit();
      }
    }
  }
  else {
    header("Location: ../add-mechanic.php");
    exit();
  }
