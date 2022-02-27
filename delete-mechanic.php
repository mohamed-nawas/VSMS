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
        <a class="nav-link" href="index.html">
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
            <h1 class="h3 mb-0 text-gray-800">Delete Staff</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Staff</li>
              <li class="breadcrumb-item active" aria-current="page">Mechanic</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <?php include 'includes/misc.inc.php' ?>
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Delete Mechanics</h6>
                </div>
                <div class="card-body">
                  <!-- <form action="includes/add-mechanic-submit.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="add-mechanic-name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text" name="add-mechanic-address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile No</label>
                      <input type="text" name="add-mechanic-mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter mobile no">
                    </div>
                    <button type="submit" class="btn btn-primary" name="add-mechanic-submit">Submit</button>
                  </form> -->
                  <div class="table-responsive table mt-2" id="dataTable" aria-describedby="dataTable_info">
                    <?php include 'includes/delete-mechanic-table.php' ?>
                    <?php require 'includes/delete-mechanic-table.php' ?>
                    <table class="table align-items-center table-flush" id="dataTable">
                      <thead class="thead-light">
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Mobile</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $row1id ?></td>
                          <td><?php echo $row1name ?></td>
                          <td><?php echo $row1address ?></td>
                          <td><?php echo $row1mobile ?></td>
                          <td><?php if (!$row1id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row1id ?>>
                              <button type="submit" name="row1-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row2id ?></td>
                          <td><?php echo $row2name ?></td>
                          <td><?php echo $row2address ?></td>
                          <td><?php echo $row2mobile ?></td>
                          <td><?php if (!$row2id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row2id ?>>
                              <button type="submit" name="row2-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row3id ?></td>
                          <td><?php echo $row3name ?></td>
                          <td><?php echo $row3address ?></td>
                          <td><?php echo $row3mobile ?></td>
                          <td><?php if (!$row3id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row3id ?>>
                              <button type="submit" name="row3-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row4id ?></td>
                          <td><?php echo $row4name ?></td>
                          <td><?php echo $row4address ?></td>
                          <td><?php echo $row4mobile ?></td>
                          <td><?php if (!$row4id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row4id ?>>
                              <button type="submit" name="row4-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row5id ?></td>
                          <td><?php echo $row5name ?></td>
                          <td><?php echo $row5address ?></td>
                          <td><?php echo $row5mobile ?></td>
                          <td><?php if (!$row5id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row5id ?>>
                              <button type="submit" name="row5-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row6id ?></td>
                          <td><?php echo $row6name ?></td>
                          <td><?php echo $row6address ?></td>
                          <td><?php echo $row6mobile ?></td5
                          <td><?php if (!$row6id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row6id ?>>
                              <button type="submit" name="row6-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row7id ?></td>
                          <td><?php echo $row7name ?></td>
                          <td><?php echo $row7address ?></td>
                          <td><?php echo $row7mobile ?></td>
                          <td><?php if (!$row7id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row7id ?>>
                              <button type="submit" name="row7-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row8id ?></td>
                          <td><?php echo $row8name ?></td>
                          <td><?php echo $row8address ?></td>
                          <td><?php echo $row8mobile ?></td>
                          <td><?php if (!$row8id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row8id ?>>
                              <button type="submit" name="row8-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row9id ?></td>
                          <td><?php echo $row9name ?></td>
                          <td><?php echo $row9address ?></td>
                          <td><?php echo $row9mobile ?></td>
                          <td><?php if (!$row9id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row9id ?>>
                              <button type="submit" name="row9-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo $row10id ?></td>
                          <td><?php echo $row10name ?></td>
                          <td><?php echo $row10address ?></td>
                          <td><?php echo $row10mobile ?></td>
                          <td><?php if (!$row10id == ""): ?>
                            <form action="includes/delete-mechanic-submit.php" method="post">
                              <input type="hidden" name="mechanic-id" value=<?php echo $row10id ?>>
                              <button type="submit" name="row10-delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          <?php endif; ?></td>
                        </tr>
                      </tbody>
                      <tfoot>
                          <tr>
                              <td><strong>ID</strong></td>
                              <td><strong>Name</strong></td>
                              <td><strong>Address</strong></td>
                              <td><strong>Mobile</strong></td>
                              <td><strong>Action</strong></td>
                          </tr>
                      </tfoot>
                    </table>
                  </div>
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
              <b><a href="#" target="_blank">CleanCodeOnline</a></b>
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
