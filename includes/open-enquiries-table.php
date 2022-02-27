<?php
  require 'dbh.inc.php';

  $row1enquiryid = "";
  $row2enquiryid = "";
  $row3enquiryid = "";
  $row4enquiryid = "";
  $row5enquiryid = "";
  $row6enquiryid = "";
  $row7enquiryid = "";
  $row8enquiryid = "";
  $row9enquiryid = "";
  $row10enquiryid = "";

  $row1customername = "";
  $row2customername = "";
  $row3customername = "";
  $row4customername = "";
  $row5customername = "";
  $row6customername = "";
  $row7customername = "";
  $row8customername = "";
  $row9customername = "";
  $row10customername = "";

  $row1customermail = "";
  $row2customermail = "";
  $row3customermail = "";
  $row4customermail = "";
  $row5customermail = "";
  $row6customermail = "";
  $row7customermail = "";
  $row8customermail = "";
  $row9customermail = "";
  $row10customermail = "";

  $row1enquirytype = "";
  $row2enquirytype = "";
  $row3enquirytype = "";
  $row4enquirytype = "";
  $row5enquirytype = "";
  $row6enquirytype = "";
  $row7enquirytype = "";
  $row8enquirytype = "";
  $row9enquirytype = "";
  $row10enquirytype = "";

  $row1enquirydescription = "";
  $row2enquirydescription = "";
  $row3enquirydescription = "";
  $row4enquirydescription = "";
  $row5enquirydescription = "";
  $row6enquirydescription = "";
  $row7enquirydescription = "";
  $row8enquirydescription = "";
  $row9enquirydescription = "";
  $row10enquirydescription = "";

  $enquiryidarray = [];
  $customernamearray = [];
  $customermailarray = [];
  $enquirytypearray = [];
  $enquirydescriptionarray = [];
  $enquirystatus = "open";

  $sql = "SELECT id, enquiry_mail, enquiry_type, enquiry_description FROM enquiries WHERE enquiry_status=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../open-enquiries.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $enquirystatus);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      array_push($enquiryidarray, $row['id']);
      array_push($customermailarray, $row['enquiry_mail']);
      array_push($enquirytypearray, $row['enquiry_type']);
      array_push($enquirydescriptionarray, $row['enquiry_description']);
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

  $rowcount = count($enquiryidarray);
  if ($rowcount == 1) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
  }
  else if ($rowcount == 2) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
  }
  else if ($rowcount == 3) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
  }
  else if ($rowcount == 4) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
    $row4enquiryid = $enquiryidarray[3];
    $row4customername = $customernamearray[3];
    $row4customermail = $customermailarray[3];
    $row4enquirytype = $enquirytypearray[3];
    $row4enquirydescription = $enquirydescriptionarray[3];
  }
  else if ($rowcount == 5) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
    $row4enquiryid = $enquiryidarray[3];
    $row4customername = $customernamearray[3];
    $row4customermail = $customermailarray[3];
    $row4enquirytype = $enquirytypearray[3];
    $row4enquirydescription = $enquirydescriptionarray[3];
    $row5enquiryid = $enquiryidarray[4];
    $row5customername = $customernamearray[4];
    $row5customermail = $customermailarray[4];
    $row5enquirytype = $enquirytypearray[4];
    $row5enquirydescription = $enquirydescriptionarray[4];
  }
  else if ($rowcount == 6) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
    $row4enquiryid = $enquiryidarray[3];
    $row4customername = $customernamearray[3];
    $row4customermail = $customermailarray[3];
    $row4enquirytype = $enquirytypearray[3];
    $row4enquirydescription = $enquirydescriptionarray[3];
    $row5enquiryid = $enquiryidarray[4];
    $row5customername = $customernamearray[4];
    $row5customermail = $customermailarray[4];
    $row5enquirytype = $enquirytypearray[4];
    $row5enquirydescription = $enquirydescriptionarray[4];
    $row6enquiryid = $enquiryidarray[5];
    $row6customername = $customernamearray[5];
    $row6customermail = $customermailarray[5];
    $row6enquirytype = $enquirytypearray[5];
    $row6enquirydescription = $enquirydescriptionarray[5];
  }
  else if ($rowcount == 7) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
    $row4enquiryid = $enquiryidarray[3];
    $row4customername = $customernamearray[3];
    $row4customermail = $customermailarray[3];
    $row4enquirytype = $enquirytypearray[3];
    $row4enquirydescription = $enquirydescriptionarray[3];
    $row5enquiryid = $enquiryidarray[4];
    $row5customername = $customernamearray[4];
    $row5customermail = $customermailarray[4];
    $row5enquirytype = $enquirytypearray[4];
    $row5enquirydescription = $enquirydescriptionarray[4];
    $row6enquiryid = $enquiryidarray[5];
    $row6customername = $customernamearray[5];
    $row6customermail = $customermailarray[5];
    $row6enquirytype = $enquirytypearray[5];
    $row6enquirydescription = $enquirydescriptionarray[5];
    $row7enquiryid = $enquiryidarray[6];
    $row7customername = $customernamearray[6];
    $row7customermail = $customermailarray[6];
    $row7enquirytype = $enquirytypearray[6];
    $row7enquirydescription = $enquirydescriptionarray[6];
  }
  else if ($rowcount == 8) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
    $row4enquiryid = $enquiryidarray[3];
    $row4customername = $customernamearray[3];
    $row4customermail = $customermailarray[3];
    $row4enquirytype = $enquirytypearray[3];
    $row4enquirydescription = $enquirydescriptionarray[3];
    $row5enquiryid = $enquiryidarray[4];
    $row5customername = $customernamearray[4];
    $row5customermail = $customermailarray[4];
    $row5enquirytype = $enquirytypearray[4];
    $row5enquirydescription = $enquirydescriptionarray[4];
    $row6enquiryid = $enquiryidarray[5];
    $row6customername = $customernamearray[5];
    $row6customermail = $customermailarray[5];
    $row6enquirytype = $enquirytypearray[5];
    $row6enquirydescription = $enquirydescriptionarray[5];
    $row7enquiryid = $enquiryidarray[6];
    $row7customername = $customernamearray[6];
    $row7customermail = $customermailarray[6];
    $row7enquirytype = $enquirytypearray[6];
    $row7enquirydescription = $enquirydescriptionarray[6];
    $row8enquiryid = $enquiryidarray[7];
    $row8customername = $customernamearray[7];
    $row8customermail = $customermailarray[7];
    $row8enquirytype = $enquirytypearray[7];
    $row8enquirydescription = $enquirydescriptionarray[7];
  }
  else if ($rowcount == 9) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
    $row4enquiryid = $enquiryidarray[3];
    $row4customername = $customernamearray[3];
    $row4customermail = $customermailarray[3];
    $row4enquirytype = $enquirytypearray[3];
    $row4enquirydescription = $enquirydescriptionarray[3];
    $row5enquiryid = $enquiryidarray[4];
    $row5customername = $customernamearray[4];
    $row5customermail = $customermailarray[4];
    $row5enquirytype = $enquirytypearray[4];
    $row5enquirydescription = $enquirydescriptionarray[4];
    $row6enquiryid = $enquiryidarray[5];
    $row6customername = $customernamearray[5];
    $row6customermail = $customermailarray[5];
    $row6enquirytype = $enquirytypearray[5];
    $row6enquirydescription = $enquirydescriptionarray[5];
    $row7enquiryid = $enquiryidarray[6];
    $row7customername = $customernamearray[6];
    $row7customermail = $customermailarray[6];
    $row7enquirytype = $enquirytypearray[6];
    $row7enquirydescription = $enquirydescriptionarray[6];
    $row8enquiryid = $enquiryidarray[7];
    $row8customername = $customernamearray[7];
    $row8customermail = $customermailarray[7];
    $row8enquirytype = $enquirytypearray[7];
    $row8enquirydescription = $enquirydescriptionarray[7];
    $row9enquiryid = $enquiryidarray[8];
    $row9customername = $customernamearray[8];
    $row9customermail = $customermailarray[8];
    $row9enquirytype = $enquirytypearray[8];
    $row9enquirydescription = $enquirydescriptionarray[8];
  }
  else if ($rowcount == 10) {
    $row1enquiryid = $enquiryidarray[0];
    $row1customername = $customernamearray[0];
    $row1customermail = $customermailarray[0];
    $row1enquirytype = $enquirytypearray[0];
    $row1enquirydescription = $enquirydescriptionarray[0];
    $row2enquiryid = $enquiryidarray[1];
    $row2customername = $customernamearray[1];
    $row2customermail = $customermailarray[1];
    $row2enquirytype = $enquirytypearray[1];
    $row2enquirydescription = $enquirydescriptionarray[1];
    $row3enquiryid = $enquiryidarray[2];
    $row3customername = $customernamearray[2];
    $row3customermail = $customermailarray[2];
    $row3enquirytype = $enquirytypearray[2];
    $row3enquirydescription = $enquirydescriptionarray[2];
    $row4enquiryid = $enquiryidarray[3];
    $row4customername = $customernamearray[3];
    $row4customermail = $customermailarray[3];
    $row4enquirytype = $enquirytypearray[3];
    $row4enquirydescription = $enquirydescriptionarray[3];
    $row5enquiryid = $enquiryidarray[4];
    $row5customername = $customernamearray[4];
    $row5customermail = $customermailarray[4];
    $row5enquirytype = $enquirytypearray[4];
    $row5enquirydescription = $enquirydescriptionarray[4];
    $row6enquiryid = $enquiryidarray[5];
    $row6customername = $customernamearray[5];
    $row6customermail = $customermailarray[5];
    $row6enquirytype = $enquirytypearray[5];
    $row6enquirydescription = $enquirydescriptionarray[5];
    $row7enquiryid = $enquiryidarray[6];
    $row7customername = $customernamearray[6];
    $row7customermail = $customermailarray[6];
    $row7enquirytype = $enquirytypearray[6];
    $row7enquirydescription = $enquirydescriptionarray[6];
    $row8enquiryid = $enquiryidarray[7];
    $row8customername = $customernamearray[7];
    $row8customermail = $customermailarray[7];
    $row8enquirytype = $enquirytypearray[7];
    $row8enquirydescription = $enquirydescriptionarray[7];
    $row9enquiryid = $enquiryidarray[8];
    $row9customername = $customernamearray[8];
    $row9customermail = $customermailarray[8];
    $row9enquirytype = $enquirytypearray[8];
    $row9enquirydescription = $enquirydescriptionarray[8];
    $row10enquiryid = $enquiryidarray[9];
    $row10customername = $customernamearray[9];
    $row10customermail = $customermailarray[9];
    $row10enquirytype = $enquirytypearray[9];
    $row10enquirydescription = $enquirydescriptionarray[9];
  }
