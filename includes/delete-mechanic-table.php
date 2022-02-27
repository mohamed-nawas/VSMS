<?php

  require 'dbh.inc.php';
  $row1id = "";
  $row1name = "";
  $row1address = "";
  $row1mobile = "";
  $row2id = "";
  $row2name = "";
  $row2address = "";
  $row2mobile = "";
  $row3id = "";
  $row3name = "";
  $row3address = "";
  $row3mobile = "";
  $row4id = "";
  $row4name = "";
  $row4address = "";
  $row4mobile = "";
  $row5id = "";
  $row5name = "";
  $row5address = "";
  $row5mobile = "";
  $row6id = "";
  $row6name = "";
  $row6address = "";
  $row6mobile = "";
  $row7id = "";
  $row7name = "";
  $row7address = "";
  $row7mobile = "";
  $row8id = "";
  $row8name = "";
  $row8address = "";
  $row8mobile = "";
  $row9id = "";
  $row9name = "";
  $row9address = "";
  $row9mobile = "";
  $row10id = "";
  $row10name = "";
  $row10address = "";
  $row10mobile = "";

  $mechanicidarray = [];
  $mechanicnamearray = [];
  $mechanicaddressarray = [];
  $mechanicmobilearray = [];

  $sql = "SELECT * FROM mechanic";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../delete-mechanic.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      array_push($mechanicidarray, $row['id']);
      array_push($mechanicnamearray, $row['Name']);
      array_push($mechanicaddressarray, $row['Address']);
      array_push($mechanicmobilearray, $row['Mobile']);
    }

    $rowcount = count($mechanicidarray);
    if ($rowcount == 1) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
    }
    else if ($rowcount == 2) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
    }
    else if ($rowcount == 3) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
    }
    else if ($rowcount == 4) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
      $row4id = $mechanicidarray[3];
      $row4name = $mechanicnamearray[3];
      $row4address = $mechanicaddressarray[3];
      $row4mobile = $mechanicmobilearray[3];
    }
    else if ($rowcount == 5) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
      $row4id = $mechanicidarray[3];
      $row4name = $mechanicnamearray[3];
      $row4address = $mechanicaddressarray[3];
      $row4mobile = $mechanicmobilearray[3];
      $row5id = $mechanicidarray[4];
      $row5name = $mechanicnamearray[4];
      $row5address = $mechanicaddressarray[4];
      $row5mobile = $mechanicmobilearray[4];
    }
    else if ($rowcount == 6) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
      $row4id = $mechanicidarray[3];
      $row4name = $mechanicnamearray[3];
      $row4address = $mechanicaddressarray[3];
      $row4mobile = $mechanicmobilearray[3];
      $row5id = $mechanicidarray[4];
      $row5name = $mechanicnamearray[4];
      $row5address = $mechanicaddressarray[4];
      $row5mobile = $mechanicmobilearray[4];
      $row6id = $mechanicidarray[5];
      $row6name = $mechanicnamearray[5];
      $row6address = $mechanicaddressarray[5];
      $row6mobile = $mechanicmobilearray[5];
    }
    else if ($rowcount == 7) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
      $row4id = $mechanicidarray[3];
      $row4name = $mechanicnamearray[3];
      $row4address = $mechanicaddressarray[3];
      $row4mobile = $mechanicmobilearray[3];
      $row5id = $mechanicidarray[4];
      $row5name = $mechanicnamearray[4];
      $row5address = $mechanicaddressarray[4];
      $row5mobile = $mechanicmobilearray[4];
      $row6id = $mechanicidarray[5];
      $row6name = $mechanicnamearray[5];
      $row6address = $mechanicaddressarray[5];
      $row6mobile = $mechanicmobilearray[5];
      $row7id = $mechanicidarray[6];
      $row7name = $mechanicnamearray[6];
      $row7address = $mechanicaddressarray[6];
      $row7mobile = $mechanicmobilearray[6];
    }
    else if ($rowcount == 8) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
      $row4id = $mechanicidarray[3];
      $row4name = $mechanicnamearray[3];
      $row4address = $mechanicaddressarray[3];
      $row4mobile = $mechanicmobilearray[3];
      $row5id = $mechanicidarray[4];
      $row5name = $mechanicnamearray[4];
      $row5address = $mechanicaddressarray[4];
      $row5mobile = $mechanicmobilearray[4];
      $row6id = $mechanicidarray[5];
      $row6name = $mechanicnamearray[5];
      $row6address = $mechanicaddressarray[5];
      $row6mobile = $mechanicmobilearray[5];
      $row7id = $mechanicidarray[6];
      $row7name = $mechanicnamearray[6];
      $row7address = $mechanicaddressarray[6];
      $row7mobile = $mechanicmobilearray[6];
      $row8id = $mechanicidarray[7];
      $row8name = $mechanicnamearray[7];
      $row8address = $mechanicaddressarray[7];
      $row8mobile = $mechanicmobilearray[7];
    }
    else if ($rowcount == 9) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
      $row4id = $mechanicidarray[3];
      $row4name = $mechanicnamearray[3];
      $row4address = $mechanicaddressarray[3];
      $row4mobile = $mechanicmobilearray[3];
      $row5id = $mechanicidarray[4];
      $row5name = $mechanicnamearray[4];
      $row5address = $mechanicaddressarray[4];
      $row5mobile = $mechanicmobilearray[4];
      $row6id = $mechanicidarray[5];
      $row6name = $mechanicnamearray[5];
      $row6address = $mechanicaddressarray[5];
      $row6mobile = $mechanicmobilearray[5];
      $row7id = $mechanicidarray[6];
      $row7name = $mechanicnamearray[6];
      $row7address = $mechanicaddressarray[6];
      $row7mobile = $mechanicmobilearray[6];
      $row8id = $mechanicidarray[7];
      $row8name = $mechanicnamearray[7];
      $row8address = $mechanicaddressarray[7];
      $row8mobile = $mechanicmobilearray[7];
      $row9id = $mechanicidarray[8];
      $row9name = $mechanicnamearray[8];
      $row9address = $mechanicaddressarray[8];
      $row9mobile = $mechanicmobilearray[8];
    }
    else if ($rowcount == 10) {
      $row1id = $mechanicidarray[0];
      $row1name = $mechanicnamearray[0];
      $row1address = $mechanicaddressarray[0];
      $row1mobile = $mechanicmobilearray[0];
      $row2id = $mechanicidarray[1];
      $row2name = $mechanicnamearray[1];
      $row2address = $mechanicaddressarray[1];
      $row2mobile = $mechanicmobilearray[1];
      $row3id = $mechanicidarray[2];
      $row3name = $mechanicnamearray[2];
      $row3address = $mechanicaddressarray[2];
      $row3mobile = $mechanicmobilearray[2];
      $row4id = $mechanicidarray[3];
      $row4name = $mechanicnamearray[3];
      $row4address = $mechanicaddressarray[3];
      $row4mobile = $mechanicmobilearray[3];
      $row5id = $mechanicidarray[4];
      $row5name = $mechanicnamearray[4];
      $row5address = $mechanicaddressarray[4];
      $row5mobile = $mechanicmobilearray[4];
      $row6id = $mechanicidarray[5];
      $row6name = $mechanicnamearray[5];
      $row6address = $mechanicaddressarray[5];
      $row6mobile = $mechanicmobilearray[5];
      $row7id = $mechanicidarray[6];
      $row7name = $mechanicnamearray[6];
      $row7address = $mechanicaddressarray[6];
      $row7mobile = $mechanicmobilearray[6];
      $row8id = $mechanicidarray[7];
      $row8name = $mechanicnamearray[7];
      $row8address = $mechanicaddressarray[7];
      $row8mobile = $mechanicmobilearray[7];
      $row9id = $mechanicidarray[8];
      $row9name = $mechanicnamearray[8];
      $row9address = $mechanicaddressarray[8];
      $row9mobile = $mechanicmobilearray[8];
      $row10id = $mechanicidarray[9];
      $row10name = $mechanicnamearray[9];
      $row10address = $mechanicaddressarray[9];
      $row10mobile = $mechanicmobilearray[9];
    }
  }
