<?php
  require 'dbh.inc.php';

  if (isset($_POST['enquiry-submit'])) {
    $enquirymail = $_POST['enquiry-mail'];
    $enquirytype = $_POST['enquiry-type'];
    $enquirydescription = $_POST['enquiry-description'];
    $enquirystatus = "open";

    if (empty($enquirymail)) {
      header("Location: ../index.php");
      exit();
    }
    else {
      if (empty($enquirytype) || empty($enquirydescription)) {
        header("Location: ../enquiry-form.php?error=emptyfields");
        exit();
      }
      else {
        $sql = "INSERT INTO enquiries (enquiry_mail, enquiry_type, enquiry_description, enquiry_status) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../enquiry-form.php?error=sqlerror");
          exit();
        }
        else {
          mysqli_stmt_bind_param($stmt, "ssss", $enquirymail, $enquirytype, $enquirydescription, $enquirystatus);
          mysqli_stmt_execute($stmt);
          header("Location: ../enquiry-form.php?success=detailssaved");
          exit();
        }
      }
    }
  }

  else {
    header("Location: ../index.php");
    exit();
  }
