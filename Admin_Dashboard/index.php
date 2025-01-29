<?php
include "db.php";
include "fun.php";

$connect = new connect();
$con = $connect->dbconnect();
$fun = new fun($connect->dbconnect());
$images = $fun->get_index_event_image_name_only();
$result=$fun->get_stat();
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

  <style>
      .image-gallery .work_container {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          margin: 0 -15px;
      }

      .image-gallery .box {
          flex: 0 0 calc(50% - 30px);
          margin: 15px;
          overflow: hidden;
          position: relative;
          transition: transform 0.3s;
      }

      .image-gallery .box img {
          width: 100%;
          height: auto;
          display: block;
      }

      .image-gallery .box:hover {
          transform: scale(1.1);
      }
  </style>

</head>

<body>
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
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        Welcome to
                      </h2>
                      <h1>
                        Rahbar Badminton Academy
                      </h1>
                      <p>
                        Unleash Your Potential: Master the Art of Badminton with Us!
                      </p>
                      <div class="">
                        <a href="contact.php">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        Discover our
                      </h2>
                      <h1>
                        Training Techniques
                      </h1>
                      <p>
                        Where Champions Train: Ignite Your Badminton Passion Here!
                      </p>
                      <div class="">
                        <a href="training.php">
                          Go to Training
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        Explore the
                      </h2>
                      <h1>
                        Events
                      </h1>
                      <p>
                        Experience the Thrill: Check Our Exciting Badminton Events!
                      </p>
                      <div class="">
                        <a href="events.php">
                          Check Events
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- train section -->

  <section class="do_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          How we Train
        </h2>
        <p>
          "Discover our top 5 Badminton Training Techniques at Rahber Badminton Academy: Footwork Drills for agility, Multishuttle Drills for endurance, Strength and Conditioning, Technique Training for precision, and Mental Training for match focus."
        </p>
      </div>
      <div class="do_container">
        <div class="box arrow-start arrow_bg">
          <div class="img-box">
            <img src="images/agility.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Agility
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/intervals.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Intervals
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/fitness.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Fitness
            </h6>
          </div>
        </div>
        <div class="box arrow-end arrow_bg">
          <div class="img-box">
            <img src="images/skill.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Skill
            </h6>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="images/psyching.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Psyching
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end train section -->

  <!-- who section -->

  <section class="who_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/who.jpg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                WHO WE ARE?
              </h2>
            </div>
            <p>
              The Rahber Badminton Academy, based in Jaripatka, Nagpur, stands as a beacon of excellence in badminton training in Nagpur. Encompassing state-of-the-art facilities, the Rahber Badminton Academy provides an ideal environment for budding badminton enthusiasts to develop their skills. With experienced coaches, who are often former badminton players themselves, the training regime is comprehensive, focusing on technical skills, strategic game-play, and physical fitness.
            </p>
            <div>
              <a href="about.php">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end who section -->


  <!-- events section -->
  <section class="work_section layout_padding">
      <div class="container">
          <div class="heading_container">
              <h2>
                  Events
              </h2>
              <p>
                  Rahber Badminton Academy regularly hosts tournaments and matches, giving students a platform to showcase their skills and gain competitive experience. With its commitment to nurturing talent and providing high-quality training, the academy is a prominent choice for individuals aspiring to excel in badminton, both at a national and international level.
              </p>
          </div>
          <div class="work_container layout_padding2 image-gallery">
              <?php foreach ($images as $image): ?>
                  <div class="box b-<?= (array_search($image, $images) % 2 == 0) ? '1' : '2' ?>">
                      <img src="<?php echo $image; ?>" alt="Event Image">
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
  </section>
  <!-- end events section -->

  <!-- facts section -->

  <form method="post">

  <section class="target_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              <?php echo $arr['sd1'];?>
            </h2>
            <h5>
              <?php echo $arr['sn1'];?>
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              <?php echo $arr['sd2'];?>
            </h2>
            <h5>
              <?php echo $arr['sn2'];?>
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              <?php echo $arr['sd3'];?>
            </h2>
            <h5>
              <?php echo $arr['sn3'];?>
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              <?php echo $arr['sd4'];?>
            </h2>
            <h5>
              <?php echo $arr['sn4'];?>
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  </form>

  <!-- end facts section -->

  <!-- reviews section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What others say about us
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/vaishnavi.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Vaishnavi Anasane <br>
                  <span>
                    Assistant Coach
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  The Rahber Badminton Academy offers a supportive environment for individuals to improve their badminton skills, with facilities, coaching staff, and overall experience praised for its welcoming atmosphere.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/priyank.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Priyank Chandraker <br>
                  <span>
                    Player
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  The academy is noted for its exceptional coaching, friendly atmosphere, and the opportunity to learn tips and tricks from experienced professionals.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/aarti.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Aarti Lanjewar <br>
                  <span>
                    Parent
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  The facility is praised for its cleanliness, comfortable environment, and the availability of equipment for new members who may not have their own.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end reviews section -->

  <?php
  include "footer.php";
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>
</html>