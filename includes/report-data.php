<?php
  require 'dbh.inc.php';

  // getting the no of users registered in the system
  $sql = "SELECT COUNT(id) AS NumberOfUsers FROM users";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $usercount = $row['NumberOfUsers'];
    }
  }

  // getting the no of sales in the system in the system
  $invoicestatus = "payed";
  $sql = "SELECT COUNT(id) AS NumberOfSales FROM invoice WHERE invoice_status=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $invoicestatus);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $salescount = $row['NumberOfSales'];
    }
  }

  // getting the total earnings in the system
  $invoicestatus = "payed";
  $partschargearray = [];
  $servicechargearray = [];
  $sql = "SELECT parts_charge, service_charge FROM invoice WHERE invoice_status=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $invoicestatus);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($partschargearray, $row['parts_charge']);
      array_push($servicechargearray, $row['service_charge']);
    }
  }
  $totalearnings = array_sum($partschargearray) + array_sum($servicechargearray);
  $totalearningsformatted = number_format($totalearnings, 0);


  // getting the pending requests in the system
  $servicestatus = "pending";
  $sql = "SELECT COUNT(id) as pendingRequests FROM services WHERE service_status=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $servicestatus);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $pendingrequestcount = $row['pendingRequests'];
    }
  }

  // tracking enquiries in the system
  $enquirymailarray = [];
  $enquirydescriptionarray = [];
  $enquirynamearray = [];
  $sql = "SELECT enquiry_mail, enquiry_description FROM enquiries WHERE enquiry_status=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    $enquirystatus = "open";
    mysqli_stmt_bind_param($stmt, "s", $enquirystatus);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($enquirymailarray, $row['enquiry_mail']);
      array_push($enquirydescriptionarray, $row['enquiry_description']);
    }
  }
  for ($i=0; $i < count($enquirymailarray) ; $i++) {
    $sql = "SELECT full_name FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $enquirymailarray[$i]);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        array_push($enquirynamearray, $row['full_name']);
      }
    }
  }
  $openenquirycount = count($enquirymailarray);

  // tracks services sold based on vehicle type
  $twoWheel = "2-Wheel";
  $threeWheel = "3-Wheel";
  $threeWheelAuto = "3-Wheel-Auto";
  $fourWheel = "4-Wheel";
  $fourWheelTractor = "4-Wheel-Tractor";
  $sql = "SELECT COUNT(id) as orderCount FROM services";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $ordercount = $row['orderCount'];
    }
  }
  $sql = "SELECT COUNT(vehicle_type) as twoWheelServiceCount FROM services WHERE vehicle_type=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $twoWheel);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $twoWheelServiceCount = $row['twoWheelServiceCount'];
    }
  }
  $sql = "SELECT COUNT(vehicle_type) as threeWheelServiceCount FROM services WHERE vehicle_type=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $threeWheel);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $threeWheelServiceCount = $row['threeWheelServiceCount'];
    }
  }
  $sql = "SELECT COUNT(vehicle_type) as threeWheelAutoServiceCount FROM services WHERE vehicle_type=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $threeWheelAuto);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $threeWheelAutoServiceCount = $row['threeWheelAutoServiceCount'];
    }
  }
  $sql = "SELECT COUNT(vehicle_type) as fourWheelServiceCount FROM services WHERE vehicle_type=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $fourWheel);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $fourWheelServiceCount = $row['fourWheelServiceCount'];
    }
  }
  $sql = "SELECT COUNT(vehicle_type) as fourWheelTractorServiceCount FROM services WHERE vehicle_type=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $fourWheelTractor);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $fourWheelTractorServiceCount = $row['fourWheelTractorServiceCount'];
    }
  }
