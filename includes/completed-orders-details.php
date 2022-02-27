<?php
  require 'dbh.inc.php';

  if (isset($_POST['row1-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row2-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row3-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row4-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row5-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row6-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row7-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row8-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row9-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }
  else if (isset($_POST['row10-details'])) {
    $orderid = $_POST['order-id'];

    header("Location: ../completed-orders-details-view.php?details=parse&id=".$orderid);
    exit();
  }

  else {
    header("Location: ../index.php");
    exit();
  }
