<?php

  if (isset($_POST['pending-orders-details-view-submit'])) {
    require 'dbh.inc.php';

    $id = $_POST['order-id'];
    $mechanicname = $_POST['mechanic'];
    $servicecomplete = "complete";
    $markcomplete = false;
    if (isset($_POST['mark-complete'])) {
      $markcomplete = true;
    }

    if (!$markcomplete) {
      $sql = "UPDATE services SET mechanic=? WHERE id=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../pending-orders-details-view.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ss", $mechanicname, $id);
        mysqli_stmt_execute($stmt);

        header("Location: ../pending-orders-details-view.php?success=detailssaved");
        exit();
      }
    }
    else {
      $sql = "UPDATE services SET mechanic=?, service_status=? WHERE id=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../pending-orders-details-view.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "sss", $mechanicname, $servicecomplete, $id);
        mysqli_stmt_execute($stmt);

        header("Location: ../pending-orders-details-view.php?success=detailssaved");
        exit();
      }
    }

  }
  else {
    header("Location: ../index.php");
    exit();
  }
