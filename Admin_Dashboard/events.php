<?php
include "db.php";
include "fun.php";

$connect = new connect();
$con = $connect->dbconnect();
$fun = new fun($con);

// Fetch images from the database
$sql = "SELECT image_name FROM event_images";
$result = mysqli_query($con, $sql);
$images = [];

if (mysqli_num_rows($result) > 0) {
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

        .events-section .work_container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .box {
            position: relative;
            overflow: hidden;
            border: 5px solid transparent;
            border-radius: 10px;
            transition: transform 0.2s, border-color 0.2s;
            flex: 1 1 calc(30% - 15px);
            max-width: calc(30% - 15px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .box:hover {
            transform: scale(1.05);
            border-color: #fcdc88;
            box-shadow: 0 0 10px rgba(252, 220, 136, 0.7);
        }

        .box img {
            width: 100%;
            height: auto; 
            display: block;
            transition: transform 1.0s;
        }

        .box:hover img {
            transform: scale(1.3);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .box:hover .overlay {
            opacity: 1;
        }

        .heading_container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .heading_container p {
            text-align: center;
            margin-bottom: 40px;
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

  <!-- events section -->

<section class="work_section layout_padding events-section">
  <div class="container">
    <div class="heading_container">
      <h2>
        Events
      </h2>
      <p>
        Rahber Badminton Academy regularly hosts tournaments and matches, giving students a platform to showcase their skills and gain competitive experience. With its commitment to nurturing talent and providing high-quality training, the academy is a prominent choice for individuals aspiring to excel in badminton, both at a national and international level.
      </p>
    </div>
    <div class="work_container layout_padding2">
      <?php foreach ($images as $image) : ?>
        <div class="box b-1">
          <img src="<?php echo $image; ?>" alt="Event Image">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


  <!-- end events section -->

  <?php
  include "footer.php";
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
</body>
</html>