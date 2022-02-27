<?php
  require 'dbh.inc.php';

  if (isset($_POST['service-request-submit'])) {
    $licensecheck = false;
    if (isset($_POST['license-check'])) {
      $licensecheck = true;
    }
    $requestmail = $_POST['request-email'];
    $servicedate = date('yy-m-d', strtotime($_POST['service-date']));
    $vehicletype = $_POST['vehicle-type'];
    $vehiclename = $_POST['vehicle-name'];
    $vehiclemodel = $_POST['vehicle-model'];
    $vehiclebrand = $_POST['vehicle-brand'];
    $vehicleregno = $_POST['vehicle-regno'];
    $deliverytype = $_POST['delivery-type'];
    $dropaddress = $_POST['address'];
    $servicestatus = "incomplete";
    $requeststatus = "pending";
    $deliverystatus = "not-delivered";
    $billstatus = "not-billed";

    if (empty($requestmail)) {
      header("Location: ../index.php");
      exit();
    }

    else {
      if ($licensecheck == false) {
        header("Location: ../service-request-form.php?error=invalidlicensecheck");
        exit();
      }

      else {
        if (empty($vehicletype) || empty($vehiclename) || empty($vehiclemodel) || empty($vehiclebrand) || empty($vehicleregno) || empty($servicedate) || empty($deliverytype)) {
          header("Location: ../service-request-form.php?error=emptyfields");
          exit();
        }
        else {
          if ($dropaddress == null) {
            $sql = "INSERT INTO services (request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date, delivery_type, service_status, request_status, delivery_status, bill_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../service-request-form.php?error=sqlerror");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt, "ssssssssssss", $requestmail, $vehicletype, $vehiclename, $vehiclemodel, $vehiclebrand, $vehicleregno, $servicedate, $deliverytype, $servicestatus, $requeststatus, $deliverystatus, $billstatus);
              mysqli_stmt_execute($stmt);
              header("Location: ../service-request-form.php?success=detailssaved");
              exit();
            }
          }
          else {
            $sql = "INSERT INTO services (request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date, delivery_type, drop_address, service_status, request_status, delivery_status, bill_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../service-request-form.php?error=sqlerror");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt, "sssssssssssss", $requestmail, $vehicletype, $vehiclename, $vehiclemodel, $vehiclebrand, $vehicleregno, $servicedate, $deliverytype, $dropaddress, $servicestatus, $requeststatus, $deliverystatus, $billstatus);
              mysqli_stmt_execute($stmt);
              header("Location: ../service-request-form.php?success=detailssaved");
              exit();
            }
          }
        }
      }
    }
  }

  else {
    header("Location: ../index.php");
    exit();
  }
