<?php
  if (isset($_POST['closed-enquiries-respond-submit'])) {
    header("Location: ../closed-enquiries.php");
    exit();
  }
  else {
    header("Location: ../index.php");
    exit();
  }
