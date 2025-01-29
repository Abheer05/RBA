<?php
include "db.php";
include "fun.php";

// Initialize database connection
$connect = new connect();
$con = $connect->dbconnect();
$fun = new fun($connect->dbconnect());
$result=$fun->get_contact();
$arr = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Rahbar Badminton Academy</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <span>
              Rahbar Badminton Academy
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="training.php"> Training </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="events.php"> Events </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"> Contact us </a>
                </li>
              </ul>
              </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>

      <form method="post">

      <div class="container-fluid p-3 my-5  text-white">
          <div class="row p-1">
              <div class="col-6 d-flex justify-content-center text-dark">
                  <div class="item">
                      <div class="box">
                          <div class="img-box">
                              <img src="images/phone.png" alt="phone">
                          </div>
                          <div class="detail-box d-flex flex-column align-items-center justify-content-center text-center">
                              <h5>PHONE NUMBER</h5>
                              <p><?php echo $arr['phone'];?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-6 d-flex justify-content-center text-dark">
                <div class="item">
                    <div class="box">
                        <div class="img-box d-flex justify-content-center align-items-center">
                            <img src="images/location.png" alt="">
                        </div>
                        <div class="detail-box d-flex flex-column align-items-center justify-content-center text-center">
                            <h5>OUR LOCATION</h5>
                            <p><?php echo $arr['location'];?></p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row p-1">
              <div class="col-6 d-flex justify-content-center text-dark">
                  <div class="item">
                      <div class="box">
                          <div class="img-box">
                              <img src="images/mail.png" alt="mail">
                          </div>
                          <div class="detail-box d-flex flex-column align-items-center justify-content-center text-center">
                              <h5>E-MAIL</h5>
                              <p><?php echo $arr['email'];?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-6 d-flex justify-content-center text-dark">
                  <div class="item">
                      <div class="box">
                          <div class="img-box">
                              <img src="images/media.png" alt="social media">
                          </div>
                          <div class="detail-box d-flex flex-column align-items-center justify-content-center text-center">
                              <h5>SOCIAL MEDIA</h5>
                              <p><?php echo $arr['social'];?></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      </form>

      </div>
    </div>
  </section>

  <!-- end contact section -->

  <?php
  include "footer.php";
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
</body>
</html>