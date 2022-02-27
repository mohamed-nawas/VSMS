<?php
  require_once 'config.php';
  require 'dbh.inc.php';

  $sql = "UPDATE invoice SET invoice_status=? WHERE id=?";
  $stmt = mysqli_stmt_init($conn);
  $invoicestatus = "payed";

  if (isset($_POST['submit'])) {
    $invoiceid = $_POST['invoice-id'];
      try {
          $response = $gateway->purchase(array(
              'amount' => $_POST['amount'],
              'currency' => PAYPAL_CURRENCY,
              'returnUrl' => PAYPAL_RETURN_URL,
              'cancelUrl' => PAYPAL_CANCEL_URL,
          ))->send();

          if ($response->isRedirect()) {
              $response->redirect(); // this will automatically forward the customer
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../payment-view.php?error=sqlerror");
                exit();
              }
              else {
                mysqli_stmt_bind_param($stmt, "ss", $invoicestatus, $invoiceid);
                mysqli_stmt_execute($stmt);
                header("Location: ../payment-view.php");
                exit();
              }
          } else {
              // not successful
              echo $response->getMessage();
          }
      } catch(Exception $e) {
          echo $e->getMessage();
      }
  }
