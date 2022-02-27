<?php
  require 'dbh.inc.php';

  if (isset($_POST['row1-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row2-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row3-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row4-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row5-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row6-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row7-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row8-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row9-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row10-bill-details'])) {
    $orderid = $_POST['order-id'];

    $sql = "SELECT request_email, vehicle_type, vehicle_name, vehicle_model, vehicle_brand, vehicle_regno, service_date FROM services WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $orderid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $mail = $row['request_email'];
        $vehicletype = $row['vehicle-type'];
        $vehiclename = $row['vehicle_name'];
        $vehiclemodel = $row['vehicle_model'];
        $vehiclebrand = $row['vehicle_brand'];
        $vehicleregno = $row['vehicle_regno'];
        $servicedate = $row['service_date'];
      }
    }

    $sql1 = "SELECT full_name FROM users WHERE email=?";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
      header("Location: ../completed-order-bill.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt1, "s", $mail);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['full_name'];
      }
    }

    header("Location: ../completed-order-bill-details-view.php?details=parse&name=".$name."&mail=".$mail."&veh-type=".$vehicletype."&veh-name=".$vehiclename."&veh-model=".$vehiclemodel."&veh-brand=".$vehiclebrand."&veh-regno=".$vehicleregno."&service-date=".$servicedate."&id=".$orderid);
    exit();
  }

  else {
    header("Location: ../completed-order-bill.php");
    exit();
  }
