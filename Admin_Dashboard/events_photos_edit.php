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
  move_uploaded_file($tempname1,$folder);
}

if($_POST['submit2'])
{
    $srno=$_POST['srno'];
  $filename2 = $_FILES["image2"]["name"];
  $tempname2 = $_FILES["image2"]["tmp_name"];
  $folder = "image/".$filename2;
  move_uploaded_file($tempname2,$folder);
}

if($_POST['submit3'])
{
    $srno=$_POST['srno'];
  $filename3 = $_FILES["image3"]["name"];
  $tempname3 = $_FILES["image3"]["tmp_name"];
  $folder = "image/".$filename3;
  move_uploaded_file($tempname3,$folder);
}

if($_POST['submit4'])
{
    $srno=$_POST['srno'];
  $filename4 = $_FILES["image4"]["name"];
  $tempname4 = $_FILES["image4"]["tmp_name"];
  $folder = "image/".$filename4;
  move_uploaded_file($tempname4,$folder);
}

if($_POST['submit5'])
{
    $srno=$_POST['srno'];
  $filename5 = $_FILES["image5"]["name"];
  $tempname5 = $_FILES["image5"]["tmp_name"];
  $folder = "image/".$filename5;
  move_uploaded_file($tempname5,$folder);
}

if($_POST['submit6'])
{
    $srno=$_POST['srno'];
  $filename6 = $_FILES["image6"]["name"];
  $tempname6 = $_FILES["image6"]["tmp_name"];
  $folder = "image/".$filename6;
  move_uploaded_file($tempname6,$folder);
} 

if($_POST['submit7'])
{
  $filename7 = $_FILES["image7"]["name"];
  $tempname7 = $_FILES["image7"]["tmp_name"];
  $folder = "image/".$filename7;
  move_uploaded_file($tempname7,$folder);
}

if($_POST['submit8'])
{
    $srno=$_POST['srno'];
  $filename8 = $_FILES["image8"]["name"];
  $tempname8 = $_FILES["image8"]["tmp_name"];
  $folder = "image/".$filename8;
  move_uploaded_file($tempname8,$folder);
}

if($_POST['submit9'])
{
    $srno=$_POST['srno'];
  $filename9 = $_FILES["image9"]["name"];
  $tempname9 = $_FILES["image9"]["tmp_name"];
  $folder = "image/".$filename9;
  move_uploaded_file($tempname9,$folder);
}

if($_POST['submit10'])
{
    $srno=$_POST['srno'];
  $filename10 = $_FILES["image10"]["name"];
  $tempname10 = $_FILES["image10"]["tmp_name"];
  $folder = "image/".$filename10;
  move_uploaded_file($tempname10,$folder);
}

if($_POST['submit11'])
{
    $srno=$_POST['srno'];
  $filename11 = $_FILES["image11"]["name"];
  $tempname11 = $_FILES["image11"]["tmp_name"];
  $folder = "image/".$filename11;
  move_uploaded_file($tempname11,$folder);
}

if($_POST['submit12'])
{
    $srno=$_POST['srno'];
  $filename12 = $_FILES["image12"]["name"];
  $tempname12 = $_FILES["image12"]["tmp_name"];
  $folder = "image/".$filename12;
  move_uploaded_file($tempname12,$folder);
}

if($_POST['submit13'])
{
    $srno=$_POST['srno'];
  $filename13 = $_FILES["image13"]["name"];
  $tempname13 = $_FILES["image13"]["tmp_name"];
  $folder = "image/".$filename13;
  move_uploaded_file($tempname13,$folder);
}

if($_POST['submit14'])
{
    $srno=$_POST['srno'];
  $filename14 = $_FILES["image14"]["name"];
  $tempname14 = $_FILES["image14"]["tmp_name"];
  $folder = "image/".$filename14;
  move_uploaded_file($tempname14,$folder);
}

if($_POST['submit15'])
{
    $srno=$_POST['srno'];
  $filename15 = $_FILES["image15"]["name"];
  $tempname15 = $_FILES["image15"]["tmp_name"];
  $folder = "image/".$filename15;
  move_uploaded_file($tempname15,$folder);
}

if($_POST['submit16'])
{
    $srno=$_POST['srno'];
  $filename16 = $_FILES["image16"]["name"];
  $tempname16 = $_FILES["image16"]["tmp_name"];
  $folder = "image/".$filename16;
  move_uploaded_file($tempname16,$folder);
}

if($_POST['submit17'])
{
    $srno=$_POST['srno'];
  $filename17 = $_FILES["image17"]["name"];
  $tempname17 = $_FILES["image17"]["tmp_name"];
  $folder = "image/".$filename17;
  move_uploaded_file($tempname17,$folder);
}

