<?php

if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  $fullName = $_POST['full-name'];
  $mobile = $_POST['mobile'];
  $mail = $_POST['mail'];
  $address = $_POST['address'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  $licenseCheck = false;
  if (isset($_POST['signup-licencse-terms'])) {
    $licenseCheck = true;
  }

  if (empty($fullName) || empty($mobile) || empty($mail) || empty($address) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../signup.php?error=emptyfields&full-name=".$fullName."&mobile=".$mobile."&mail=".$mail."&address=".$address);
    exit();
  }

  else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[0-9]{10}+$/", $mobile)) {
    session_start();
    $_SESSION['fullname'] = $fullName;
    $_SESSION['address'] = $address;
    header("Location: ../signup.php?error=invalidmailphone&full-name=".$fullName."&address=".$address);
    exit();
  }

  else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    session_start();
    $_SESSION['fullname'] = $fullName;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['address'] = $address;
    header("Location: ../signup.php?error=invalidmail&full-name=".$fullName."&mobile=".$mobile."&address=".$address);
    exit();
  }

  else if (!preg_match("/^[0-9]{10}+$/", $mobile)) {
    session_start();
    $_SESSION['fullname'] = $fullName;
    $_SESSION['mail'] = $mail;
    $_SESSION['address'] = $address;
    header("Location: ../signup.php?error=invalidphone&full-name=".$fullName."&mail=".$mail."&address=".$address);
    exit();
  }

  else if ($password !== $passwordRepeat) {
    session_start();
    $_SESSION['fullname'] = $fullName;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['mail'] = $mail;
    $_SESSION['address'] = $address;
    header("Location: ../signup.php?error=passwordcheck&full-name=".$fullName."&mobile=".$mobile."&mail=".$mail."&address=".$address);
    exit();
  }

  else {
    $sql = "SELECT email FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mail);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        session_start();
        $_SESSION['fullname'] = $fullName;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['address'] = $address;
        header("Location: ../signup.php?error=emailexists&full-name=".$fullName."&mobile=".$mobile."&address=".$address);
        exit();
      }
      else {
        $sql = "INSERT INTO users (full_name, mobile, email, address, pwd) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../index.php?error=sqlerror");
          exit();
        }
        else {
          if ($licenseCheck) {
            $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sssss", $fullName, $mobile, $mail, $address, $hashedpwd);
            mysqli_stmt_execute($stmt);

            $sql = "INSERT INTO profileimg (usermail, profileimgstatus) VALUES ('$mail', 1)";
            mysqli_query($conn, $sql);

            header("Location: ../login.php?success=signup");
            exit();
          }
          else {
            header("Location: ../signup.php?error=invalidlicensecheck&full-name=".$fullName."&mobile=".$mobile."&address=".$address."&mail=".$mail);
            exit();
          }
        }
      }
    }
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

else {
  header("Location: ../index.php");
  exit();
}
