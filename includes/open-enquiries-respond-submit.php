<?php

  if (isset($_POST['open-enquiries-respond-submit'])) {
    require 'dbh.inc.php';

    $id = $_POST['enquiry-id'];
    $response = $_POST['enquiry-response'];
    $status = "closed";

    if (empty($response)) {
      header("Location: ../open-enquiries-respond.php?error=emptyfields");
      exit();
    }
    else {
      $sql = "UPDATE enquiries SET enquiry_response=?, enquiry_status=? WHERE id=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../open-enquiries-respond.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "sss", $response, $status, $id);
        mysqli_stmt_execute($stmt);
        header("Location: ../open-enquiries-respond.php?success=detailssaved");
        exit();
      }
    }
  }

  else {
    header("Location: ../index.php");
    exit();
  }
