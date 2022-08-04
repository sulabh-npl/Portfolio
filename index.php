<?php
include("db.php");
$sql = "SELECT * FROM about WHERE id = '1'";
$result = $con->query($sql);
$about = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $about["name"] . " | " . $about["tagline"]; ?></title> <!-- about used -->
  <link rel="icon" href="./Images/my icon.png" type="image/gif" sizes="16x16">

  <link href="./Styles/index.css" rel="stylesheet" type="text/css" />

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
    #dskn{
        display:none;
    }
    #mobn{
        display:block;
    }
    @media only screen and (max-width: 600px) {
    #dskn{
        display:block;
    }
    #mobn{
        display:none;
    }
    body, #testimonial{
        width:100%;
        overflow-x:hidden;
    }
    .text-white,.heading{
        font-size:2em;
    }
    .title, footer{
        font-size:1.5em;
    }
    }
</style>
</head>

<body style="overflow-x:hidden">
  <div class="container" id="particles-js">
    <div class="nav_section">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="#">
          <span><?php echo $about["title"]; ?></span> <!-- about used -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" style="color: #f87652 !important" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about_me">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonial">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact_info">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  
  
  <div class="hero_section" id="home">
    <div class="container">
      <div class="row">
        <div id="dskn" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <center>
            <img src="./Images/my image.png" style="border-radius:15px;" />
          </center>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3>Hello!</h3>
          <h1>I<span style="color: #f87652">'</span>m <?php echo $about["name"]; ?></h1> <!-- about used -->
          <h2><?php echo $about["tagline"]; ?></h2> <!-- about used -->
          <p>
            <?php echo $about["first_message"]; ?>
            <!-- about used -->
          </p>
          <div class="btn_container">
            <a href="#contact_info">
              <button class="btn btn-light animate__animated">Hire Me</button>
            </a>
          </div>
        </div>
        <div id="mobn" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <center>
            <img src="./Images/my image.png" style="border-radius:15px;" />
          </center>
        </div>
      </div>
    </div>
  </div>

  <!-- --------------------------------------------- -->
  <!-- my About section   -->

  <div class="about_section">
    <div class="container">
      <div class="row m-0">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" cols="50">
          <h2 class="heading">Let's grab a <span style="color: #f87652;">coffee</span> and jump on conversation <span style="color: #f87652;">chat</span> with me<span style="color: #f87652;">.</span> </h2>
          <div>
            <h5><span style="color: #f87652;">-----------------</span></h5>
          </div>
          <!-- soical site -->
          <div class="contact_info">

            <div class="links">
              <a href="<?php echo $about["fb"]; ?>" target="_blank"><i class="fa fa-facebook-square animate__animated "></i></a>
              <a href="<?php echo $about["ig"]; ?>" target="_blank"><i class="fa fa-instagram px-1 animate__animated"></i></a>
              <a href="<?php echo $about["tw"]; ?>" target="_blank"><i class="fa fa-twitter-square animate__animated "></i></a>
              <a href="<?php echo $about["git"]; ?>" target="_blank"><i class="fa fa-github-square"></i></a>
            </div>
            <h5><span style="color: #17c92f;">Whatsapp</span><span style="color: #f87652;">:-</span><br><?php echo $about["phone"]; ?></h5>
          </div>
        </div>
        <!-- about details -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  about_me_right_section" id="about_me" cols="50">
          <H2 class="heading">About Me</H2>
          <hr>
          <p id="txt">
            <?php echo $about["tagline"]; ?>
          </p>
          <p id="txt" style="color:white !important"><?php echo $about["second_message"] ?></p>

          <br>
          <button class="btn btn-light btn-sm animate__animated "> <a href="cv.php" target="_blank"> Download CV </a></button>
        </div>
      </div>
    </div>
  </div>

  <!-- --------------------------------------------- -->

  <!-- skills section -->
  <div class="skills_section" id="skills">
    <div class="container">
      <h1 class="text-white heading">My Skills &amp; Expirences<span style="color: #f87652;">.</span> </h1>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 skills_section_left_section">
          <div>
            <hr id="hr">
            <p>Companies I worked with <span style="color: #f87652;">.</span></p>
            <div class="social_media_icon">
              <ul class="list_group">
                <?php
                $sql = "SELECT * FROM expirences";
                $result = $con->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                  <li class="list_group_item" title="As <?php echo $row["position"]; ?>">
                    <a class="text-white"> <?php echo $row["name"]; ?></a>
                  </li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 skills_section_right_section">
          <div>
            <?php
            $sql = "SELECT * FROM skills";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
              <div class="each_skills">
                <span><?php echo $row["name"]; ?></span>
                <div class="progress">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $row["value"]; ?>%" aria-valuenow="<?php echo $row["value"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- --------------------------------------------- -->

  <!-- portfolio section -->

  <div class="portfolio_section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="text-white text-center my_portfolio_animation"><span>My portfolio</span><span style="color: #f87652;">.</span></h1>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <nav class="d-flex justify-content-center">
            <!-- <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active text-white " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Web Development</a>
              <a class="nav-item nav-link text-white" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Android Development</a>

            </div> -->
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="card-columns">
                <?php
                $sql = "SELECT * FROM projects ORDER BY id DESC";
                $result = $con->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                  <div class="card border-0 padding-0" style="background-color:#232532;color:white;padding: 5px;">
                    <img class="card-img-top" src="./Images/projects/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h4 class="title" style="padding: 5px;"><?php echo $row['name'] ?></h4>
                    <p style="color: whitesmoke; padding:10px">
                      <?php echo $row['details'] ?>
                      <a href="<?php echo $row['link']; ?>" target="_blank" title="<?php echo $row['details'] ?>">
                        <div class="btn_container">
                          <button class="btn btn-light animate__animated" style="background-color: #F87652;color:white;border:none;margin-left:10px">See more</button>
                        </div>
                      </a>
                    </p>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="card-columns">
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="./Images/web site image/Screenshot 2021-09-05 215450.jpg" alt="1 images">
                </div>
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="./Images/web site image/2.jpg" alt="1 images">
                </div>
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="./Images/web site image/6.jpg" alt="1 images">
                </div>
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="./Images/web site image/5.jpg" alt="1 images">
                </div>

                <div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- --------------------------------------------- -->
  <!-- blogs section -->
  <div style="background-color:#333647" id="testimonial">
    <h1 class="text-white text-center my_portfolio_animation" style="margin: 100px 0 10px 0;"><span>Testimonials</span><span style="color: #f87652;">.</span></h1>
    <style>
      .wrapper {

        background-color: #333647;
        min-height: 100vh;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Raleway'sans-serif;
        color: #fff;
      }

      .wrapper #head h1 {
        font-size: 600px;
        font-weight: 500;
        margin-top: 36px;
        margin-bottom: 25px;
        text-align: center;

      }

      .wrapper h5 {
        font-size: 15px;
        text-align: center;
        font-weight: 300;
        margin-bottom: 50px;
      }

      .card1 {
        width: 350px;
        /* height: 250px; */
        border-radius: 15px;
        /* margin: 110px 0 80px 0; */
        padding: 20px 30px;
        position: relative;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 20px 25px 30px rgba(0, 0, 0, 0.2);
        transition: 0.5s;

      }

      .card1 img {
        border: 2px solid #f87652;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: 20px;
        z-index: 2;
      }


      .card1 p {
        font-size: 16px;
        margin-top: 25px;
        margin-bottom: 10px;
      }

      .card1 h2 {
        font-weight: 500;
        margin-bottom: 5px;
        /*width:70%;*/
      }

      .card1 h4 {
        color: rgb(66, 9, 5);
        font-weight: 400;
        font-size: 16px;
        width:70%;
      }

      .card1 i {
        font-size: 60px;
        position: absolute;
        bottom: 20px;
        right: 25px;
        color: rgb(196, 121, 93);

      }

      .card1:hover {
        transform: scale(1.2) !important;
        background: #fff;
        opacity: 2;
        z-index: 3;
      }

      .card1:hover p, .card1:hover h2 {
        color: #333 !important;
      }

      .owl-stage-outer {
        overflow: visible !important;
      }

      /* responsive design */

      @media (max-width: 763px) and (min-width:400px) {
        .card1 {
          width: 100%;
          flex-direction: column;
          flex-wrap: wrap
        }

        .card1 {
          margin: 20px 0;
        }
      }

      .owl-carousel .owl-stage-outer {
        /* override */
        overflow: visible;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="wrapper" id="testimonial" style="width:100%">

      <!-- <h1 id="head">Testimonials</h1>
    <h3> d</h3> -->
      <div class="owl-carousel">
        <?php
        $sql = "SELECT * FROM testimonials";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>
          <div class="card1">
            <img src="./Images/testimonials/<?php echo $row['image']; ?>" style="height: 90px; width: 90px;z-index: 2;overflow: visible;" alt="3st reviews customer image">
            <p><?php echo $row['message']; ?></p>
            <h2><?php echo $row['name']; ?></h2>
            <h4 id="occupation"><?php echo $row['position']; ?></h4>
            <i class="fa fa-quote-left"></i>
          </div>
        <?php } ?>
      </div>
    </div>
    <script>
      $('.owl-carousel').owlCarousel({
        loop: true,
        dots: true,
        margin: 10,
        autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 2000,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 3,
          }
        }
      })
    </script>
  </div>


  <!-- --------------------------------------------- -->
  <!-- Contact Section -->
  <div class="contact_section" id="contact_info">
    <div class="container">
      <div class="row m-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div>
            <h3 class="heading" style="margin: 100px 0 10px 0;">Contact Me. </h3>
            <hr>
            <p class="txt">Feel Free to Contact With Me.</p>
            <?php
            if (isset($_POST["send"])) {
              $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
              $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
              $subject = htmlspecialchars($_POST["subject"], ENT_QUOTES);
              $message = htmlspecialchars($_POST["message"], ENT_QUOTES);
              if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
              } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
              } else {
                $ip = $_SERVER['REMOTE_ADDR'];
              }

              date_default_timezone_set('Asia/Kathmandu');
              $date = date('y-m-d');
              $time = date('h:i:s');
              $sql = "INSERT INTO messages (name, email, subject, message, ip, date, time) VALUES ('$name', '$email', '$subject', '$message', '$ip', '$date', '$time')";
              if ($con->query($sql)) {
                echo ("<h6 style='border:green 2px solid; border-radius:10px;color:white;background-color:#90ee90;padding:10px;'>Message sent Successfully</h6>");
              } else {
                echo ($con->error);
              }
            }
            ?>
            <form action="" method="POST">
              <div class="form-group ">
                <input class="form-control" name="name" placeholder="Your Name" type="text" required />
              </div>
              <div class="form-group ">
                <input class="form-control" name="email" placeholder="Your E-mail" type="email" required />
              </div>
              <div class="form-group ">
                <input class="form-control" name="subject" placeholder="Subject" type="text" required />
              </div>
              <div class="form-group ">
                <textarea class="form-control" name="message" placeholder="Type your Message...." name="" id="textarea" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-light animate__animated" name="send" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div>
            <ul class="list-unstyled" style="margin: 100px 0 10px 0;">
              <li>
                <i class="fa fa-envelope-o"></i> <?php echo $about['email']; ?>
              </li>
              <li>
                <i class="fa fa-phone"></i> <?php echo $about['phone']; ?>
              </li>
            </ul>
          </div>
          <div class="map_wrapper">
            <div class="mapouter">
              <div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7065.712148626692!2d83.4637009!3d27.6908429!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1641300155270!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <style>
                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 327px;
                    width: 525px;
                  }
                </style>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer section -->
  <div class="footer-area">
    <div class="container">
      <div class="row py-5">
        <div class="logo-area col-lg-4 col-md-4 col-sm-12 col-12">
          <a class="navbar-brand text-white" href="#">
            <?php echo $about['name']; ?><span style="color: #f87652;">.</span>
          </a>
          <p>Let's grab a coffee and jump on conversation chat with me.</p>
          <div class="links">
            <a href="<?php echo $about["fb"]; ?>" target="_blank"><i class="fa fa-facebook-square animate__animated "></i></a>
            <a href="<?php echo $about["ig"]; ?>" target="_blank"><i class="fa fa-instagram px-1 animate__animated"></i></a>
            <a href="<?php echo $about["tw"]; ?>" target="_blank"><i class="fa fa-twitter-square animate__animated "></i></a>
            <a href="<?php echo $about["git"]; ?>" target="_blank"><i class="fa fa-github-square"></i></a>
          </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 column">
          <h4 class="heading">Skills<span style="color: #f87652;">.</span></h4>
          <ul class="list-group">
            <?php
            $sql = "SELECT * FROM skills";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
              if ($row['value'] >= 80) {
            ?>
                <li class="list-group-item border-0 bg-transparent">
                  <i class="fa fa-chevron-right"></i> <span><?php echo $row['name']; ?></span>
                </li>
            <?php
              }
            }
            ?>
          </ul>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 column">
          <h4 class="heading">UseFull Link<span style="color: #f87652;">.</span></h4>
          <ul class="list-group">

            <?php
            $sql = "SELECT * FROM projects ORDER BY id DESC";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
              <li class="list-group-item border-0 bg-transparent">
                <i class="fa fa-chevron-right"></i> <a href="<?php echo $row['link']; ?>" title="<?php echo $row['details'] ?>"><span style="color:white"><?php echo $row['name'] ?></span></a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>




  <footer class="text-white text-center">&copy;Sulabh Nepal</footer>

  <!-- ____________________________________________________________________ -->
  <!-- ----------------------------------------------------------------- -->
  <script type="text/javascript" src="./Js/particles.js"></script>
  <script type="text/javascript" src="./Js/app.js"></script>
</body>

</html>