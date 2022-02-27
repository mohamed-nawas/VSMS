<?php
  //session_start();
  require 'dbh.inc.php';
  $mail = $_SESSION['usermail'];
  $enquirytypearray = [];
  $enquirydescriptionarray = [];
  $enquiryresponsearray = [];
  $enquirystatusarray = [];

  $row1enquiryno = "";
  $row1enquirytype = "";
  $row1enquirydescription = "";
  $row1enquiryresponse = "";
  $row1enquirystatus = "";

  $row2enquiryno = "";
  $row2enquirytype = "";
  $row2enquirydescription = "";
  $row2enquiryresponse = "";
  $row2enquirystatus = "";

  $row3enquiryno = "";
  $row3enquirytype = "";
  $row3enquirydescription = "";
  $row3enquiryresponse = "";
  $row3enquirystatus = "";

  $row4enquiryno = "";
  $row4enquirytype = "";
  $row4enquirydescription = "";
  $row4enquiryresponse = "";
  $row4enquirystatus = "";

  $row5enquiryno = "";
  $row5enquirytype = "";
  $row5enquirydescription = "";
  $row5enquiryresponse = "";
  $row5enquirystatus = "";

  $row6enquiryno = "";
  $row6enquirytype = "";
  $row6enquirydescription = "";
  $row6enquiryresponse = "";
  $row6enquirystatus = "";

  $row7enquiryno = "";
  $row7enquirytype = "";
  $row7enquirydescription = "";
  $row7enquiryresponse = "";
  $row7enquirystatus = "";

  $row8enquiryno = "";
  $row8enquirytype = "";
  $row8enquirydescription = "";
  $row8enquiryresponse = "";
  $row8enquirystatus = "";

  $row9enquiryno = "";
  $row9enquirytype = "";
  $row9enquirydescription = "";
  $row9enquiryresponse = "";
  $row9enquirystatus = "";

  $row10enquiryno = "";
  $row10enquirytype = "";
  $row10enquirydescription = "";
  $row10enquiryresponse = "";
  $row10enquirystatus = "";

  $sql = "SELECT * FROM enquiries WHERE enquiry_mail=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../enquiry-history.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $mail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      array_push($enquirytypearray, $row['enquiry_type']);
      array_push($enquirydescriptionarray, $row['enquiry_description']);
      array_push($enquiryresponsearray, $row['enquiry_response']);
      array_push($enquirystatusarray, $row['enquiry_status']);
    }
    $rowcount = count($enquirytypearray);
    if ($rowcount == 1) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
    }
    else if ($rowcount == 2) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
    }
    else if ($rowcount == 3) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
    }
    else if ($rowcount == 4) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
      $row4enquiryno = 4;
      $row4enquirytype = $enquirytypearray[3];
      $row4enquirydescription = $enquirydescriptionarray[3];
      $row4enquiryresponse = $enquiryresponsearray[3];
      $row4enquirystatus = $enquirystatusarray[3];
    }
    else if ($rowcount == 5) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
      $row4enquiryno = 4;
      $row4enquirytype = $enquirytypearray[3];
      $row4enquirydescription = $enquirydescriptionarray[3];
      $row4enquiryresponse = $enquiryresponsearray[3];
      $row4enquirystatus = $enquirystatusarray[3];
      $row5enquiryno = 5;
      $row5enquirytype = $enquirytypearray[4];
      $row5enquirydescription = $enquirydescriptionarray[4];
      $row5enquiryresponse = $enquiryresponsearray[4];
      $row5enquirystatus = $enquirystatusarray[4];
    }
    else if ($rowcount == 6) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
      $row4enquiryno = 4;
      $row4enquirytype = $enquirytypearray[3];
      $row4enquirydescription = $enquirydescriptionarray[3];
      $row4enquiryresponse = $enquiryresponsearray[3];
      $row4enquirystatus = $enquirystatusarray[3];
      $row5enquiryno = 5;
      $row5enquirytype = $enquirytypearray[4];
      $row5enquirydescription = $enquirydescriptionarray[4];
      $row5enquiryresponse = $enquiryresponsearray[4];
      $row5enquirystatus = $enquirystatusarray[4];
      $row6enquiryno = 6;
      $row6enquirytype = $enquirytypearray[5];
      $row6enquirydescription = $enquirydescriptionarray[5];
      $row6enquiryresponse = $enquiryresponsearray[5];
      $row6enquirystatus = $enquirystatusarray[5];
    }
    else if ($rowcount == 7) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
      $row4enquiryno = 4;
      $row4enquirytype = $enquirytypearray[3];
      $row4enquirydescription = $enquirydescriptionarray[3];
      $row4enquiryresponse = $enquiryresponsearray[3];
      $row4enquirystatus = $enquirystatusarray[3];
      $row5enquiryno = 5;
      $row5enquirytype = $enquirytypearray[4];
      $row5enquirydescription = $enquirydescriptionarray[4];
      $row5enquiryresponse = $enquiryresponsearray[4];
      $row5enquirystatus = $enquirystatusarray[4];
      $row6enquiryno = 6;
      $row6enquirytype = $enquirytypearray[5];
      $row6enquirydescription = $enquirydescriptionarray[5];
      $row6enquiryresponse = $enquiryresponsearray[5];
      $row6enquirystatus = $enquirystatusarray[5];
      $row7enquiryno = 7;
      $row7enquirytype = $enquirytypearray[6];
      $row7enquirydescription = $enquirydescriptionarray[6];
      $row7enquiryresponse = $enquiryresponsearray[6];
      $row7enquirystatus = $enquirystatusarray[6];
    }
    else if ($rowcount == 8) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
      $row4enquiryno = 4;
      $row4enquirytype = $enquirytypearray[3];
      $row4enquirydescription = $enquirydescriptionarray[3];
      $row4enquiryresponse = $enquiryresponsearray[3];
      $row4enquirystatus = $enquirystatusarray[3];
      $row5enquiryno = 5;
      $row5enquirytype = $enquirytypearray[4];
      $row5enquirydescription = $enquirydescriptionarray[4];
      $row5enquiryresponse = $enquiryresponsearray[4];
      $row5enquirystatus = $enquirystatusarray[4];
      $row6enquiryno = 6;
      $row6enquirytype = $enquirytypearray[5];
      $row6enquirydescription = $enquirydescriptionarray[5];
      $row6enquiryresponse = $enquiryresponsearray[5];
      $row6enquirystatus = $enquirystatusarray[5];
      $row7enquiryno = 7;
      $row7enquirytype = $enquirytypearray[6];
      $row7enquirydescription = $enquirydescriptionarray[6];
      $row7enquiryresponse = $enquiryresponsearray[6];
      $row7enquirystatus = $enquirystatusarray[6];
      $row8enquiryno = 8;
      $row8enquirytype = $enquirytypearray[7];
      $row8enquirydescription = $enquirydescriptionarray[7];
      $row8enquiryresponse = $enquiryresponsearray[7];
      $row8enquirystatus = $enquirystatusarray[7];
    }
    else if ($rowcount == 9) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
      $row4enquiryno = 4;
      $row4enquirytype = $enquirytypearray[3];
      $row4enquirydescription = $enquirydescriptionarray[3];
      $row4enquiryresponse = $enquiryresponsearray[3];
      $row4enquirystatus = $enquirystatusarray[3];
      $row5enquiryno = 5;
      $row5enquirytype = $enquirytypearray[4];
      $row5enquirydescription = $enquirydescriptionarray[4];
      $row5enquiryresponse = $enquiryresponsearray[4];
      $row5enquirystatus = $enquirystatusarray[4];
      $row6enquiryno = 6;
      $row6enquirytype = $enquirytypearray[5];
      $row6enquirydescription = $enquirydescriptionarray[5];
      $row6enquiryresponse = $enquiryresponsearray[5];
      $row6enquirystatus = $enquirystatusarray[5];
      $row7enquiryno = 7;
      $row7enquirytype = $enquirytypearray[6];
      $row7enquirydescription = $enquirydescriptionarray[6];
      $row7enquiryresponse = $enquiryresponsearray[6];
      $row7enquirystatus = $enquirystatusarray[6];
      $row8enquiryno = 8;
      $row8enquirytype = $enquirytypearray[7];
      $row8enquirydescription = $enquirydescriptionarray[7];
      $row8enquiryresponse = $enquiryresponsearray[7];
      $row8enquirystatus = $enquirystatusarray[7];
      $row9enquiryno = 9;
      $row9enquirytype = $enquirytypearray[8];
      $row9enquirydescription = $enquirydescriptionarray[8];
      $row9enquiryresponse = $enquiryresponsearray[8];
      $row9enquirystatus = $enquirystatusarray[8];
    }
    else if ($rowcount == 10) {
      $row1enquiryno = 1;
      $row1enquirytype = $enquirytypearray[0];
      $row1enquirydescription = $enquirydescriptionarray[0];
      $row1enquiryresponse = $enquiryresponsearray[0];
      $row1enquirystatus = $enquirystatusarray[0];
      $row2enquiryno = 2;
      $row2enquirytype = $enquirytypearray[1];
      $row2enquirydescription = $enquirydescriptionarray[1];
      $row2enquiryresponse = $enquiryresponsearray[1];
      $row2enquirystatus = $enquirystatusarray[1];
      $row3enquiryno = 3;
      $row3enquirytype = $enquirytypearray[2];
      $row3enquirydescription = $enquirydescriptionarray[2];
      $row3enquiryresponse = $enquiryresponsearray[2];
      $row3enquirystatus = $enquirystatusarray[2];
      $row4enquiryno = 4;
      $row4enquirytype = $enquirytypearray[3];
      $row4enquirydescription = $enquirydescriptionarray[3];
      $row4enquiryresponse = $enquiryresponsearray[3];
      $row4enquirystatus = $enquirystatusarray[3];
      $row5enquiryno = 5;
      $row5enquirytype = $enquirytypearray[4];
      $row5enquirydescription = $enquirydescriptionarray[4];
      $row5enquiryresponse = $enquiryresponsearray[4];
      $row5enquirystatus = $enquirystatusarray[4];
      $row6enquiryno = 6;
      $row6enquirytype = $enquirytypearray[5];
      $row6enquirydescription = $enquirydescriptionarray[5];
      $row6enquiryresponse = $enquiryresponsearray[5];
      $row6enquirystatus = $enquirystatusarray[5];
      $row7enquiryno = 7;
      $row7enquirytype = $enquirytypearray[6];
      $row7enquirydescription = $enquirydescriptionarray[6];
      $row7enquiryresponse = $enquiryresponsearray[6];
      $row7enquirystatus = $enquirystatusarray[6];
      $row8enquiryno = 8;
      $row8enquirytype = $enquirytypearray[7];
      $row8enquirydescription = $enquirydescriptionarray[7];
      $row8enquiryresponse = $enquiryresponsearray[7];
      $row8enquirystatus = $enquirystatusarray[7];
      $row9enquiryno = 9;
      $row9enquirytype = $enquirytypearray[8];
      $row9enquirydescription = $enquirydescriptionarray[8];
      $row9enquiryresponse = $enquiryresponsearray[8];
      $row9enquirystatus = $enquirystatusarray[8];
      $row10enquiryno = 10;
      $row10enquirytype = $enquirytypearray[9];
      $row10enquirydescription = $enquirydescriptionarray[9];
      $row10enquiryresponse = $enquiryresponsearray[9];
      $row10enquirystatus = $enquirystatusarray[9];
    }
  }
