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
    <link rel="stylesheet" href="assets/css/styles1.css">
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
                    <p class="text-primary m-0 font-weight-bold">Uncomfirmed Requests</p>
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
                      <?php include 'includes/pending-request-table.php' ?>
                      <?php require 'includes/pending-request-table.php' ?>
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Service No</th>
                                    <th>Vehicle Name</th>
                                    <th>Vehicle Reg No</th>
                                    <th>Delivery Type</th>
                                    <th>Request Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="height: 49px;"><?php echo $row1serviceno ?></td>
                                    <td value="abc"><?php echo $row1vehiclename ?></td>
                                    <td><?php echo $row1vehicleregno ?></td>
                                    <td><?php echo $row1deliverytype ?></td>
                                    <td><?php echo $row1requestdate ?></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row1vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row1vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row1vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row1vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row1vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row1requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row1deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row1dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row1orderid ?>">
                                        <button class="btn-link" type="submit" name="row1edit"><strong><?php echo $row1requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row1vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row1vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row1vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row1vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row1vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row1requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row1deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row1delete"><strong><?php echo $row1requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row2serviceno ?></td>
                                    <td><?php echo $row2vehiclename ?></td>
                                    <td><?php echo $row2vehicleregno ?></td>
                                    <td><?php echo $row2deliverytype ?></td>
                                    <td><?php echo $row2requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row2vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row2vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row2vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row2vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row2vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row2requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row2deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row2dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row2orderid ?>">
                                        <button class="btn-link" type="submit" name="row2edit"><strong><?php echo $row2requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row2vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row2vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row2vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row2vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row2vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row2requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row2deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row2delete"><strong><?php echo $row2requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row3serviceno ?></td>
                                    <td><?php echo $row3vehiclename ?></td>
                                    <td><?php echo $row3vehicleregno ?></td>
                                    <td><?php echo $row3deliverytype ?></td>
                                    <td><?php echo $row3requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row3vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row3vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row3vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row3vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row3vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row3requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row3deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row3dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row3orderid ?>">
                                        <button class="btn-link" type="submit" name="row3edit"><strong><?php echo $row3requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row3vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row3vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row3vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row3vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row3vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row3requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row3deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row3delete"><strong><?php echo $row3requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row4serviceno ?></td>
                                    <td><?php echo $row4vehiclename ?></td>
                                    <td><?php echo $row4vehicleregno ?></td>
                                    <td><?php echo $row4deliverytype ?></td>
                                    <td><?php echo $row4requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row4vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row4vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row4vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row4vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row4vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row4requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row4deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row4dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row4orderid ?>">
                                        <button class="btn-link" type="submit" name="row4edit"><strong><?php echo $row4requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row4vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row4vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row4vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row4vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row4vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row4requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row4deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row4delete"><strong><?php echo $row4requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row5serviceno ?></td>
                                    <td><?php echo $row5vehiclename ?></td>
                                    <td><?php echo $row5vehicleregno ?></td>
                                    <td><?php echo $row5deliverytype ?></td>
                                    <td><?php echo $row5requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row5vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row5vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row5vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row5vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row5vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row5requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row5deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row5dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row5orderid ?>">
                                        <button class="btn-link" type="submit" name="row5edit"><strong><?php echo $row5requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row5vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row5vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row5vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row5vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row5vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row5requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row5deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row5delete"><strong><?php echo $row5requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row6serviceno ?></td>
                                    <td><?php echo $row6vehiclename ?></td>
                                    <td><?php echo $row6vehicleregno ?></td>
                                    <td><?php echo $row6deliverytype ?></td>
                                    <td><?php echo $row6requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row6vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row6vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row6vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row6vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row6vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row6requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row6deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row6dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row6orderid ?>">
                                        <button class="btn-link" type="submit" name="row6edit"><strong><?php echo $row6requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row6vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row6vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row6vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row6vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row6vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row6requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row6deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row6delete"><strong><?php echo $row6requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row7serviceno ?><br></td>
                                    <td><?php echo $row7vehiclename ?></td>
                                    <td><?php echo $row7vehicleregno ?></td>
                                    <td><?php echo $row7deliverytype ?></td>
                                    <td><?php echo $row7requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row7vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row7vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row7vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row7vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row7vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row7requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row7deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row7dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row7orderid ?>">
                                        <button class="btn-link" type="submit" name="row7edit"><strong><?php echo $row7requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row7vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row7vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row7vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row7vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row7vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row7requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row7deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row7delete"><strong><?php echo $row7requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row8serviceno ?></td>
                                    <td><?php echo $row8vehiclename ?></td>
                                    <td><?php echo $row8vehicleregno ?></td>
                                    <td><?php echo $row8deliverytype ?></td>
                                    <td><?php echo $row8requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row8vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row8vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row8vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row8vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row8vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row8requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row8deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row8dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row8orderid ?>">
                                        <button class="btn-link" type="submit" name="row8edit"><strong><?php echo $row8requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row8vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row8vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row8vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row8vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row8vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row8requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row8deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row8delete"><strong><?php echo $row8requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row9serviceno ?></td>
                                    <td><?php echo $row9vehiclename ?></td>
                                    <td><?php echo $row9vehicleregno ?></td>
                                    <td><?php echo $row9deliverytype ?></td>
                                    <td><?php echo $row9requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row9vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row9vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row9vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row9vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row9vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row9requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row9deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row9dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row9orderid ?>">
                                        <button class="btn-link" type="submit" name="row9edit"><strong><?php echo $row9requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row9vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row9vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row9vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row9vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row9vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row9requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row9deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row9delete"><strong><?php echo $row9requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $row10serviceno ?></td>
                                    <td><?php echo $row10vehiclename ?></td>
                                    <td><?php echo $row10vehicleregno ?></td>
                                    <td><?php echo $row10deliverytype ?></td>
                                    <td><?php echo $row10requestdate ?><br></td>
                                    <td>
                                      <form action="includes/pending-request-edit.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row10vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row10vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row10vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row10vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row10vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row10requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row10deliverytype ?>>
                                        <input type="hidden" name="drop-address" value="<?php echo $row10dropaddress ?>">
                                        <input type="hidden" name="order-id" value="<?php echo $row10orderid ?>">
                                        <button class="btn-link" type="submit" name="row10edit"><strong><?php echo $row10requeststatus ?></strong></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="includes/pending-request-delete.php" method="post">
                                        <input type="hidden" name="vehicle-type" value=<?php echo $row10vehicletype ?>>
                                        <input type="hidden" name="vehicle-name" value=<?php echo $row10vehiclename ?>>
                                        <input type="hidden" name="vehicle-model" value=<?php echo $row10vehiclemodel ?>>
                                        <input type="hidden" name="vehicle-brand" value=<?php echo $row10vehiclebrand ?>>
                                        <input type="hidden" name="vehicle-regno" value=<?php echo $row10vehicleregno ?>>
                                        <input type="hidden" name="service-date" value=<?php echo $row10requestdate ?>>
                                        <input type="hidden" name="delivery-type" value=<?php echo $row10deliverytype ?>>
                                        <input type="hidden" name="request-email" value="<?php echo $mail ?>">
                                        <button class="btn-link" type="submit" name="row10delete"><strong><?php echo $row10requestaction ?></strong></button>
                                      </form>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><strong>Service No</strong></td>
                                    <td><strong>Vehicle Name</strong></td>
                                    <td><strong>Vehicle Reg No</strong></td>
                                    <td><strong>Delivery Type</strong></td>
                                    <td><strong>Request Date</strong></td>
                                    <td><strong></strong></td>
                                    <td><strong></strong></td>
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
