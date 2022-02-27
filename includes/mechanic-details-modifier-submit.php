<?php
  require 'dbh.inc.php';

  if (isset($_POST['mechanic-details-modify-save'])) {
    $mechanicid = $_POST['mechanic-id'];
    $mechanicname = $_POST['mechanic-name'];
    $mechanicaddress = $_POST['mechanic-address'];
    $mechanicmobile = $_POST['mechanic-mobile'];

    $sql = "UPDATE mechanic SET Name=?, Address=?, Mobile=? WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../mechanic-details-modify.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ssss", $mechanicname, $mechanicaddress, $mechanicmobile, $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../mechanic-details-modify.php?success=detailssaved&name=".$mechanicname."&address=".$mechanicaddress."&mobile=".$mechanicmobile);
      exit();
    }
  }

  else {
    header("Location: ../mechanic-details-modify.php");
    exit();
  }
