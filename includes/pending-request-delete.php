<?php
  require 'dbh.inc.php';

  if (isset($_POST['row1delete'])) {
    $mail = $_POST['request-email'];
    $vehtype = $_POST['vehicle-type'];
    $vehname = $_POST['vehicle-name'];
    $vehmodel = $_POST['vehicle-model'];
    $vehbrand = $_POST['vehicle-brand'];
    $vehregno = $_POST['vehicle-regno'];
    $vehdeltype = $_POST['delivery-type'];
    $vehservicedate = date('yy-m-d', strtotime($_POST['service-date']));

    $sql = "DELETE FROM services WHERE request_email=? AND vehicle_type=? AND vehicle_name=? AND vehicle_model=? AND vehicle_brand=? AND vehicle_regno=? AND service_date=? AND delivery_type=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../pending-request.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ssssssss", $mail, $vehtype, $vehname, $vehmodel, $vehbrand, $vehregno, $vehservicedate, $vehdeltype);
      mysqli_stmt_execute($stmt);
      header("Location: ../pending-request.php?success=delete");
      exit();
    }
  }
