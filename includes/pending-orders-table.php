<?php

  require 'dbh.inc.php';
  $row1orderno =  "";
  $row1orderid =  "";
  $row1customer =  "";
  $row1deliverydate =  "";
  $row2orderno =  "";
  $row2orderid =  "";
  $row2customer =  "";
  $row2deliverydate =  "";
  $row3orderno =  "";
  $row3orderid =  "";
  $row3customer =  "";
  $row3deliverydate =  "";
  $row4orderno =  "";
  $row4orderid =  "";
  $row4customer =  "";
  $row4deliverydate =  "";
  $row5orderno =  "";
  $row5orderid =  "";
  $row5customer =  "";
  $row5deliverydate =  "";
  $row6orderno =  "";
  $row6orderid =  "";
  $row6customer =  "";
  $row6deliverydate =  "";
  $row7orderno =  "";
  $row7orderid =  "";
  $row7customer =  "";
  $row7deliverydate =  "";
  $row8orderno =  "";
  $row8orderid =  "";
  $row8customer =  "";
  $row8deliverydate =  "";
  $row9orderno =  "";
  $row9orderid =  "";
  $row9customer =  "";
  $row9deliverydate =  "";
  $row10orderno =  "";
  $row10orderid =  "";
  $row10customer =  "";
  $row10deliverydate = "";

  $requeststatus = "confirmed";
  $servicestatus = "incomplete";
  $customermailarray = [];
  $customernamearray = [];
  $deliverydatearray = [];
  $servicesidarray = [];

  $sql = "SELECT * FROM services WHERE request_status=? AND service_status=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../pending-orders.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "ss", $requeststatus, $servicestatus);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      array_push($customermailarray, $row['request_email']);
      array_push($deliverydatearray, $row['service_date']);
      array_push($servicesidarray, $row['id']);
    }
  }

  $sql1 = "SELECT full_name FROM users WHERE email=?";
  $stmt1 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt1, $sql1)) {
    header("Location: ../pending-orders.php?error=sqlerror");
    exit();
  }
  else {
    for ($i=0; $i <10 ; $i++) {
      mysqli_stmt_bind_param($stmt1, "s", $customermailarray[$i]);
      mysqli_stmt_execute($stmt1);
      $result1 = mysqli_stmt_get_result($stmt1);
      $row1 = mysqli_fetch_assoc($result1);
      array_push($customernamearray, $row1['full_name']);
    }
  }

  // print_r($customernamearray);
  // print_r($deliverydatearray);

  $rowcount = count($servicesidarray);
  if ($rowcount == 1) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
  }
  else if ($rowcount == 2) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
  }
  else if ($rowcount == 3) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
  }
  else if ($rowcount == 4) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
    $row4orderno = 4;
    $row4orderid = $servicesidarray[3];
    $row4customer = $customernamearray[3];
    $row4deliverydate = $deliverydatearray[3];
  }
  else if ($rowcount == 5) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
    $row4orderno = 4;
    $row4orderid = $servicesidarray[3];
    $row4customer = $customernamearray[3];
    $row4deliverydate = $deliverydatearray[3];
    $row5orderno = 5;
    $row5orderid = $servicesidarray[4];
    $row5customer = $customernamearray[4];
    $row5deliverydate = $deliverydatearray[4];
  }
  else if ($rowcount == 6) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
    $row4orderno = 4;
    $row4orderid = $servicesidarray[3];
    $row4customer = $customernamearray[3];
    $row4deliverydate = $deliverydatearray[3];
    $row5orderno = 5;
    $row5orderid = $servicesidarray[4];
    $row5customer = $customernamearray[4];
    $row5deliverydate = $deliverydatearray[4];
    $row6orderno = 6;
    $row6orderid = $servicesidarray[5];
    $row6customer = $customernamearray[5];
    $row6deliverydate = $deliverydatearray[5];
  }
  else if ($rowcount == 7) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
    $row4orderno = 4;
    $row4orderid = $servicesidarray[3];
    $row4customer = $customernamearray[3];
    $row4deliverydate = $deliverydatearray[3];
    $row5orderno = 5;
    $row5orderid = $servicesidarray[4];
    $row5customer = $customernamearray[4];
    $row5deliverydate = $deliverydatearray[4];
    $row6orderno = 6;
    $row6orderid = $servicesidarray[5];
    $row6customer = $customernamearray[5];
    $row6deliverydate = $deliverydatearray[5];
    $row7orderno = 7;
    $row7orderid = $servicesidarray[6];
    $row7customer = $customernamearray[6];
    $row7deliverydate = $deliverydatearray[6];
  }
  else if ($rowcount == 8) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
    $row4orderno = 4;
    $row4orderid = $servicesidarray[3];
    $row4customer = $customernamearray[3];
    $row4deliverydate = $deliverydatearray[3];
    $row5orderno = 5;
    $row5orderid = $servicesidarray[4];
    $row5customer = $customernamearray[4];
    $row5deliverydate = $deliverydatearray[4];
    $row6orderno = 6;
    $row6orderid = $servicesidarray[5];
    $row6customer = $customernamearray[5];
    $row6deliverydate = $deliverydatearray[5];
    $row7orderno = 7;
    $row7orderid = $servicesidarray[6];
    $row7customer = $customernamearray[6];
    $row7deliverydate = $deliverydatearray[6];
    $row8orderno = 8;
    $row8orderid = $servicesidarray[7];
    $row8customer = $customernamearray[7];
    $row8deliverydate = $deliverydatearray[7];
  }
  else if ($rowcount == 9) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
    $row4orderno = 4;
    $row4orderid = $servicesidarray[3];
    $row4customer = $customernamearray[3];
    $row4deliverydate = $deliverydatearray[3];
    $row5orderno = 5;
    $row5orderid = $servicesidarray[4];
    $row5customer = $customernamearray[4];
    $row5deliverydate = $deliverydatearray[4];
    $row6orderno = 6;
    $row6orderid = $servicesidarray[5];
    $row6customer = $customernamearray[5];
    $row6deliverydate = $deliverydatearray[5];
    $row7orderno = 7;
    $row7orderid = $servicesidarray[6];
    $row7customer = $customernamearray[6];
    $row7deliverydate = $deliverydatearray[6];
    $row8orderno = 8;
    $row8orderid = $servicesidarray[7];
    $row8customer = $customernamearray[7];
    $row8deliverydate = $deliverydatearray[7];
    $row9orderno = 9;
    $row9orderid = $servicesidarray[8];
    $row9customer = $customernamearray[8];
    $row9deliverydate = $deliverydatearray[8];
  }
  else if ($rowcount == 10) {
    $row1orderno = 1;
    $row1orderid = $servicesidarray[0];
    $row1customer = $customernamearray[0];
    $row1deliverydate = $deliverydatearray[0];
    $row2orderno = 2;
    $row2orderid = $servicesidarray[1];
    $row2customer = $customernamearray[1];
    $row2deliverydate = $deliverydatearray[1];
    $row3orderno = 3;
    $row3orderid = $servicesidarray[2];
    $row3customer = $customernamearray[2];
    $row3deliverydate = $deliverydatearray[2];
    $row4orderno = 4;
    $row4orderid = $servicesidarray[3];
    $row4customer = $customernamearray[3];
    $row4deliverydate = $deliverydatearray[3];
    $row5orderno = 5;
    $row5orderid = $servicesidarray[4];
    $row5customer = $customernamearray[4];
    $row5deliverydate = $deliverydatearray[4];
    $row6orderno = 6;
    $row6orderid = $servicesidarray[5];
    $row6customer = $customernamearray[5];
    $row6deliverydate = $deliverydatearray[5];
    $row7orderno = 7;
    $row7orderid = $servicesidarray[6];
    $row7customer = $customernamearray[6];
    $row7deliverydate = $deliverydatearray[6];
    $row8orderno = 8;
    $row8orderid = $servicesidarray[7];
    $row8customer = $customernamearray[7];
    $row8deliverydate = $deliverydatearray[7];
    $row9orderno = 9;
    $row9orderid = $servicesidarray[8];
    $row9customer = $customernamearray[8];
    $row9deliverydate = $deliverydatearray[8];
    $row10orderno = 10;
    $row10orderid = $servicesidarray[9];
    $row10customer = $customernamearray[9];
    $row10deliverydate = $deliverydatearray[9];
  }
