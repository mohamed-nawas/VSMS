<?php
  if (isset($_POST['completed-order-bill-details-view-submit'])) {
    require 'dbh.inc.php';

    $orderid = $_POST['order-id'];
    $sparepartcharge = $_POST['spare-part-charge'];
    $sparepartchargeint = $sparepartcharge + 0;
    $servicecharge = $_POST['service-charge'];
    $servicechargeint = $servicecharge + 0;
    $remarks = $_POST['remarks'];
    $billstatus = "billed";
    $invoicestatus = "not-payed";

    if ($remarks == "") {
      $remarks = "";
      $sql = "INSERT INTO invoice (order_id, parts_charge, service_charge, remarks, invoice_status) VALUES (?, ?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../completed-order-bill-details-view.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "siiss", $orderid, $sparepartchargeint, $servicechargeint, $remarks, $invoicestatus);
        mysqli_stmt_execute($stmt);
      }

      $sql1 = "UPDATE services SET bill_status=? WHERE id=?";
      $stmt1 = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt1, $sql1)) {
        header("Location: ../completed-order-bill-details-view.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt1, "ss", $billstatus, $orderid);
        mysqli_stmt_execute($stmt1);
        header("Location: ../completed-order-bill-details-view.php?success=detailssaved");
        exit();
      }
    }
    else {
      $sql = "INSERT INTO invoice (order_id, parts_charge, service_charge, remarks, invoice_status) VALUES (?, ?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../completed-order-bill-details-view.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "siiss", $orderid, $sparepartchargeint, $servicechargeint, $remarks, $invoicestatus);
        mysqli_stmt_execute($stmt);
      }



      $sql1 = "UPDATE services SET bill_status=? WHERE id=?";
      $stmt1 = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt1, $sql1)) {
        header("Location: ../completed-order-bill-details-view.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt1, "ss", $billstatus, $orderid);
        mysqli_stmt_execute($stmt1);
        header("Location: ../completed-order-bill-details-view.php?success=detailssaved");
        exit();
      }
    }
  }

  else {
    header("Location: ../index.php");
    exit();
  }
