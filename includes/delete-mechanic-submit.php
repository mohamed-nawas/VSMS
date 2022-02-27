<?php
  require 'dbh.inc.php';

  if (isset($_POST['row1-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row2-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row3-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row4-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row5-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row6-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row7-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row8-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row9-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else if (isset($_POST['row10-delete'])) {
    $mechanicid = $_POST['mechanic-id'];

    $sql = "DELETE FROM mechanic WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../delete-mechanic.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mechanicid);
      mysqli_stmt_execute($stmt);
      header("Location: ../delete-mechanic.php?success=delete");
      exit();
    }
  }

  else {
    header("Location: ../delete-mechanic.php");
    exit();
  }
