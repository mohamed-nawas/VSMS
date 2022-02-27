<?php
  require 'dbh.inc.php';

  if (isset($_POST['row1-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row2-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row3-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row4-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row5-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row6-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row7-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row8-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row9-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }
  else if (isset($_POST['row10-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
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
    header("Location: ../pending-orders-details-view.php?details=parse&id=".$orderid."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate);
    exit();
  }

  else {
    header("Location: ../index.php");
    exit();
  }
