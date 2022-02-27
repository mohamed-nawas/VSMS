<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="includes/signup.inc.php" method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <?php include_once 'includes/misc.inc.php' ?>
                <div class="form-group"><input id="fullname-input_signup" class="form-control" type="text" name="full-name" placeholder="Full Name"></div>
                <?php
                  if (isset($_SESSION['fullname'])) {
                    $fullname = $_SESSION['fullname'];
                  }
                 ?>
                 <script>document.getElementById('fullname-input_signup').value = "<?php echo $fullname ?>"</script>
                <div class="form-group"><input id="mobile-input_signup" class="form-control" type="text" name="mobile" placeholder="Mobile"></div>
                <?php
                  if (isset($_SESSION['mobile'])) {
                    $mobile = $_SESSION['mobile'];
                  }
                 ?>
                 <script>document.getElementById('mobile-input_signup').value = "<?php echo $mobile ?>"</script>
                <div class="form-group"><input id="address-input_signup" class="form-control" type="text" name="address" placeholder="Address"></div>
                <?php
                  if (isset($_SESSION['address'])) {
                    $address = $_SESSION['address'];
                  }
                 ?>
                 <script>document.getElementById('address-input_signup').value = "<?php echo $address ?>"</script>
                <div class="form-group"><input id="mail-input_signup" class="form-control" type="email" name="mail" placeholder="Email"></div>
                <?php
                  if (isset($_SESSION['mail'])) {
                    $mail = $_SESSION['mail'];
                  }
                 ?>
                 <script>document.getElementById('mail-input_signup').value = "<?php echo $mail ?>"</script>
                <div class="form-group"><input class="form-control" type="password" name="pwd" placeholder="Password" maxlength="15" minlength="8"></div>
                <div class="form-group"><input class="form-control" type="password" name="pwd-repeat" placeholder="Password (repeat)" maxlength="15" minlength="8"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="signup-licencse-terms">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="signup-submit">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
