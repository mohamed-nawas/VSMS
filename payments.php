<?php
  session_start();
  $mail = $_SESSION['usermail'];
  $fullname = $_SESSION['fullname'];
  $mobile = $_SESSION['mobile'];
  $address = $_SESSION['address'];
  $orderidarray = [];
  $invoiceidarray = [];
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
            <h3 class="text-dark mb-4">Payments</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Invoices</p>
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
                      <?php
                        require 'includes/dbh.inc.php';
                        $sql = "SELECT id FROM services WHERE request_email=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                          header("Location: ../payments.php?error=sqlerror");
                          exit();
                        }
                        else {
                          mysqli_stmt_bind_param($stmt, "s", $mail);
                          mysqli_stmt_execute($stmt);
                          $result = mysqli_stmt_get_result($stmt);
                          while ($row = mysqli_fetch_assoc($result)) {
                            array_push($orderidarray, $row['id']);
                          }
                        }

                        for ($i = 0; $i < count($orderidarray); $i++) {
                          $sql1 = "SELECT id FROM invoice WHERE order_id=? AND invoice_status=?";
                          $stmt1 = mysqli_stmt_init($conn);
                          if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                            header("Location: ../payments.php?error=sqlerror");
                            exit();
                          }
                          else {
                            $notpayedinvoicestatus = "not-payed";
                            mysqli_stmt_bind_param($stmt1, "ss", $orderidarray[$i], $notpayedinvoicestatus);
                            mysqli_stmt_execute($stmt1);
                            $result1 = mysqli_stmt_get_result($stmt1);
                            if ($row1 = mysqli_fetch_assoc($result1)) {
                              array_push($invoiceidarray, $row1['id']);
                            }
                          }
                        }
                       ?>
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Invoice ID</th>
                                    <th></th>
                                    <th></th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php if (!empty($invoiceidarray[0])): ?>
                                      <td style="height: 49px;"><?php echo $invoiceidarray[0] ?></td>
                                      <td></td>
                                      <td></td>
                                      <form action="view-invoice.php" method="post">
                                        <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[0] ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $orderidarray[0] ?>">
                                        <td><button type="submit" name="row1-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                      </form>
                                      <form action="includes/pay-invoice.php" method="post">
                                        <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[0] ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $orderidarray[0] ?>">
                                        <td><button type="submit" name="row1-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button></td>
                                      </form>
                                    <?php endif; ?>
                                    <?php if (empty($invoiceidarray[0])): ?>
                                      <td style="height: 49px;"></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <?php if (!empty($invoiceidarray[1])): ?>
                                      <td><?php echo $invoiceidarray[1] ?></td>
                                      <td></td>
                                      <td></td>
                                      <form action="view-invoice.php" method="post">
                                        <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[1] ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $orderidarray[1] ?>">
                                        <td><button type="submit" name="row2-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                      </form>
                                      <form action="includes/pay-invoice.php" method="post">
                                        <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[1] ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $orderidarray[1] ?>">
                                        <td><button type="submit" name="row2-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                      </form>
                                    <?php endif; ?>
                                    <?php if (empty($invoiceidarray[1])): ?>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><br></td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[2])): ?>
                                    <td><?php echo $invoiceidarray[2] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row3-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[2] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[2] ?>">
                                      <td><button type="submit" name="row3-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[2])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[3])): ?>
                                    <td><?php echo $invoiceidarray[3] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row4-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[3] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[3] ?>">
                                      <td><button type="submit" name="row4-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[3])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[4])): ?>
                                    <td><?php echo $invoiceidarray[4] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row5-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[4] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[4] ?>">
                                      <td><button type="submit" name="row5-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[4])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[5])): ?>
                                    <td><?php echo $invoiceidarray[5] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row6-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[5] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[5] ?>">
                                      <td><button type="submit" name="row6-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[5])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[6])): ?>
                                    <td><?php echo $invoiceidarray[6] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row7-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[6] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[6] ?>">
                                      <td><button type="submit" name="row7-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[6])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[7])): ?>
                                    <td><?php echo $invoiceidarray[7] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row8-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[7] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[7] ?>">
                                      <td><button type="submit" name="row8-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[7])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[8])): ?>
                                    <td><?php echo $invoiceidarray[8] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row9-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[8] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[8] ?>">
                                      <td><button type="submit" name="row9-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[8])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                                <tr>
                                  <?php if (!empty($invoiceidarray[9])): ?>
                                    <td><?php echo $invoiceidarray[9] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" name="row10-view-invoice" class="btn btn-sm btn-primary">View Invoice</button></td>
                                    <form action="includes/pay-invoice.php" method="post">
                                      <input type="hidden" name="invoice-id" value="<?php echo $invoiceidarray[9] ?>">
                                      <input type="hidden" name="order-id" value="<?php echo $orderidarray[9] ?>">
                                      <td><button type="submit" name="row10-pay-invoice" class="btn btn-sm btn-primary">Pay Bill</button><br></td>
                                    </form>
                                  <?php endif; ?>
                                  <?php if (empty($invoiceidarray[9])): ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br></td>
                                  <?php endif; ?>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><strong>Invoice ID</strong></td>
                                    <td><strong></strong></td>
                                    <td><strong></strong></td>
                                    <td><strong>Details</strong></td>
                                    <td><strong>Action</strong></td>
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
                                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">??</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">??</span></a></li>
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
            <div class="text-center my-auto copyright"><span>Copyright ?? Brand 2020</span></div>
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
