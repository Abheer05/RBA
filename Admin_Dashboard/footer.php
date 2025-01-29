<?php
require_once "db.php";
require_once "fun.php";

$connect = new Connect();
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

  <!-- info section -->
  <form method="post">

  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              About Academy
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p><?php echo $arr['location'];?></p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p><?php echo $arr['phone'];?></p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p><?php echo $arr['email'];?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              Rahbar Badminton Academy provides a comprehensive curriculum for all skill levels and age groups, focusing on developing badminton techniques, sportsmanship, and discipline through personalized coaching and competitive play.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_form ">
            <h5>
              Follow Us
            </h5>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </form>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 All Rights Reserved By
      <a href="https://www.google.com/search?q=rahbar+badminton+academy&rlz=1C1CHBF_enIN1064IN1064&oq=rahbar+badminton+academy&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg90gEJMTU3OTBqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8/">Rahbar Badminton Academy</a> | Developed by Aevious
    </p>
  </section>
  <!-- footer section -->
</body>
</html>