<?php
  session_start();
  $mail = $_SESSION['usermail'];
  $fullname = $_SESSION['fullname'];
  $mobile = $_SESSION['mobile'];
  $address = $_SESSION['address'];
  $finalCount = "";
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<?php include_once 'includes/userdashboard-info.php' ?>
<body id="page-top">
    <div id="wrapper">
      <! start navigation >
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>JK AutOCARE</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="dashboard.php"><i class="fas fa-tachometer-alt" style="margin-right: 10px;"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-user" style="margin-right: 10px;"></i><span>Profile</span></a></li>

            <li class="nav-item" role="presentation">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRequest"
                aria-expanded="true" aria-controls="collapseRequest">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Requests</span>
              </a>
              <div id="collapseRequest" class="collapse" aria-labelledby="headingRequest" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Service Requests</h6>
                  <a class="collapse-item" href="service-request-form.php">Request Form</a>
                  <a class="collapse-item" href="service-history.php">Service History</a>
                </div>
              </div>
            </li>

    <li class="nav-item" role="presentation">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEnquiry"
        aria-expanded="true" aria-controls="collapseEnquiry">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Enquiry</span>
      </a>
      <div id="collapseEnquiry" class="collapse" aria-labelledby="headingEnquiry" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Enquiries</h6>
          <a class="collapse-item" href="enquiry-form.php">Enquiry Form</a>
          <a class="collapse-item" href="enquiry-history.php">Enquiry History</a>
        </div>
      </div>
    </li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="payments.php"><i class="fab fa-fw fa-wpforms" style="margin-right: 10px;"></i><span>Payments</span></a></li>
    </ul>
    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
  </nav><! end navigation >
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
          <! start navigation >
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
                          <?php
                            include_once 'includes/dbh.inc.php';
                            $closedenquiryarray = getClosedEnquiry($mail, $conn);
                            $closedenquiryresponsearray = $closedenquiryarray[1];
                            $count = count($closedenquiryresponsearray);
                           ?>
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i>
                              <?php if ($count != 0): ?>
                                <?php echo '<span class="badge badge-danger badge-counter">' ?>
                                <?php echo $count ?>
                                <?php echo '</span>' ?>
                              <?php endif; ?>
                            </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                    role="menu">
                                    <h6 class="dropdown-header">alerts center</h6>
                                    <?php if (!empty($closedenquiryresponsearray[0])): ?>
                                      <a class="d-flex align-items-center dropdown-item" href="#">
                                          <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="uploads/profile_default.jpg">
                                              <div class="bg-success status-indicator"></div>
                                          </div>
                                          <div class="font-weight-bold">
                                              <div class="text-truncate"><span><?php echo $closedenquiryresponsearray[0] ?></span></div>
                                              <p class="small text-gray-500 mb-0">Admin</p>
                                          </div>
                                      </a>
                                    <?php endif; ?>
                                    <?php if (!empty($closedenquiryresponsearray[1])): ?>
                                      <a class="d-flex align-items-center dropdown-item" href="#">
                                          <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="uploads/profile_default.jpg">
                                              <div class="bg-success status-indicator"></div>
                                          </div>
                                          <div class="font-weight-bold">
                                              <div class="text-truncate"><span><?php echo $closedenquiryresponsearray[1] ?></span></div>
                                              <p class="small text-gray-500 mb-0">Admin</p>
                                          </div>
                                      </a>
                                    <?php endif; ?>
                                    <?php if (!empty($closedenquiryresponsearray[2])): ?>
                                      <a class="d-flex align-items-center dropdown-item" href="#">
                                          <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="uploads/profile_default.jpg">
                                              <div class="bg-success status-indicator"></div>
                                          </div>
                                          <div class="font-weight-bold">
                                              <div class="text-truncate"><span><?php echo $closedenquiryresponsearray[2] ?></span></div>
                                              <p class="small text-gray-500 mb-0">Admin</p>
                                          </div>
                                      </a>
                                    <?php endif; ?>
                                    <?php if (!empty($closedenquiryresponsearray[3])): ?>
                                      <a class="d-flex align-items-center dropdown-item" href="#">
                                          <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="uploads/profile_default.jpg">
                                              <div class="bg-success status-indicator"></div>
                                          </div>
                                          <div class="font-weight-bold">
                                              <div class="text-truncate"><span><?php echo $closedenquiryresponsearray[3] ?></span></div>
                                              <p class="small text-gray-500 mb-0">Admin</p>
                                          </div>
                                      </a>
                                    <?php endif; ?>
                                    <?php if ($count != 0): ?>
                                      <a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                    <?php endif; ?>
                                    <?php if ($count == 0): ?>
                                      <a class="text-center dropdown-item small text-gray-500" href="#">No items to show</a></div>
                                    <?php endif; ?>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $fullname ?></span><img id="profileiconimg" class="border rounded-circle img-profile"></a>
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
      </nav><! end navigation >
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-left-primary py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col mr-2">
                                    <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Earnings (monthly)</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0"><span>$40,000</span></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-left-success py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col mr-2">
                                    <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Earnings (annual)</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0"><span>$215,000</span></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <a href="pending-request.php">
                      <div class="card shadow border-left-info py-2">
                          <div class="card-body">
                              <div class="row align-items-center no-gutters">
                                  <div class="col mr-2">
                                      <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Uncomfirmed Requests</span></div>
                                      <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                              <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span></span></div>
                                          </div>
                                          <div class="col">
                                              <div class="progress progress-sm">
                                                  <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                              </div>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <a href="service-history.php">
                      <div class="card shadow border-left-warning py-2">
                          <div class="card-body">
                              <div class="row align-items-center no-gutters">
                                  <div class="col mr-2">
                                      <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Confirmed Requests</span></div>
                                      <?php
                                        require 'includes/dbh.inc.php';
                                        $sql = "SELECT COUNT('id') AS pending_requests FROM services WHERE request_email=? AND service_status=? AND request_status=?";
                                        $stmt = mysqli_stmt_init($conn);
                                        $servicestatus = "incomplete";
                                        $requeststatus = "confirmed";
                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                          header("Location: dashborad.php?error=sqlerror");
                                          exit();
                                        }
                                        else {
                                          mysqli_stmt_bind_param($stmt, "sss", $mail, $servicestatus, $requeststatus);
                                          mysqli_stmt_execute($stmt);
                                          $result = mysqli_stmt_get_result($stmt);
                                          $row = mysqli_fetch_object($result);
                                          $finalCount = $row->pending_requests;
                                        }
                                       ?>
                                      <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $finalCount ?></span></div>
                                  </div>
                                  <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                              </div>
                          </div>
                      </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                    role="menu">
                                    <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                    role="menu">
                                    <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
                            <div
                                class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;Direct</span><span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;Social</span><span class="mr-2"><i class="fas fa-circle text-info"></i>&nbsp;Refferal</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <?php include 'includes/dbh.inc.php' ?>
                        <h6 class="text-primary font-weight-bold m-0">Orders Tracking</h6>
                    </div>
                    <div class="card-body">
                      <?php
                      $ordercount = orders($mail, $conn);
                       ?>
                        <?php if ($ordercount != 0): ?>
                          <?php
                                $twoWheelServiceCount = twoWheel($mail, $conn);
                                $threeWheelServiceCount = threeWheel($mail, $conn);
                                $threeWheelAutoServiceCount = threeWheelAuto($mail, $conn);
                                $fourWheelServiceCount = fourWheel($mail, $conn);
                                $fourWheelTractorServiceCount = fourWheelTractor($mail, $conn);
                                $ratio1 = ($twoWheelServiceCount/$ordercount)*100;
                                $ratio2 = ($threeWheelServiceCount/$ordercount)*100;
                                $ratio3 = ($threeWheelAutoServiceCount/$ordercount)*100;
                                $ratio4 = ($fourWheelServiceCount/$ordercount)*100;
                                $ratio5 = ($fourWheelTractorServiceCount/$ordercount)*100;
                           ?>
                        <?php endif; ?>
                        <?php if ($ordercount != 0): ?>
                          <h4 class="small font-weight-bold">Two Wheel Service<span class="float-right"><?php echo $ratio1 ?>%</span></h4>
                          <div class="progress mb-4">
                              <?php echo '<div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: '.$ratio1.'%;"><span class="sr-only">20%</span></div>' ?>
                          </div>
                          <h4 class="small font-weight-bold">Three Wheel Service<span class="float-right"><?php echo $ratio2 ?>%</span></h4>
                          <div class="progress mb-4">
                              <?php echo '<div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: '.$ratio2.'%;"><span class="sr-only">20%</span></div>' ?>
                          </div>
                          <h4 class="small font-weight-bold">Three Wheel Auto Service<span class="float-right"><?php echo $ratio3 ?>%</span></h4>
                          <div class="progress mb-4">
                              <?php echo '<div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: '.$ratio3.'%;"><span class="sr-only">20%</span></div>' ?>
                          </div>
                          <h4 class="small font-weight-bold">Four Wheel Service<span class="float-right"><?php echo $ratio4 ?>%</span></h4>
                          <div class="progress mb-4">
                              <?php echo '<div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: '.$ratio4.'%;"><span class="sr-only">20%</span></div>' ?>
                          </div>
                          <h4 class="small font-weight-bold">Four Wheel Tractor Service<span class="float-right"><?php echo $ratio5 ?>%</span></h4>
                          <div class="progress mb-4">
                              <?php echo '<div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: '.$ratio5.'%;"><span class="sr-only">20%</span></div>' ?>
                          </div>
                        <?php endif; ?>
                    </div>
                </div>
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
