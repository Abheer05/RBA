<?php
require_once "db.php";
require_once "fun.php";

// Initialize database connection
$connect = new Connect(); // Capital C for Connect
$con = $connect->dbconnect();
$fun = new fun($connect->dbconnect());
$result = $fun->get_contact();
$arr = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>


<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-text mx-3">RBA</div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Editing and Updation
            </div>

            <!-- Nav Item - Index Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIndex"
                    aria-expanded="true" aria-controls="collapseIndex">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Index Page</span>
                </a>
                <div id="collapseIndex" class="collapse" aria-labelledby="headingIndex" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sections:</h6>
                        <a class="collapse-item" href="admin_index_events_view.php">Events</a>
                        <a class="collapse-item" href="admin_index_stats_view.php">Statistics</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - About Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout"
                    aria-expanded="true" aria-controls="collapseAbout">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>About Page</span>
                </a>
                <div id="collapseAbout" class="collapse" aria-labelledby="headingAbout" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Section:</h6>
                        <a class="collapse-item" href="admin_about_view.php">Carousal</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Events Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents"
                    aria-expanded="true" aria-controls="collapseEvents">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Events Page</span>
                </a>
                <div id="collapseEvents" class="collapse" aria-labelledby="headingEvents" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Section:</h6>
                        <a class="collapse-item" href="admin_events_view.php">Images</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Contact Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact"
                    aria-expanded="true" aria-controls="collapseContact">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Contact Page</span>
                </a>
                <div id="collapseContact" class="collapse" aria-labelledby="headingContact"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Section:</h6>
                        <a class="collapse-item" href="admin_contact_view.php">Information</a>
                    </div>
                </div>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center p-4 d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->