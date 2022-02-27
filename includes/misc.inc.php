<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Footer</title>
  </head>
  <body>
    <! this is the start of possible error messages section >
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Fill in all fields!</p>';
        }
        else if ($_GET['error'] == "invalidmailphone") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Mail and Mobile no are not valid!</p>';
        }
        else if ($_GET['error'] == "invalidmail") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Mail is not valid!</p>';
        }
        else if ($_GET['error'] == "invalidphone") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Mobile no is not valid!</p>';
        }
        else if ($_GET['error'] == "passwordcheck") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Passwords dont match each other!</p>';
        }
        else if ($_GET['error'] == "invalidlicensecheck") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">You didnt check the license terms!</p>';
        }
        else if ($_GET['error'] == "emailexists") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">User already exists, Please login!</p>';
        }
        else if ($_GET['error'] == "wrongpwd") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Email and Password dont match!</p>';
        }
        else if ($_GET['error'] == "nouser") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">This Mail is not registered, Please register!</p>';
        }
        else if ($_GET['error'] == "invaliduser") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Admin authorization failed!</p>';
        }
        else if ($_GET['error'] == "sqlerror") {
          echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">An error occurred, Please try later!</p>';
        }
      }
      else if (isset($_GET['success'])) {
        if ($_GET['success'] == "detailsupdated") {
          echo '<p style="display: block; text-align: center; color: blue; font-weight: bold;">Details updated successfully</p>';
        }
        else if ($_GET['success'] == "signup") {
          echo '<p style="display: block; text-align: center; color: blue; font-weight: bold;">Signup successfull, Please login</p>';
        }
        else if ($_GET['success'] == "detailssaved") {
          echo '<p style="display: block; text-align: center; color: blue; font-weight: bold;">Details saved successfully</p>';
        }
      }
     ?>
    <! this is the end of possible error messages section >

    <! this is the start of possible success messages section >

    <! this is the end of possible success messages section >

    <! start of refilling correctly entered fields in case of error >
    <?php
      // if (isset($_SESSION['fullname'])) {
      //   $fullname = $_SESSION['fullname'];
      // }
     ?>
     <!-- <script>document.getElementById('fullname-input_signup').value = "<?php echo $fullname ?>"</script> -->
     <?php
       // if (isset($_SESSION['mobile'])) {
       //   $mobile = $_SESSION['mobile'];
       // }
      ?>
      <!-- <script>document.getElementById('mobile-input_signup').value = "<?php echo $mobile ?>"</script> -->
      <?php
        // if (isset($_SESSION['mail'])) {
        //   $mail = $_SESSION['mail'];
        // }
       ?>
       <!-- <script>document.getElementById('mail-input_signup').value = "<?php echo $mail ?>"</script> -->
       <?php
         // if (isset($_SESSION['address'])) {
         //   $address = $_SESSION['address'];
         // }
        ?>
        <!-- <script>document.getElementById('address-input_signup').value = "<?php echo $address ?>"</script> -->
     <! end of refilling correctly entered fields in case of error >

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
