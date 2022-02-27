<?php
  session_start();
  $mail = $_SESSION['usermail'];
  $fullname = $_SESSION['fullname'];
  $mobile = $_SESSION['mobile'];
  $address = $_SESSION['address'];
  $vehtype = "";
  $vehname = "";
  $vehmodel = "";
  $vehbrand = "";
  $vehregno = "";
  $servicedate = "";
  $deliverytype = "";
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
      $(document).ready(function(){
        $("select").change(function(){
          $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
              $(".address").not("." + optionValue).hide();
              $("." + optionValue).show();
            } else{
              $(".address").hide();
            }
          });
        }).change();
      });
    </script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>JK AutOCARE</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt" style="margin-right: 10px;"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-user" style="margin-right: 10px;"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-item dropdown" style="padding-top: 10px;"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding: 16px;color: rgba(255,255,255);font-size: 13.6px;"><i class="fas fa-user-circle" style="margin-right: 10px;"></i><span>Service Request</span></a>
                            <div
                                class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="service-request-form.php"><i class="fab fa-wpforms" style="margin-right: 10px;"></i><span>Service Request Form</span></a><a class="dropdown-item" role="presentation" href="service-history.php"><i class="fas fa-history" style="margin-right: 10px;"></i><span>Service History</span></a></div>
            </div>
            </li>
            <li class="nav-item" role="presentation">
                <div class="nav-item dropdown" style="padding-top: 10px;"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding: 16px;color: rgba(255,255,255);font-size: 13.6px;"><i class="fas fa-pen-square" style="margin-right: 10px;"></i><span>Enquiry</span></a>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="enquiry-form.php"><i class="fab fa-wpforms" style="margin-right: 10px;"></i><span>Enquiry Form</span></a><a class="dropdown-item" role="presentation" href="enquiry-history.php"><i class="fas fa-history" style="margin-right: 10px;"></i><span>Enquiry History</span></a></div>
    </div>
    </li>
    </ul>
    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                    role="menu">
                                    <h6 class="dropdown-header">alerts center</h6>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                        </div>
                                    </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                    role="menu">
                                    <h6 class="dropdown-header">alerts center</h6>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                            <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                            <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                            <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                            <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                        </div>
                                    </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $fullname ?></span><img id="profileiconimg" class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                              <?php include 'includes/change-profile-img.inc.php'; ?>
                                <div
                                    class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                    <a
                                        class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="includes/logout.inc.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                </div>
                </li>
                </ul>
        </div>
        </nav>
        <div class="container-fluid">
            <h3 class="text-dark mb-4">Service Request</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Pending Request Editor</p>
                </div>
                <?php

                  if (isset($_GET['details'])) {
                    if ($_GET['details'] == "parse") {
                      $vehtype = $_GET['veh-type'];
                      $vehname = $_GET['veh-name'];
                      $vehmodel = $_GET['veh-model'];
                      $vehbrand = $_GET['veh-brand'];
                      $vehregno = $_GET['veh-regno'];
                      $servicedate = $_GET['date'];
                      $deliverytype = $_GET['del-type'];
                      $dropaddress = $_GET['drop-address'];
                      $orderid = $_GET['id'];
                    }
                  }
                  else if (isset($_GET['error'])) {
                    if ($_GET['error'] == "invalidlicensecheck") {
                      $vehtype = $_GET['veh-type'];
                      $vehname = $_GET['veh-name'];
                      $vehmodel = $_GET['veh-model'];
                      $vehbrand = $_GET['veh-brand'];
                      $vehregno = $_GET['veh-regno'];
                      $servicedate = $_GET['date'];
                      $deliverytype = $_GET['del-type'];
                    }
                  }
                 ?>
                <div class="card-body">
                    <form action="includes/pending-request-modifier-submit.php" method="post">
                      <div class="form-group">
                          <div class="row">
                              <div class="col text-center align-self-center"><label class="col-form-label">Vehicle Type</label></div>
                              <div class="col text-center align-self-center"><select class="custom-select custom-select-sm" name="vehicle-type" style="width: 514px;"><option value=<?php echo $vehtype ?> selected=""><?php echo $vehtype ?></option><option value="2-Wheel">2-Wheel</option><option value="3-Wheel">3-Wheel</option>
                                <option value="3-Wheel-Auto">3-Wheel-Auto</option><option value="4-Wheel">4-Wheel</option><option value="4-Wheel-Tractor">4-Wheel-Tractor</option></select></div>
                          </div>
                          <div class="row">
                              <div class="col text-center align-self-center"><label class="col-form-label">Vehicle Name</label></div>
                              <div class="col text-center align-self-center"><input type="text" value=<?php echo $vehname ?> name="vehicle-name" style="width: 514px;height: 31px;padding: 4px 28px 4px 8px;color: rgb(110,112,126);font-size: 14px;"></div>
                          </div>
                          <div class="row">
                              <div class="col text-center align-self-center"><label class="col-form-label">Vehicle Model</label></div>
                              <div class="col text-center align-self-center"><input type="text" value=<?php echo $vehmodel ?> name="vehicle-model" style="width: 514px;height: 31px;padding: 4px 28px 4px 8px;color: rgb(110,112,126);font-size: 14px;"></div>
                          </div>
                          <div class="row">
                              <div class="col text-center align-self-center"><label class="col-form-label">Vehicle Brand</label></div>
                              <div class="col text-center align-self-center"><input type="text" value=<?php echo $vehbrand ?> name="vehicle-brand" style="width: 514px;height: 31px;padding: 4px 28px 4px 8px;color: rgb(110,112,126);font-size: 14px;"></div>
                          </div>
                          <div class="row">
                              <div class="col text-center align-self-center"><label class="col-form-label">Vehicle Registration No</label></div>
                              <div class="col text-center align-self-center"><input type="text" value=<?php echo $vehregno ?> name="vehicle-regno" style="width: 514px;height: 31px;padding: 4px 28px 4px 8px;color: rgb(110,112,126);font-size: 14px;"></div>
                          </div>
                          <div class="row">
                              <div class="col text-center align-self-center"><label class="col-form-label">Service Date</label></div>
                              <div class="col text-center align-self-center"><input type="date" value=<?php echo $servicedate ?> name="service-date" style="height: 31px;width: 514px;padding: 4px 28px 4px 8px;font-size: 14px;color: rgb(110,112,126);" required=""></div>
                          </div>
                          <div class="row">
                              <div class="col text-center align-self-center"><label class="col-form-label">Delivery Type</label></div>
                              <div class="col text-center align-self-center"><select class="custom-select custom-select-sm" name="delivery-type" style="width: 514px;"><option value="<?php echo $deliverytype ?>" selected=""><?php echo $deliverytype ?></option><option value="pickup-service">pickup-service</option><option value="drop-service">drop-service</option></select></div>
                          </div>
                          <div class="row drop-service address">
                              <div class="col text-center align-self-center"><label class="col-form-label">Address</label></div>
                              <div class="col text-center align-self-center"><input type="text" value="<?php echo $dropaddress ?>" name="address" style="height: 31px;width: 514px;padding: 4px 28px 4px 8px;font-size: 14px;color: rgb(110,112,126);"></div>
                          </div>
                          <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                          <input type="hidden" name="order-id" value="<?php echo $orderid ?>">
                          <div class="custom-control text-right custom-checkbox"><input class="custom-control-input" type="checkbox" name="license-check" id="formCheck-1"><label class="custom-control-label" for="formCheck-1">I accept terms and conditions</label></div><button class="btn btn-primary float-right" type="submit" name="pending-request-modifier-save" style="width: 80px; margin-left: 10px;">Save</button>
                        <button class="btn btn-primary float-right" type="submit" name="pending-request-modifier-confirm" style="width: 90px;">Confirm</button></div>
                          <?php include_once 'includes/misc.inc.php' ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Brand 2020</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
