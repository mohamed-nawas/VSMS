<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>JK AutoCare</title>
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/ruang-admin.min.css" rel="stylesheet">
</head>

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
                <span class="badge badge-warning badge-counter">2</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Udin Cilok · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-default"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Jaenab · 2w</div>
                  </div>
                </a>
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
            <h1 class="h3 mb-0 text-gray-800">Orders</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Orders</li>
              <li class="breadcrumb-item active" aria-current="page">All Orders</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" aria-describedby="dataTable_info">
                  <?php include 'includes/order-table.php' ?>
                  <?php require 'includes/order-table.php' ?>
                  <table class="table align-items-center table-flush" id="dataTable">
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
                      <tr>
                        <?php if (!empty($row6orderid)): ?>
                          <td>6</td>
                        <?php endif; ?>
                        <td><?php echo $row6customername ?></td>
                        <td><?php echo $row6servicetype ?></td>
                        <?php if ($row6deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row6deliverystatus == "not-delivered"): ?>
                          <?php if ($row6servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row6servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row6orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row7orderid)): ?>
                          <td>7</td>
                        <?php endif; ?>
                        <td><?php echo $row7customername ?></td>
                        <td><?php echo $row7servicetype ?></td>
                        <?php if ($row7deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row7deliverystatus == "not-delivered"): ?>
                          <?php if ($row7servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row7servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row7orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row8orderid)): ?>
                          <td>8</td>
                        <?php endif; ?>
                        <td><?php echo $row8customername ?></td>
                        <td><?php echo $row8servicetype ?></td>
                        <?php if ($row8deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row8deliverystatus == "not-delivered"): ?>
                          <?php if ($row8servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row8servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row8orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row9orderid)): ?>
                          <td>9</td>
                        <?php endif; ?>
                        <td><?php echo $row9customername ?></td>
                        <td><?php echo $row9servicetype ?></td>
                        <?php if ($row9deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row9deliverystatus == "not-delivered"): ?>
                          <?php if ($row9servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row9servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row9orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                      <tr>
                        <?php if (!empty($row10orderid)): ?>
                          <td>10</td>
                        <?php endif; ?>
                        <td><?php echo $row10customername ?></td>
                        <td><?php echo $row10servicetype ?></td>
                        <?php if ($row10deliverystatus == "delivered"): ?>
                          <td><span class="badge badge-success">Delivered</span></td>
                        <?php endif; ?>
                        <?php if ($row10deliverystatus == "not-delivered"): ?>
                          <?php if ($row10servicestatus == "pending"): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                          <?php endif; ?>
                          <?php if ($row10servicestatus == "complete"): ?>
                            <td><span class="badge badge-info">Completed</span></td>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!empty($row10orderid)): ?>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        <?php endif; ?>
                      </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Order No</strong></td>
                            <td><strong>Customer</strong></td>
                            <td><strong>Service Type</strong></td>
                            <td><strong>Status</strong></td>
                            <td><strong>Action</strong></td>
                        </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="container">
                  <div class="row">
                      <div class="col-md-6 align-self-center">
                          <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10</p>
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
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

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
  <script src="assets/js/ruang-admin.min.js"></script>

</body>

</html>