if($_POST['submit18'])
{
    $srno=$_POST['srno'];
  $filename18 = $_FILES["image18"]["name"];
  $tempname18 = $_FILES["image18"]["tmp_name"];
  $folder = "image/".$filename18;
  move_uploaded_file($tempname18,$folder);
}

if($_POST['submit19'])
{
    $srno=$_POST['srno'];
  $filename19 = $_FILES["image19"]["name"];
  $tempname19 = $_FILES["image19"]["tmp_name"];
  $folder = "image/".$filename19;
  move_uploaded_file($tempname19,$folder);
}

if($_POST['submit20'])
{
    $srno=$_POST['srno'];
  $filename20 = $_FILES["image20"]["name"];
  $tempname20 = $_FILES["image20"]["tmp_name"];
  $folder = "image/".$filename20;
  move_uploaded_file($tempname20,$folder);
}

if($_POST['submit21'])
{
    $srno=$_POST['srno'];
  $filename21 = $_FILES["image21"]["name"];
  $tempname21 = $_FILES["image21"]["tmp_name"];
  $folder = "image/".$filename21;
  move_uploaded_file($tempname21,$folder);
}

if($_POST['submit22'])
{
    $srno=$_POST['srno'];
  $filename22 = $_FILES["image22"]["name"];
  $tempname22 = $_FILES["image22"]["tmp_name"];
  $folder = "image/".$filename22;
  move_uploaded_file($tempname22,$folder);
}

if($_POST['submit23'])
{
    $srno=$_POST['srno'];
  $filename23 = $_FILES["image23"]["name"];
  $tempname23 = $_FILES["image23"]["tmp_name"];
  $folder = "image/".$filename23;
  move_uploaded_file($tempname23,$folder);
}

if($_POST['submit24'])
{
    $srno=$_POST['srno'];
  $filename24 = $_FILES["image24"]["name"];
  $tempname24 = $_FILES["image24"]["tmp_name"];
  $folder = "image/".$filename24;
  move_uploaded_file($tempname24,$folder);
}

if($_POST['submit25'])
{
    $srno=$_POST['srno'];
  $filename25 = $_FILES["image25"]["name"];
  $tempname25 = $_FILES["image25"]["tmp_name"];
  $folder = "image/".$filename25;
  move_uploaded_file($tempname25,$folder);
}

if($_POST['submit26'])
{
    $srno=$_POST['srno'];
  $filename26 = $_FILES["image26"]["name"];
  $tempname26 = $_FILES["image26"]["tmp_name"];
  $folder = "image/".$filename26;
  move_uploaded_file($tempname26,$folder);
}

if($_POST['submit27'])
{
    $srno=$_POST['srno'];
  $filename27 = $_FILES["image27"]["name"];
  $tempname27 = $_FILES["image27"]["tmp_name"];
  $folder = "image/".$filename27;
  move_uploaded_file($tempname27,$folder);
}

if($_POST['submit28'])
{
    $srno=$_POST['srno'];
  $filename28 = $_FILES["image28"]["name"];
  $tempname28 = $_FILES["image28"]["tmp_name"];
  $folder = "image/".$filename28;
  move_uploaded_file($tempname28,$folder);
}

if($_POST['submit29'])
{
    $srno=$_POST['srno'];
  $filename29 = $_FILES["image29"]["name"];
  $tempname29 = $_FILES["image29"]["tmp_name"];
  $folder = "image/".$filename29;
  move_uploaded_file($tempname29,$folder);
}

