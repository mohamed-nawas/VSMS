<?php
  session_start();
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
    <title>Table - Brand</title>
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
            <h3 class="text-dark mb-4">Enquiries</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Enquiry History</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                      <?php include 'includes/enquiry-history-table.php' ?>
                      <?php require 'includes/enquiry-history-table.php' ?>
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Enquiry No</th>
                                    <th>Enquiry Type</th>
                                    <th>Description</th>
                                    <th>Response</th>
                                    <th>Enquiry Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="height: 49px;"><?php echo $row1enquiryno ?></td>
                                    <td><?php echo $row1enquirytype ?></td>
                                    <td><?php echo $row1enquirydescription ?></td>
                                    <td><?php echo $row1enquiryresponse ?></td>
                                    <td><?php echo $row1enquirystatus ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row2enquiryno ?></td>
                                    <td><?php echo $row2enquirytype ?></td>
                                    <td><?php echo $row2enquirydescription ?></td>
                                    <td><?php echo $row2enquiryresponse ?></td>
                                    <td><?php echo $row2enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row3enquiryno ?></td>
                                    <td><?php echo $row3enquirytype ?></td>
                                    <td><?php echo $row3enquirydescription ?></td>
                                    <td><?php echo $row3enquiryresponse ?></td>
                                    <td><?php echo $row3enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row4enquiryno ?></td>
                                    <td><?php echo $row4enquirytype ?></td>
                                    <td><?php echo $row4enquirydescription ?></td>
                                    <td><?php echo $row4enquiryresponse ?></td>
                                    <td><?php echo $row4enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row5enquiryno ?></td>
                                    <td><?php echo $row5enquirytype ?></td>
                                    <td><?php echo $row5enquirydescription ?></td>
                                    <td><?php echo $row5enquiryresponse ?></td>
                                    <td><?php echo $row5enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row6enquiryno ?></td>
                                    <td><?php echo $row6enquirytype ?></td>
                                    <td><?php echo $row6enquirydescription ?></td>
                                    <td><?php echo $row6enquiryresponse ?></td>
                                    <td><?php echo $row6enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row7enquiryno ?><br></td>
                                    <td><?php echo $row7enquirytype ?></td>
                                    <td><?php echo $row7enquirydescription ?></td>
                                    <td><?php echo $row7enquiryresponse ?></td>
                                    <td><?php echo $row7enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row8enquiryno ?></td>
                                    <td><?php echo $row8enquirytype ?></td>
                                    <td><?php echo $row8enquirydescription ?></td>
                                    <td><?php echo $row8enquiryresponse ?></td>
                                    <td><?php echo $row8enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row9enquiryno ?></td>
                                    <td><?php echo $row9enquirytype ?></td>
                                    <td><?php echo $row9enquirydescription ?></td>
                                    <td><?php echo $row9enquiryresponse ?></td>
                                    <td><?php echo $row9enquirystatus ?><br></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row10enquiryno ?></td>
                                    <td><?php echo $row10enquirytype ?></td>
                                    <td><?php echo $row10enquirydescription ?></td>
                                    <td><?php echo $row10enquiryresponse ?></td>
                                    <td><?php echo $row10enquirystatus ?><br></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><strong>Enquiry No</strong></td>
                                    <td><strong>Enquiry Type</strong></td>
                                    <td><strong>Description</strong></td>
                                    <td><strong>Response</strong></td>
                                    <td><strong>Enquiry Status</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                        </div>
                        <div class="col-md-6">
                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
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
