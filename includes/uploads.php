<?php
  session_start();
  include_once 'dbh.inc.php';
  $mail = $_SESSION['usermail'];

  if (isset($_POST['profileimg-submit'])) {
    $file = $_FILES['profileimg-file'];

    $fileName = $_FILES['profileimg-file']['name'];
    $fileType = $_FILES['profileimg-file']['type'];
    $fileTmpName = $_FILES['profileimg-file']['tmp_name'];
    $fileError = $_FILES['profileimg-file']['error'];
    $fileSize = $_FILES['profileimg-file']['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg');

    if (!in_array($fileActualExt, $allowed)) {
      echo "This type of file is not allowed !!";
    }
    else {
      if ($fileError === 0) {
        if ($fileSize < 1000000) {
          $fileNameNew = "profile_".$mail.".".$fileActualExt;
          $fileDestination = '../uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $sql = "UPDATE profileimg SET profileimgstatus=0 WHERE usermail='$mail'";
          mysqli_query($conn, $sql);
          echo "upload completed...";
          header("Location: ../profile.php?uploadsuccess");
        }
        else {
          echo "Your file is too big !!";
        }
      }
      else {
        echo "There is an error uploading your file. Please try again !!";
      }
    }
  }
