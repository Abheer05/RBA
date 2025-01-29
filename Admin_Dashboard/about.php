<?php
include "db.php";
include "fun.php";

$connect = new connect();
$con = $connect->dbconnect();
$fun = new fun($con);

$sql = "SELECT image_name FROM about_images";
$result = mysqli_query($con, $sql);

$images = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $images[] = $row['image_name'];
    }
}
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .owl-carousel .item img {
      width: 100%;
      height: 600px;
      max-width: 100%;
      max-height: 100%;
    }
  </style>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <span>Rahbar Badminton Academy</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

  <!-- about section -->
  <section class="who_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($images as $image): ?>
                        <div class="item">
                            <img src="<?php echo $image; ?>" alt="about us">
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Slider End -->


        </div>
        <div class="col-md-7 p-5">
          <div class="detail-box">
            <div class="heading_container align-items-center">
              <h2>ABOUT US</h2>
            </div>
            <p>
              The Rahber Badminton Academy, based in Jaripatka, Nagpur, stands as a beacon of excellence in badminton
              training in Nagpur. Encompassing state-of-the-art facilities, the Rahber Badminton Academy provides an
              ideal environment for budding badminton enthusiasts to develop their skills. With experienced coaches,
              who are often former badminton players themselves, the training regime is comprehensive, focusing on
              technical skills, strategic game-play, and physical fitness.
            </p>
            <p>
              The Rahber Badminton Academy's curriculum is designed to cater to various age groups and skill levels,
              from beginners to advanced players. It emphasizes not only on developing badminton techniques but also on
              instilling a sense of sportsmanship and discipline among its students. The training program includes
              personalized coaching, group sessions, and competitive play, ensuring a well-rounded development.
            </p>
            <p>
              Furthermore, the Rahber Badminton Academy regularly hosts tournaments and matches, giving students a
              platform to showcase their skills and gain competitive experience. With its commitment to nurturing
              talent and providing high-quality training, the academy is a prominent choice for individuals aspiring
              to excel in badminton, both at a national and international level.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <?php
  include "footer.php";
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
      });
    });
  </script>
</body>
</html>