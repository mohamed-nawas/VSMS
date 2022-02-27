<?php
  require 'dbh.inc.php';

  if (isset($_POST['feedback-submit'])) {
    $mail = $_POST['mail'];
    $feedback = $_POST['feedback'];

    $sql = "SELECT id FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../profile.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $userid = $row['id'];
      }
    }

    $sql = "INSERT INTO feedback (user_id, feedback) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../profile.php");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $userid, $feedback);
      mysqli_stmt_execute($stmt);
      header("Location: ../profile.php?success=detailssaved");
      exit();
    }
  }

  else {
    header("Location: ../index.php");
    exit();
  }
