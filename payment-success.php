<?php
  require 'includes/dbh.inc.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JK AutoCare</title>
  </head>
  <body>
    <h4>Your Payment is successfull</h4>
    
    <h6>Payment ID : <?php echo $_GET['paymentId'] ?></h6>
    <a class="btn btn-primary" href="dashboard.php">Go to dashboard</a>
  </body>
</html>
