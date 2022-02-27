<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/img/logo/logo.png" rel="icon">
  <title>JK AutoCare</title>
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/ruang-admin.min.css" rel="stylesheet">
</head>

<?php include_once 'includes/report-data.php' ?>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <!-- <img src="img/logo/logo2.png"> -->
        </div>
        <div class="sidebar-brand-text mx-3">JK AutoCare</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="admin-dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Service
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Orders</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Orders</h6>
            <a class="collapse-item" href="pending-orders.php">Pending Orders</a>
            <a class="collapse-item" href="completed-orders.php">Completed Orders</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Enquiries</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Enquiries</h6>
            <a class="collapse-item" href="open-enquiries.php">Open Enquiries</a>
            <a class="collapse-item" href="closed-enquiries.php">Closed Enquiries</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Billing</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Payments</h6>
            <a class="collapse-item" href="completed-order-bill.php">Orders</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Managements
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Staff</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Staff Management</h6>
            <a class="collapse-item" href="add-mechanic.php">Add Staff</a>
            <a class="collapse-item" href="delete-mechanic.php">Delete Staff</a>
            <a class="collapse-item" href="modify-mechanic.php">Modify Details</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifications
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-warning badge-counter"><?php echo $openenquirycount ?></span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <?php if (!empty($enquirydescriptionarray[0])): ?>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <?php if (file_exists("uploads/profile_".$enquirymailarray[0].".jpg")): ?>
                        <?php echo '<img class="rounded-circle" src="uploads/profile_'.$enquirymailarray[0].'.jpg" style="max-width: 60px" alt="">' ?>
                      <?php endif; ?>
                      <?php if (!file_exists("uploads/profile_".$enquirymailarray[0].".jpg")): ?>
                        <?php echo '<img class="rounded-circle" src="uploads/profile_default.jpg" style="max-width: 60px" alt="">' ?>
                      <?php endif; ?>
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate"><?php echo $enquirydescriptionarray[0] ?></div>
                      <div class="small text-gray-500"><?php echo $enquirynamearray[0] ?></div>
                    </div>
                  </a>
                <?php endif; ?>
                <?php if (!empty($enquirydescriptionarray[1])): ?>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <?php if (file_exists("uploads/profile_".$enquirymailarray[1].".jpg")): ?>
                        <?php echo '<img class="rounded-circle" src="uploads/profile_'.$enquirymailarray[1].'.jpg" style="max-width: 60px" alt="">' ?>
                      <?php endif; ?>
                      <?php if (!file_exists("uploads/profile_".$enquirymailarray[1].".jpg")): ?>
                        <?php echo '<img class="rounded-circle" src="uploads/profile_default.jpg" style="max-width: 60px" alt="">' ?>
                      <?php endif; ?>
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate"><?php echo $enquirydescriptionarray[1] ?></div>
                      <div class="small text-gray-500"><?php echo $enquirynamearray[1] ?></div>
                    </div>
                  </a>
                <?php endif; ?>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="assets/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Earnings</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $totalearningsformatted ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Sales</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $salescount ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Since last years</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">New User</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $usercount ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pendingrequestcount ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Services Sold</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Month <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Select Periode</div>
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Week</a>
                      <a class="dropdown-item active" href="#">Month</a>
                      <a class="dropdown-item" href="#">This Year</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <div class="small text-gray-500">Two Wheel Service
                      <div class="small float-right"><b><?php echo $twoWheelServiceCount ?> of <?php echo $ordercount ?> Services</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <?php $ratio = ($twoWheelServiceCount/$ordercount)*100 ?>
                      <?php echo '<div class="progress-bar bg-warning" role="progressbar" style="width: '.$ratio.'%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>' ?>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Three Wheel Service
                      <div class="small float-right"><b><?php echo $threeWheelServiceCount ?> of <?php echo $ordercount ?> Services</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <?php $ratio = ($threeWheelServiceCount/$ordercount)*100 ?>
                      <?php echo '<div class="progress-bar bg-success" role="progressbar" style="width: '.$ratio.'%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>' ?>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Three Wheel Auto Service
                      <div class="small float-right"><b><?php echo $threeWheelAutoServiceCount ?> of <?php echo $ordercount ?> Services</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <?php $ratio = ($threeWheelAutoServiceCount/$ordercount)*100 ?>
                      <?php echo '<div class="progress-bar bg-danger" role="progressbar" style="width: '.$ratio.'%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>' ?>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Four Wheel Service
                      <div class="small float-right"><b><?php echo $fourWheelServiceCount ?> of <?php echo $ordercount ?> Services</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <?php $ratio = ($fourWheelServiceCount/$ordercount)*100 ?>
                      <?php echo '<div class="progress-bar bg-primary" role="progressbar" style="width: '.$ratio.'%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>' ?>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Four Wheel Tractor Service
                      <div class="small float-right"><b><?php echo $fourWheelTractorServiceCount ?> of <?php echo $ordercount ?> Services</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <?php $ratio = ($fourWheelTractorServiceCount/$ordercount)*100 ?>
                      <?php echo '<div class="progress-bar bg-info" role="progressbar" style="width: '.$ratio.'%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>' ?>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a class="m-0 small text-primary card-link" href="#">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <!-- Invoice Example -->
            <div class="col-xl-8 col-lg-7 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
                  <a class="m-0 float-right btn btn-danger btn-sm" href="orders.php">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <div class="table-responsive">
                  <?php include_once 'includes/order-table.php' ?>
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Order No</th>
                        <th>Customer</th>
                        <th>Service Type</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php if (!empty($row1orderid)): ?>
                          <td>1</td>
                        <?php endif; ?>
                        <td><?php echo $row1customername ?></td>
                        <td><?php echo $row1servicetype ?></td>
                        <?php if ($row1deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row1deliverystatus == "not-delivered"): ?>
                          <?php if ($row1servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row1servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row1orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row2orderid)): ?>
                          <td>2</td>
                        <?php endif; ?>
                        <td><?php echo $row2customername ?></td>
                        <td><?php echo $row2servicetype ?></td>
                        <?php if ($row2deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row2deliverystatus == "not-delivered"): ?>
                          <?php if ($row2servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row2servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row2orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row3orderid)): ?>
                          <td>3</td>
                        <?php endif; ?>
                        <td><?php echo $row3customername ?></td>
                        <td><?php echo $row3servicetype ?></td>
                        <?php if ($row3deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row3deliverystatus == "not-delivered"): ?>
                          <?php if ($row3servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row3servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row3orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row4orderid)): ?>
                          <td>4</td>
                        <?php endif; ?>
                        <td><?php echo $row4customername ?></td>
                        <td><?php echo $row4servicetype ?></td>
                        <?php if ($row4deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row4deliverystatus == "not-delivered"): ?>
                          <?php if ($row4servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row4servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row4orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row5orderid)): ?>
                          <td>5</td>
                        <?php endif; ?>
                        <td><?php echo $row5customername ?></td>
                        <td><?php echo $row5servicetype ?></td>
                        <?php if ($row5deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row5deliverystatus == "not-delivered"): ?>
                          <?php if ($row5servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row5servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row5orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <!-- Message From Customer-->
            <div class="col-xl-4 col-lg-5 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light">Message From Customer</h6>
                </div>
                <div>
                  <?php if (!empty($enquirydescriptionarray[0])): ?>
                    <div class="customer-message align-items-center">
                      <a class="font-weight-bold" href="#">
                        <div class="text-truncate message-title"><?php echo $enquirydescriptionarray[0] ?></div>
                        <div class="small text-gray-500 message-time font-weight-bold"><?php echo $enquirynamearray[0] ?></div>
                      </a>
                    </div>
                  <?php endif; ?>
                  <?php if (!empty($enquirydescriptionarray[1])): ?>
                    <div class="customer-message align-items-center">
                      <a class="font-weight-bold" href="#">
                        <div class="text-truncate message-title"><?php echo $enquirydescriptionarray[1] ?></div>
                        <div class="small text-gray-500 message-time font-weight-bold"><?php echo $enquirynamearray[1] ?></div>
                      </a>
                    </div>
                  <?php endif; ?>
                  <?php if (!empty($enquirydescriptionarray[2])): ?>
                    <div class="customer-message align-items-center">
                      <a class="font-weight-bold" href="#">
                        <div class="text-truncate message-title"><?php echo $enquirydescriptionarray[2] ?></div>
                        <div class="small text-gray-500 message-time font-weight-bold"><?php echo $enquirynamearray[2] ?></div>
                      </a>
                    </div>
                  <?php endif; ?>
                  <?php if (!empty($enquirydescriptionarray[3])): ?>
                    <div class="customer-message align-items-center">
                      <a class="font-weight-bold" href="#">
                        <div class="text-truncate message-title"><?php echo $enquirydescriptionarray[3] ?></div>
                        <div class="small text-gray-500 message-time font-weight-bold"><?php echo $enquirynamearray[3] ?></div>
                      </a>
                    </div>
                  <?php endif; ?>
                  <?php if (!empty($enquirymailarray[0])): ?>
                    <div class="card-footer text-center">
                      <a class="m-0 small text-primary card-link" href="#">View More <i
                          class="fas fa-chevron-right"></i></a>
                    </div>
                  <?php endif; ?>
                  <?php if (empty($enquirymailarray[0])): ?>
                    <div class="card-footer text-center">
                      <a class="m-0 small text-primary card-link" href="#">No items to show <i
                          class="fas fa-chevron-right"></i></a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- <div class="row">
            <div class="col-lg-12 text-center">
              <p>Do you like this template ? you can download from <a href="https://github.com/indrijunanda/RuangAdmin"
                  class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
            </div>
          </div> -->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="index.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">CleanCodeOnline</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/assets/js/ruang-admin.min.js"></script>
  <script src="assets/vendor/chart.js/Chart.min.js"></script>
  <script src="assets/js/demo/chart-area-demo.js"></script>
</body>

</html>