if($_POST['submit30'])
{
    $srno=$_POST['srno'];
  $filename30 = $_FILES["image30"]["name"];
  $tempname30 = $_FILES["image30"]["tmp_name"];
  $folder = "image/".$filename30;
  move_uploaded_file($tempname30,$folder);
}

    $result = $fun->update_event_image($folder,$srno);
    $srrr = $fun->update_event_image_sr();
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

    <title>Images - Events - Rahbar Badminton Academy</title>

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
                    <h1 class="h3 mb-1 text-gray-800">Events Page Editing</h1>
                    <p class="mb-4">Update the images, one at a time</p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Left Side Images -->
                        <div class="col-lg-6">

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 1</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[0];?>">
                                            <input type="file" class="form-control-file" id="image1" name="image1" accept="image/*" required><hr>
                                            <button name="submit1" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 2</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[1];?>">
                                            <input type="file" class="form-control-file" id="image2" name="image2" accept="image/*" required><hr>
                                            <button name="submit2" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 3</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[2];?>">
                                            <input type="file" class="form-control-file" id="image3" name="image3" accept="image/*" required><hr>
                                            <button name="submit3" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 4</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[3];?>">
                                            <input type="file" class="form-control-file" id="image4" name="image4" accept="image/*" required><hr>
                                            <button name="submit4" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 5</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[4];?>">
                                            <input type="file" class="form-control-file" id="image5" name="image5" accept="image/*" required><hr>
                                            <button name="submit5" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 6</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[5];?>">
                                            <input type="file" class="form-control-file" id="image6" name="image6" accept="image/*" required><hr>
                                            <button name="submit6" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 7</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[6];?>">
                                            <input type="file" class="form-control-file" id="image7" name="image7" accept="image/*" required><hr>
                                            <button name="submit7" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 8</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[7];?>">
                                            <input type="file" class="form-control-file" id="image8" name="image8" accept="image/*" required><hr>
                                            <button name="submit8" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 9</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[8];?>">
                                            <input type="file" class="form-control-file" id="image9" name="image9" accept="image/*" required><hr>
                                            <button name="submit9" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 10</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[9];?>">
                                            <input type="file" class="form-control-file" id="image10" name="image10" accept="image/*" required><hr>
                                            <button name="submit10" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 11</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[10];?>">
                                            <input type="file" class="form-control-file" id="image11" name="image11" accept="image/*" required><hr>
                                            <button name="submit11" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 12</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[11];?>">
                                            <input type="file" class="form-control-file" id="image12" name="image12" accept="image/*" required><hr>
                                            <button name="submit12" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 13</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[12];?>">
                                            <input type="file" class="form-control-file" id="image13" name="image13" accept="image/*" required><hr>
                                            <button name="submit13" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-secondary">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 14</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[13];?>">
                                            <input type="file" class="form-control-file" id="image14" name="image14" accept="image/*" required><hr>
                                            <button name="submit14" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-light">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 15</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[14];?>">
                                            <input type="file" class="form-control-file" id="image15" name="image15" accept="image/*" required><hr>
                                            <button name="submit15" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                        </div>

                        <!-- Right Side Images -->
                        <div class="col-lg-6">

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 16</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[15];?>">
                                            <input type="file" class="form-control-file" id="image16" name="image16" accept="image/*" required><hr>
                                            <button name="submit16" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 17</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[16];?>">
                                            <input type="file" class="form-control-file" id="image17" name="image17" accept="image/*" required><hr>
                                            <button name="submit17" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 18</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[17];?>">
                                            <input type="file" class="form-control-file" id="image18" name="image18" accept="image/*" required><hr>
                                            <button name="submit18" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 19</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[18];?>">
                                            <input type="file" class="form-control-file" id="image19" name="image19" accept="image/*" required><hr>
                                            <button name="submit19" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 20</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[19];?>">
                                            <input type="file" class="form-control-file" id="image20" name="image20" accept="image/*" required><hr>
                                            <button name="submit20" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 21</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[20];?>">
                                            <input type="file" class="form-control-file" id="image21" name="image21" accept="image/*" required><hr>
                                            <button name="submit21" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 22</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[21];?>">
                                            <input type="file" class="form-control-file" id="image22" name="image22" accept="image/*" required><hr>
                                            <button name="submit22" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 23</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[22];?>">
                                            <input type="file" class="form-control-file" id="image23" name="image23" accept="image/*" required><hr>
                                            <button name="submit23" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 24</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[23];?>">
                                            <input type="file" class="form-control-file" id="image24" name="image24" accept="image/*" required><hr>
                                            <button name="submit24" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 25</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[24];?>">
                                            <input type="file" class="form-control-file" id="image25" name="image25" accept="image/*" required><hr>
                                            <button name="submit25" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 26</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[25];?>">
                                            <input type="file" class="form-control-file" id="image26" name="image26" accept="image/*" required><hr>
                                            <button name="submit26" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 27</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[26];?>">
                                            <input type="file" class="form-control-file" id="image27" name="image27" accept="image/*" required><hr>
                                            <button name="submit27" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-dark">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 28</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[27];?>">
                                            <input type="file" class="form-control-file" id="image28" name="image28" accept="image/*" required><hr>
                                            <button name="submit28" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-secondary">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 29</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[28];?>">
                                            <input type="file" class="form-control-file" id="image29" name="image29" accept="image/*" required><hr>
                                            <button name="submit29" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                            <div class="card mb-1 border-bottom-light">
                                <div class="card-body">
                                    <!-- Image Uploading Code -->
                                    <form action="events_photos_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image">Upload image 30</label>
                                            <input type="hidden" name="srno" value="<?php echo $srno_array[29];?>">
                                            <input type="file" class="form-control-file" id="image30" name="image30" accept="image/*" required><hr>
                                            <button name="submit30" type="submit" class="btn btn-primary btn-block" value="Upload File">Update Image</button>
                                        </div>
                                    </form>
                                    <!-- End Image Uploading Code -->
                                </div>
                            </div>

                        </div>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a class="btn btn-primary" href="admin_events_view.php">Back</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Content Row -->
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>