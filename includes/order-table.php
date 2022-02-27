<?php
  require 'dbh.inc.php';
  $orderidarray = [];
  $mailarray = [];
  $deliverytypearray = [];
  $servicestatusarray = [];
  $deliverystatusarray = [];
  $customernamearray = [];

  $row1orderid = "";
  $row1customername = "";
  $row1servicetype = "";
  $row1servicestatus = "";
  $row1deliverystatus = "";
  $row2orderid = "";
  $row2customername = "";
  $row2servicetype = "";
  $row2servicestatus = "";
  $row2deliverystatus = "";
  $row3orderid = "";
  $row3customername = "";
  $row3servicetype = "";
  $row3servicestatus = "";
  $row3deliverystatus = "";
  $row4orderid = "";
  $row4customername = "";
  $row4servicetype = "";
  $row4servicestatus = "";
  $row4deliverystatus = "";
  $row5orderid = "";
  $row5customername = "";
  $row5servicetype = "";
  $row5servicestatus = "";
  $row5deliverystatus = "";
  $row6orderid = "";
  $row6customername = "";
  $row6servicetype = "";
  $row6servicestatus = "";
  $row6deliverystatus = "";
  $row7orderid = "";
  $row7customername = "";
  $row7servicetype = "";
  $row7servicestatus = "";
  $row7deliverystatus = "";
  $row8orderid = "";
  $row8customername = "";
  $row8servicetype = "";
  $row8servicestatus = "";
  $row8deliverystatus = "";
  $row9orderid = "";
  $row9customername = "";
  $row9servicetype = "";
  $row9servicestatus = "";
  $row9deliverystatus = "";
  $row10orderid = "";
  $row10customername = "";
  $row10servicetype = "";
  $row10servicestatus = "";
  $row10deliverystatus = "";

  $sql = "SELECT id, request_email, delivery_type, service_status, delivery_status FROM services";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php");
    exit();
  }
  else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($orderidarray, $row['id']);
      array_push($mailarray, $row['request_email']);
      array_push($deliverytypearray, $row['delivery_type']);
      array_push($servicestatusarray, $row['service_status']);
      array_push($deliverystatusarray, $row['delivery_status']);
    }
  }

  for ($i=0; $i < count($mailarray) ; $i++) {
    $sql = "SELECT full_name FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mailarray[$i]);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        array_push($customernamearray, $row['full_name']);
      }
    }
  }

  $rowcount = count($orderidarray);
  if ($rowcount == 1) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
  }
  else if ($rowcount == 2) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
  }
  else if ($rowcount == 3) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
  }
  else if ($rowcount == 4) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
    $row4orderid = $orderidarray[3];
    $row4customername = $customernamearray[3];
    $row4servicetype = $deliverytypearray[3];
    $row4servicestatus = $servicestatusarray[3];
    $row4deliverystatus = $deliverystatusarray[3];
  }
  else if ($rowcount == 5) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
    $row4orderid = $orderidarray[3];
    $row4customername = $customernamearray[3];
    $row4servicetype = $deliverytypearray[3];
    $row4servicestatus = $servicestatusarray[3];
    $row4deliverystatus = $deliverystatusarray[3];
    $row5orderid = $orderidarray[4];
    $row5customername = $customernamearray[4];
    $row5servicetype = $deliverytypearray[4];
    $row5servicestatus = $servicestatusarray[4];
    $row5deliverystatus = $deliverystatusarray[4];
  }
  else if ($rowcount == 6) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
    $row4orderid = $orderidarray[3];
    $row4customername = $customernamearray[3];
    $row4servicetype = $deliverytypearray[3];
    $row4servicestatus = $servicestatusarray[3];
    $row4deliverystatus = $deliverystatusarray[3];
    $row5orderid = $orderidarray[4];
    $row5customername = $customernamearray[4];
    $row5servicetype = $deliverytypearray[4];
    $row5servicestatus = $servicestatusarray[4];
    $row5deliverystatus = $deliverystatusarray[4];
    $row6orderid = $orderidarray[5];
    $row6customername = $customernamearray[5];
    $row6servicetype = $deliverytypearray[5];
    $row6servicestatus = $servicestatusarray[5];
    $row6deliverystatus = $deliverystatusarray[5];
  }
  else if ($rowcount == 7) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
    $row4orderid = $orderidarray[3];
    $row4customername = $customernamearray[3];
    $row4servicetype = $deliverytypearray[3];
    $row4servicestatus = $servicestatusarray[3];
    $row4deliverystatus = $deliverystatusarray[3];
    $row5orderid = $orderidarray[4];
    $row5customername = $customernamearray[4];
    $row5servicetype = $deliverytypearray[4];
    $row5servicestatus = $servicestatusarray[4];
    $row5deliverystatus = $deliverystatusarray[4];
    $row6orderid = $orderidarray[5];
    $row6customername = $customernamearray[5];
    $row6servicetype = $deliverytypearray[5];
    $row6servicestatus = $servicestatusarray[5];
    $row6deliverystatus = $deliverystatusarray[5];
    $row7orderid = $orderidarray[6];
    $row7customername = $customernamearray[6];
    $row7servicetype = $deliverytypearray[6];
    $row7servicestatus = $servicestatusarray[6];
    $row7deliverystatus = $deliverystatusarray[6];
  }
  else if ($rowcount == 8) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
    $row4orderid = $orderidarray[3];
    $row4customername = $customernamearray[3];
    $row4servicetype = $deliverytypearray[3];
    $row4servicestatus = $servicestatusarray[3];
    $row4deliverystatus = $deliverystatusarray[3];
    $row5orderid = $orderidarray[4];
    $row5customername = $customernamearray[4];
    $row5servicetype = $deliverytypearray[4];
    $row5servicestatus = $servicestatusarray[4];
    $row5deliverystatus = $deliverystatusarray[4];
    $row6orderid = $orderidarray[5];
    $row6customername = $customernamearray[5];
    $row6servicetype = $deliverytypearray[5];
    $row6servicestatus = $servicestatusarray[5];
    $row6deliverystatus = $deliverystatusarray[5];
    $row7orderid = $orderidarray[6];
    $row7customername = $customernamearray[6];
    $row7servicetype = $deliverytypearray[6];
    $row7servicestatus = $servicestatusarray[6];
    $row7deliverystatus = $deliverystatusarray[6];
    $row8orderid = $orderidarray[7];
    $row8customername = $customernamearray[7];
    $row8servicetype = $deliverytypearray[7];
    $row8servicestatus = $servicestatusarray[7];
    $row8deliverystatus = $deliverystatusarray[7];
  }
  else if ($rowcount == 9) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
    $row4orderid = $orderidarray[3];
    $row4customername = $customernamearray[3];
    $row4servicetype = $deliverytypearray[3];
    $row4servicestatus = $servicestatusarray[3];
    $row4deliverystatus = $deliverystatusarray[3];
    $row5orderid = $orderidarray[4];
    $row5customername = $customernamearray[4];
    $row5servicetype = $deliverytypearray[4];
    $row5servicestatus = $servicestatusarray[4];
    $row5deliverystatus = $deliverystatusarray[4];
    $row6orderid = $orderidarray[5];
    $row6customername = $customernamearray[5];
    $row6servicetype = $deliverytypearray[5];
    $row6servicestatus = $servicestatusarray[5];
    $row6deliverystatus = $deliverystatusarray[5];
    $row7orderid = $orderidarray[6];
    $row7customername = $customernamearray[6];
    $row7servicetype = $deliverytypearray[6];
    $row7servicestatus = $servicestatusarray[6];
    $row7deliverystatus = $deliverystatusarray[6];
    $row8orderid = $orderidarray[7];
    $row8customername = $customernamearray[7];
    $row8servicetype = $deliverytypearray[7];
    $row8servicestatus = $servicestatusarray[7];
    $row8deliverystatus = $deliverystatusarray[7];
    $row9orderid = $orderidarray[8];
    $row9customername = $customernamearray[8];
    $row9servicetype = $deliverytypearray[8];
    $row9servicestatus = $servicestatusarray[8];
    $row9deliverystatus = $deliverystatusarray[8];
  }
  else if ($rowcount == 10) {
    $row1orderid = $orderidarray[0];
    $row1customername = $customernamearray[0];
    $row1servicetype = $deliverytypearray[0];
    $row1servicestatus = $servicestatusarray[0];
    $row1deliverystatus = $deliverystatusarray[0];
    $row2orderid = $orderidarray[1];
    $row2customername = $customernamearray[1];
    $row2servicetype = $deliverytypearray[1];
    $row2servicestatus = $servicestatusarray[1];
    $row2deliverystatus = $deliverystatusarray[1];
    $row3orderid = $orderidarray[2];
    $row3customername = $customernamearray[2];
    $row3servicetype = $deliverytypearray[2];
    $row3servicestatus = $servicestatusarray[2];
    $row3deliverystatus = $deliverystatusarray[2];
    $row4orderid = $orderidarray[3];
    $row4customername = $customernamearray[3];
    $row4servicetype = $deliverytypearray[3];
    $row4servicestatus = $servicestatusarray[3];
    $row4deliverystatus = $deliverystatusarray[3];
    $row5orderid = $orderidarray[4];
    $row5customername = $customernamearray[4];
    $row5servicetype = $deliverytypearray[4];
    $row5servicestatus = $servicestatusarray[4];
    $row5deliverystatus = $deliverystatusarray[4];
    $row6orderid = $orderidarray[5];
    $row6customername = $customernamearray[5];
    $row6servicetype = $deliverytypearray[5];
    $row6servicestatus = $servicestatusarray[5];
    $row6deliverystatus = $deliverystatusarray[5];
    $row7orderid = $orderidarray[6];
    $row7customername = $customernamearray[6];
    $row7servicetype = $deliverytypearray[6];
    $row7servicestatus = $servicestatusarray[6];
    $row7deliverystatus = $deliverystatusarray[6];
    $row8orderid = $orderidarray[7];
    $row8customername = $customernamearray[7];
    $row8servicetype = $deliverytypearray[7];
    $row8servicestatus = $servicestatusarray[7];
    $row8deliverystatus = $deliverystatusarray[7];
    $row9orderid = $orderidarray[8];
    $row9customername = $customernamearray[8];
    $row9servicetype = $deliverytypearray[8];
    $row9servicestatus = $servicestatusarray[8];
    $row9deliverystatus = $deliverystatusarray[8];
    $row10orderid = $orderidarray[9];
    $row10customername = $customernamearray[9];
    $row10servicetype = $deliverytypearray[9];
    $row10servicestatus = $servicestatusarray[9];
    $row10deliverystatus = $deliverystatusarray[9];
  }
