<?php
  session_start();
  include_once 'includes/dbh.inc.php';
  $mail = $_SESSION['usermail'];
  $fullname = $_SESSION['fullname'];
  $mobile = $_SESSION['mobile'];
  $address = $_SESSION['address'];
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
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
            <h3 class="text-dark mb-4">Profile</h3>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img id="profileImg" class="rounded-circle mb-3 mt-4" width="160" height="160">
                          <?php include 'includes/change-profile-img.inc.php'; ?>
                            <div class="mb-3">
                              <form action="includes/uploads.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="profileimg-file" style="margin: auto 50px;">
                                <button class="btn btn-primary btn-sm mt-3" type="submit" name="profileimg-submit">Change Photo</button>
                              </form>
                              </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                </div>
                                <div class="card-body">
                                    <form action="includes/userdetails-update.php" method="post">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="full-name"><strong>Full Name</strong></label><input class="form-control" type="text" placeholder="full name" name="full-name"></div>
                                            </div>
                                            <div class="col" style="display: none;">
                                                <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" placeholder="user@example.com" name="email"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="mobile"><strong>Mobile</strong><br></label><input class="form-control" type="text" placeholder="mobile" name="mobile"></div>
                                                <input class="form-control" type="hidden" name="logged-mail" value="<?php echo $mail ?>">
                                            </div>
                                            <div class="col" style="display: none;"></div>
                                        </div>
                                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="submit-userdetails">Save Settings</button></div>
                                        <?php
                                          if (isset($_GET['error'])) {
                                            if ($_GET['error'] == "emptyuserfields") {
                                              echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Fill in all fields!</p>';
                                            }
                                            else if ($_GET['error'] == "invalidphoneuser") {
                                              echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Mobile no is not valid!</p>';
                                            }
                                          }
                                          else if (isset($_GET['success'])) {
                                            if ($_GET['success'] == "userdetailsupdated") {
                                              echo '<p style="display: block; text-align: center; color: blue; font-weight: bold;">Details updated successfully</p>';
                                            }
                                          }
                                         ?>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                </div>
                                <div class="card-body">
                                    <form action="includes/contactdetails-update.php" method="post">
                                        <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="text" placeholder="Sunset Blvd, 38" name="address"></div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="city"><strong>City</strong></label><input class="form-control" type="text" placeholder="Los Angeles" name="city"></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label for="country"><strong>Country</strong></label><input class="form-control" type="text" placeholder="USA" name="country"></div>
                                                <input class="form-control" type="hidden" name="logged-mail" value="<?php echo $mail ?>">
                                            </div>
                                        </div>
                                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="submit-contactdetails">Save&nbsp;Settings</button></div>
                                        <?php
                                          if (isset($_GET['error'])) {
                                            if ($_GET['error'] == "emptycontactfields") {
                                              echo '<p style="display: block; text-align: center; color: red; font-weight: bold;">Fill in all fields!</p>';
                                            }
                                          }
                                          else if (isset($_GET['success'])) {
                                            if ($_GET['success'] == "contactdetailsupdated") {
                                              echo '<p style="display: block; text-align: center; color: blue; font-weight: bold;">Details updated successfully</p>';
                                            }
                                          }
                                         ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Feedbacks</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="includes/feedback-submit.php" method="post">
                                <div class="form-group"><label for="signature"><strong>Feedback</strong><br></label><textarea class="form-control" rows="4" name="feedback"></textarea></div>

                                <input type="hidden" name="mail" value="<?php echo $mail ?>">
                                <div class="form-group"><button name="feedback-submit" class="btn btn-primary btn-sm" type="submit">Submit</button></div>
                            </form>
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
