<?php
  require 'includes/dbh.inc.php';
  if (isset($_POST['row1-view-invoice']) || isset($_POST['row2-view-invoice']) || isset($_POST['row3-view-invoice']) || isset($_POST['row4-view-invoice']) || isset($_POST['row5-view-invoice']) || isset($_POST['row6-view-invoice']) || isset($_POST['row7-view-invoice'])) {
    $invoiceid = $_POST['invoice-id'];
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../payments.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle_type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name, address, mobile FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../payments.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $fullname = $row1['full_name'];
        $address = $row1['address'];
        $mobile = $row1['mobile'];
      }
    }

    $sql2 = "SELECT parts_charge, service_charge FROM invoice WHERE id=?";
    $stmt2 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt2, $sql2)) {
      header("Location: ../payments.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt2, "s", $invoiceid);
      mysqli_stmt_execute($stmt2);
      $result2 = mysqli_stmt_get_result($stmt2);
      if ($row2 = mysqli_fetch_assoc($result2)) {
        $subtotal = $row2['parts_charge'];
        $servicecharge = $row2['service_charge'];
        $subtotalint = $subtotal + 0;
        $servicechargeint = $servicecharge + 0;
        $total = $subtotalint + $servicechargeint;
      }
    }
  }

  else if (isset($_POST['row8-view-invoice']) || isset($_POST['row9-view-invoice']) || isset($_POST['row10-view-invoice'])) {
    $invoiceid = $_POST['invoice-id'];
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../payments.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle_type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name, address, mobile FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../payments.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $fullname = $row1['full_name'];
        $address = $row1['address'];
        $mobile = $row1['mobile'];
      }
    }

    $sql2 = "SELECT parts_charge, service_charge FROM invoice WHERE id=?";
    $stmt2 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt2, $sql2)) {
      header("Location: ../payments.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt2, "s", $invoiceid);
      mysqli_stmt_execute($stmt2);
      $result2 = mysqli_stmt_get_result($stmt2);
      if ($row2 = mysqli_fetch_assoc($result2)) {
        $subtotal = $row2['parts_charge'];
        $servicecharge = $row2['service_charge'];
        $subtotalint = $subtotal + 0;
        $servicechargeint = $servicecharge + 0;
        $total = $subtotalint + $servicechargeint;
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container" style="margin: 50px auto;">
      <div class="row">
        <div class="col" style="text-align: center;">
          <h2>JK AutoCare</h2>
          <p>227 Abia Martin Drive, Commack, New York</p>
          <p>https://jkautocare.com  |  adminjka@gmail.com</p>
          <p>+631-493-2862</p><br>
        </div>
      </div>

      <div class="row">
        <div class="col" style="text-align: center;">
          <h4>INVOICE</h4>
          <p>No : <?php echo $invoiceid ?></p><br>
        </div>
      </div>

      <div class="row">
        <div class="col" style="text-align: center;">
          <h4>BILLED TO : </h4>
          <p>Mr. <?php echo $fullname ?></p>
          <p><?php echo $address ?></p>
          <p><?php echo $mobile ?></p>
          <p><?php echo $mail ?></p><br>
        </div>
      </div>

      <div class="row">
        <div class="col" style="text-align: center;">
          <h4>ORDER DETAILS : </h4>
          <table style="width: 100%; margin-left: -100px;">
            <tr>
              <td>Vehicle Type</td>
              <td><?php echo $vehicletype ?></td>
            </tr>
            <tr>
              <td>Vehicle Name</td>
              <td><?php echo $vehiclename ?></td>
            </tr>
            <tr>
              <td>Vehicle Model</td>
              <td><?php echo $vehiclemodel ?></td>
            </tr>
            <tr>
              <td>Vehicle Brand</td>
              <td><?php echo $vehiclebrand ?></td>
            </tr>
            <tr>
              <td>Vehicle Registration No</td>
              <td><?php echo $vehicleregno ?></td>
            </tr>
            <tr>
              <td>Vehicle Service Date</td>
              <td><?php echo $servicedate ?></td>
            </tr>
          </table><br>
          <table style="width: 30%; margin-left: 670px;">
            <tr>
              <td>Sub Total</td>
              <td><?php echo $subtotal ?></td>
            </tr>
            <tr>
              <td>Additional Charges</td>
              <td><?php echo $servicecharge ?></td>
            </tr>
            <tr>
              <td>Total</td>
              <td style="border: 1px solid black;"><?php echo $total ?></td>
            </tr>
          </table><br>
        </div>
      </div>

      <div class="row">
        <div class="col" style="text-align: center;">
          <h5>Please pay the invoice within 15 days</h5>
          <h6>All rights reserved to cleancodeonline.org</h6>
        </div>
      </div>
    </div>
  </body>
</html>
