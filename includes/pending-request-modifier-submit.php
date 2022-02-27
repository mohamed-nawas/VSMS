<?php
  require 'dbh.inc.php';

  if (isset($_POST['pending-request-modifier-save'])) {
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
    $orderid = $_POST['order-id'];
    $servicestatus = "incomplete";
    $requeststatus = "pending";
    $deliverystatus = "not-delivered";

    if (empty($requestmail)) {
      header("Location: ../index.php");
      exit();
    }

    else {
      if ($licensecheck == false) {
        header("Location: ../pending-request-modifier.php?error=invalidlicensecheck&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&date=".$servicedate."&del-type=".$deliverytype);
        exit();
      }

      else {
        if (empty($vehicletype) || empty($vehiclename) || empty($vehiclemodel) || empty($vehiclebrand) || empty($vehicleregno) || empty($servicedate) || empty($deliverytype)) {

        }
        else {
          if ($deliverytype == "pickup-service") {
            // $sql = "INSERT INTO services (request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date, delivery_type, service_status, request_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = "UPDATE services SET vehicle_type=?, vehicle_name=?, vehicle_model=?, vehicle_brand=?, vehicle_regno=?, service_date=?, delivery_type=?, service_status=?, request_status=?, delivery_status=? WHERE id=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../pending-request-modifier.php?error=sqlerror");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt, "sssssssssss", $vehicletype, $vehiclename, $vehiclemodel, $vehiclebrand, $vehicleregno, $servicedate, $deliverytype, $servicestatus, $requeststatus, $deliverystatus, $orderid);
              mysqli_stmt_execute($stmt);
              header("Location: ../pending-request-modifier.php?success=detailssaved&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&date=".$servicedate."&del-type=".$deliverytype);
              exit();
            }
          }
          else if ($deliverytype == "drop-service") {
            $sql = "UPDATE services SET vehicle_type=?, vehicle_name=?, vehicle_model=?, vehicle_brand=?, vehicle_regno=?, service_date=?, delivery_type=?, drop_address=?, service_status=?, request_status=?, delivery_status=? WHERE id=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../pending-request-modifier.php?error=sqlerror");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt, "ssssssssssss", $vehicletype, $vehiclename, $vehiclemodel, $vehiclebrand, $vehicleregno, $servicedate, $deliverytype, $dropaddress, $servicestatus, $requeststatus, $deliverystatus, $orderid);
              mysqli_stmt_execute($stmt);
              header("Location: ../pending-request-modifier.php?success=detailssaved&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&date=".$servicedate."&del-type=".$deliverytype."&drop-address=".$dropaddress);
              exit();
            }
          }
        }
      }
    }
  }

  else if (isset($_POST['pending-request-modifier-confirm'])) {
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
    $orderid = $_POST['order-id'];
    $servicestatus = "incomplete";
    $requeststatus = "confirmed";
    $deliverystatus = "not-delivered";

    if (empty($requestmail)) {
      header("Location: ../index.php");
      exit();
    }

    else {
      if ($licensecheck == false) {

      }

      else {
        if (empty($vehicletype) || empty($vehiclename) || empty($vehiclemodel) || empty($vehiclebrand) || empty($vehicleregno) || empty($servicedate) || empty($deliverytype)) {

        }
        else {
          if ($deliverytype == "pickup-service") {
            // $sql = "INSERT INTO services (request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date, delivery_type, service_status, request_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = "UPDATE services SET vehicle_type=?, vehicle_name=?, vehicle_model=?, vehicle_brand=?, vehicle_regno=?, service_date=?, delivery_type=?, service_status=?, request_status=?, delivery_status=? WHERE id=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../pending-request-modifier.php?error=sqlerror");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt, "sssssssssss", $vehicletype, $vehiclename, $vehiclemodel, $vehiclebrand, $vehicleregno, $servicedate, $deliverytype, $servicestatus, $requeststatus, $deliverystatus, $orderid);
              mysqli_stmt_execute($stmt);
              header("Location: ../pending-request-modifier.php?success=detailssaved&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&date=".$servicedate."&del-type=".$deliverytype);
              exit();
            }
          }
          else if ($deliverytype == "drop-service") {
            $sql = "UPDATE services SET vehicle_type=?, vehicle_name=?, vehicle_model=?, vehicle_brand=?, vehicle_regno=?, service_date=?, delivery_type=?, drop_address=?, service_status=?, request_status=?, delivery_status=? WHERE id=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../pending-request-modifier.php?error=sqlerror");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt, "ssssssssssss", $vehicletype, $vehiclename, $vehiclemodel, $vehiclebrand, $vehicleregno, $servicedate, $deliverytype, $dropaddress, $servicestatus, $requeststatus, $deliverystatus, $orderid);
              mysqli_stmt_execute($stmt);
              header("Location: ../pending-request-modifier.php?success=detailssaved&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&date=".$servicedate."&del-type=".$deliverytype."&drop-address=".$dropaddress);
              exit();
            }
          }
        }
      }
    }
  }
