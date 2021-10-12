<!DOCTYPE html>
<html lang="en">
<?php include "../connection.php"; ?>
<?php session_start();
$per_num = $_SESSION['per_num']; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <div class="sidebar-brand-icon" style="background: white;padding-bottom: 0px;margin-bottom: 0px;" >
                <img src="img/logo1.png" style="width: 100%;height:100%;">
            </div>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <?php
            $res=mysqli_query($conn,"select Name , Rank from officer where Per_Number='$per_num'");
            $rows =mysqli_fetch_all($res,MYSQLI_ASSOC);
            foreach($rows as $row );
            ?>
            <a class="nav-link d-inline-flex" href="">
                <div class="col-1">
                <i class="fas fa-user-shield" style="padding-top: 10px;font-size: 20px;"></i>
                </div>
                <div class="col-12 text-center" style="padding-top: 0px;">
                <span style="font-family: Courier;font-size: 100%"><?php echo $row['Name']; ?></span>
                </div></a>
            <a class="nav-link d-inline-flex" href="">
                <div class="col-12 text-center">
                    <span style="font-family: Courier;font-size: 100%">Rank :  <?php echo $row['Rank'];  ?></span>
                </div></a>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">

        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-user-tie"></i>
                <span>Officer Profile</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Officer Details</h6>
                    <a class="collapse-item" href="profile.php">Profile</a>
                    <a class="collapse-item" href="">Edit Profile</a>
                    <a class="collapse-item" href="">Notification</a>
                    <a class="collapse-item" href="">Email</a>
                    <a class="collapse-item" href="">contact</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
               aria-controls="collapseForm">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Candidate</span>
            </a>
            <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Candidate Details</h6>
                    <a class="collapse-item" href="candidate_list.php">Candidate List</a>
                    <a class="collapse-item" href="viewdocs.php">Document Verification</a>
                    <a class="collapse-item" href="medical.php">Medical Report</a>
                    <a class="collapse-item" href="day1.php">Day 1 Report</a>
                    <a class="collapse-item" href="day2.php">Day 2 Report</a>
                    <a class="collapse-item" href="day3.php">Day 3 Report</a>
                    <a class="collapse-item" href="day4.php">Day 4 Report</a>
                    <a class="collapse-item" href="day5.php">Day 5 Report</a>
                    <a class="collapse-item" href="final%20report.php">Final Report</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="fas fa-sign-out-alt fas"></i>
                <span>Logout</span>
            </a>
        </li>
        <hr class="sidebar-divider">


        <hr class="sidebar-divider">

    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background: #2C3E50 ;">
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
                    <li class="nav-item dropdown no-arrow">

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

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
                        <span style="font-size: 20px;">User Name : <?php echo $row['Name']; ?></span>
                    </ol>
                </div>
            </div>