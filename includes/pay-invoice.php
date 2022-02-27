<?php
  require 'dbh.inc.php';

  if (isset($_POST['row1-pay-invoice']) || isset($_POST['row2-pay-invoice']) || isset($_POST['row3-pay-invoice']) || isset($_POST['row4-pay-invoice']) || isset($_POST['row5-pay-invoice']) || isset($_POST['row6-pay-invoice']) || isset($_POST['row7-pay-invoice'])) {
    $invoiceid = $_POST['invoice-id'];

    $sql = "SELECT parts_charge, service_charge FROM invoice WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../payments.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $invoiceid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $partscharge = $row['parts_charge'];
        $servicecharge = $row['service_charge'];
      }
    }
    $totalcharge = $partscharge + $servicecharge;
    $invoicename = "Vehicle Service";

    header("Location: ../payment-view.php?id=".$invoiceid."&name=".$invoicename."&charge=".$totalcharge);
    exit();
  }

  else {
    header("Location: ../index.php");
    exit();
  }
