<?php
include "db.php";
include "fun.php";

// Initialize database connection
$connect = new connect();
$con = $connect->dbconnect();
$fun = new fun($connect->dbconnect());

if(isset($_POST['submit']))
{
    $srno=$_POST['srno'];
    $sd1=$_POST['sd1'];
    $sd2=$_POST['sd2'];
    $sd3=$_POST['sd3'];
    $sd4=$_POST['sd4'];
    $sn1=$_POST['sn1'];
    $sn2=$_POST['sn2'];
    $sn3=$_POST['sn3'];
    $sn4=$_POST['sn4'];
    $fun-> update_stat_details($srno,$sd1,$sd2,$sd3,$sd4,$sn1,$sn2,$sn3,$sn4);
}
else{
    $result=$fun->get_stat();
    $arr = mysqli_fetch_assoc($result);
}
?>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Statistics - Index - Rahbar Badminton Academy</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Index Page Statistics Section Editing</h1>
                    </div>

                    <form action="index_stats_edit.php" method="post">

                        <div class="row">

                            <!-- Statistic Data 1 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Statistic Name 1</div>
                                                    <div class="input-group mb-3 input-group-sm">
                                                      <input type="text" class="form-control" placeholder="Example : Years Of Excellence" value="<?php echo $arr['sn1'];?>" name="sn1">
                                                    </div>
                                                <div class="h5 mb-0 font-weight-bold text-primary">Statistic Data 1</div>
                                                <div class="input-group mb-3 input-group-lg">
                                                    <input type="hidden" class="form-control" value="<?php echo $arr['srno'];?>" name="srno">
                                                    <input type="text" class="form-control" placeholder="Example : 20+" value="<?php echo $arr['sd1'];?>" name="sd1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistic Data 2 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Statistic Name 2</div>
                                                    <div class="input-group mb-3 input-group-sm">
                                                      <input type="text" class="form-control" placeholder="Example : Tournament Hosted" value="<?php echo $arr['sn2'];?>" name="sn2">
                                                    </div>
                                                <div class="h5 mb-0 font-weight-bold text-primary">Statistic Data 2</div>
                                                <div class="input-group mb-3 input-group-lg">
                                                    <input type="text" class="form-control" placeholder="Example : 100+" value="<?php echo $arr['sd2'];?>" name="sd2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistic Data 3 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Statistic Name 3
                                                </div>
                                                <div class="input-group mb-3 input-group-sm">
                                                      <input type="text" class="form-control" placeholder="Example : Trophies Won" value="<?php echo $arr['sn3'];?>" name="sn3">
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-primary">Statistic Data 3</div>
                                                        <div class="input-group mb-3 input-group-lg">
                                                        <input type="text" class="form-control" placeholder="Example : 500+" value="<?php echo $arr['sd3'];?>" name="sd3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistic Data 4 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Statistic Name 4</div>
                                                    <div class="input-group mb-3 input-group-sm">
                                                      <input type="text" class="form-control" placeholder="Example : Players Trained" value="<?php echo $arr['sn4'];?>" name="sn4">
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-primary">Statistic Data 4</div>
                                                    <div class="input-group mb-3 input-group-lg">
                                                    <input type="text" class="form-control" placeholder="Example : 1000+" value="<?php echo $arr['sd4'];?>" name="sd4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                        <input type="submit" class="btn btn-primary btn-block" value="Update" name="submit">
                        </div>

                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; 2024, <a href="https://www.google.com/search?q=rahbar+badminton+academy&rlz=1C1CHBF_enIN1064IN1064&oq=rahbar+badminton+academy&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg90gEJMTU3OTBqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8/">Rahbar Badminton Academy.</a> All rights reserved | Developed by Aevious</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>