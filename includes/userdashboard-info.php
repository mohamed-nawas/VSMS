<?php
  require 'dbh.inc.php';

  function orders($mail, $conn) {
    $sql = "SELECT COUNT(id) as orderCount FROM services WHERE request_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $ordercount = $row['orderCount'];
      }
    }
    return $ordercount;
  }

  function twoWheel($mail, $conn) {
    $twoWheel = "2-Wheel";
    $sql = "SELECT COUNT(vehicle_type) as twoWheelServiceCount FROM services WHERE vehicle_type=? AND request_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $twoWheel, $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $twoWheelServiceCount = $row['twoWheelServiceCount'];
      }
    }
    return $twoWheelServiceCount;
  }

  function threeWheel($mail, $conn) {
    $threeWheel = "3-Wheel";
    $sql = "SELECT COUNT(vehicle_type) as threeWheelServiceCount FROM services WHERE vehicle_type=? AND request_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $threeWheel, $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $threeWheelServiceCount = $row['threeWheelServiceCount'];
      }
    }
    return $threeWheelServiceCount;
  }

  function threeWheelAuto($mail, $conn) {
    $threeWheelAuto = "3-Wheel-Auto";
    $sql = "SELECT COUNT(vehicle_type) as threeWheelAutoServiceCount FROM services WHERE vehicle_type=? AND request_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $threeWheelAuto, $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $threeWheelAutoServiceCount = $row['threeWheelAutoServiceCount'];
      }
    }
    return $threeWheelAutoServiceCount;
  }

  function fourWheel($mail, $conn) {
    $fourWheel = "4-Wheel";
    $sql = "SELECT COUNT(vehicle_type) as fourWheelServiceCount FROM services WHERE vehicle_type=? AND request_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $fourWheel, $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $fourWheelServiceCount = $row['fourWheelServiceCount'];
      }
    }
    return $fourWheelServiceCount;
  }

  function fourWheelTractor($mail, $conn) {
    $fourWheelTractor = "4-Wheel-Tractor";
    $sql = "SELECT COUNT(vehicle_type) as fourWheelTractorServiceCount FROM services WHERE vehicle_type=? AND request_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $fourWheelTractor, $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $fourWheelTractorServiceCount = $row['fourWheelTractorServiceCount'];
      }
    }
    return $fourWheelTractorServiceCount;
  }


  // tracking closed enquiries in the system
  function getClosedEnquiry($mail, $conn) {
    $closedenquiryresponsearray = [];
    $closedenquirydescriptionarray = [];
    $sql = "SELECT enquiry_description, enquiry_response FROM enquiries WHERE enquiry_status=? AND enquiry_mail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      $enquirystatus = "closed";
      mysqli_stmt_bind_param($stmt, "ss", $enquirystatus, $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      while ($row = mysqli_fetch_assoc($result)) {
        array_push($closedenquirydescriptionarray, $row['enquiry_description']);
        array_push($closedenquiryresponsearray, $row['enquiry_response']);
      }
    }
    $closedenquiryarray = array($closedenquirydescriptionarray, $closedenquiryresponsearray);
    return $closedenquiryarray;
  }
