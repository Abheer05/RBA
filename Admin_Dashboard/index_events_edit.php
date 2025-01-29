<?php
include "db.php";
include "fun.php";
$connect=new connect();

error_reporting(0);

$fun=new fun($connect->dbconnect());

//Add image code

if($_POST['submit1'])
{
    $srno=$_POST['srno'];
  $filename1 = $_FILES["image1"]["name"];
  $tempname1 = $_FILES["image1"]["tmp_name"];
  $folder = "image/".$filename1;
  move_uploaded_file($tempname1, $folder); 
}

if($_POST['submit2'])
{
    $srno=$_POST['srno'];
  $filename2 = $_FILES["image2"]["name"];
  $tempname2 = $_FILES["image2"]["tmp_name"];
  $folder = "image/".$filename2;
  move_uploaded_file($tempname2, $folder); 
}

if($_POST['submit3'])
{
    $srno=$_POST['srno'];
  $filename3 = $_FILES["image3"]["name"];
  $tempname3 = $_FILES["image3"]["tmp_name"];
  $folder = "image/".$filename3;
  move_uploaded_file($tempname3, $folder); 
}

if($_POST['submit4'])
{
    $srno=$_POST['srno'];
  $filename4 = $_FILES["image4"]["name"];
  $tempname4 = $_FILES["image4"]["tmp_name"];
  $folder = "image/".$filename4;
  move_uploaded_file($tempname4, $folder); 
}

if($_POST['submit5'])
{
    $srno=$_POST['srno'];
  $filename5 = $_FILES["image5"]["name"];
  $tempname5 = $_FILES["image5"]["tmp_name"];
  $folder = "image/".$filename5;
  move_uploaded_file($tempname5, $folder); 
}

if($_POST['submit6'])
{
    $srno=$_POST['srno'];
  $filename6 = $_FILES["image6"]["name"];
  $tempname6 = $_FILES["image6"]["tmp_name"];
  $folder = "image/".$filename6;
  move_uploaded_file($tempname6, $folder); 
}

    $result = $fun->update_index_event_image($folder,$srno);
    $srrr = $fun->update_index_event_image_sr();
    $srno_array = [];
    while($row = $srrr->fetch_assoc()) {
            $srno_array[] = $row['srno'];
}
    $arr = mysqli_fetch_assoc($srrr);
?>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Events - Index - Rahbar Badminton Academy</title>

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
                    <h1 class="h3 mb-1 text-gray-800">Index Page Events Section Editing</h1>
                    <p class="mb-4">Choose the images to be updated, one at a time</p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Left Side Images -->
                        <div class="col-lg-6">

                            <div class="card mb-4 py-3 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="index_events_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload top left image</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[0];?>">
                                            <input type="file" class="form-control-file" id="image1" name="image1" accept="image/*" required><hr>
                                            <button name="submit1" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-secondary">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="index_events_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload middle left image</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[2];?>">
                                            <input type="file" class="form-control-file" id="image2" name="image2" accept="image/*" required><hr>
                                            <button name="submit2" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-light">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="index_events_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload bottom left image</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[4];?>">
                                            <input type="file" class="form-control-file" id="image3" name="image3" accept="image/*" required><hr>
                                            <button name="submit3" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                        </div>

                        <!-- Right Side Images -->
                        <div class="col-lg-6">

                            <div class="card mb-4 py-3 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="index_events_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload top right image</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[1];?>">
                                            <input type="file" class="form-control-file" id="image4" name="image4" accept="image/*" required><hr>
                                            <button name="submit4" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-secondary">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="index_events_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload middle right image</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[3];;?>">
                                            <input type="file" class="form-control-file" id="image5" name="image5" accept="image/*" required><hr>
                                            <button name="submit5" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-light">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="index_events_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload bottom right image</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[5];;?>">
                                            <input type="file" class="form-control-file" id="image6" name="image6" accept="image/*" required><hr>
                                            <button name="submit6" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                        </div>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a class="btn btn-primary" href="admin_index_events_view.php">Back</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
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