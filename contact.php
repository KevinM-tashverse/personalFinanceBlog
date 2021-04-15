<?php include("path.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="Frontend/css/style.css">

  <title>Contact</title>
</head>

<body>


 <!--Header -->

 <?php include("Backend/includes/header.php"); ?>

<!-- Header -->

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h1 class="post-title">Contact</h1>

          <div class="post-content">
            <p> 
            <img src="Frontend/images/contact4.jpg" alt=""> <br><br>
              Want to connect with me? Let’s engage <br><br>
            </p>

          </div>

          <div class="footer-section contact-form">
        <h2>Contact Me</h2>
        <br>
        <form action="index.html" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address..."> <br><br>
          <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea> <br>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send
          </button>
        </form>
      </div>

        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar single">

        
        <div class="section popular">
          <h2 class="section-title">Popular</h2>

          <div class="post clearfix">
            <img src="Frontend/images/image1.jpeg" alt="">
            <a href="" class="title">
              <h4>5 Tips to Effectively Get rid of Debt</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="Frontend/images/image5.jpg" alt="">
            <a href="" class="title">
              <h4>20 Passive Income Ideas To Build Real Wealth</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="Frontend/images/image2.jpg" alt="">
            <a href="" class="title">
              <h4>What Kind of Car can I really Afford?</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="Frontend/images/image4.jpg" alt="">
            <a href="" class="title">
              <h4>10 Ways to Make Money Online</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="Frontend/images/image3.jpg" alt="">
            <a href="" class="title">
              <h4>Best Savings Accounts in Kenya</h4>
            </a>
          </div>

        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Making Money</a></li>
            <li><a href="#">Managing Money</a></li>
            <li><a href="#">Insurance</a></li>
            <li><a href="#">Retirement</a></li>
            <li><a href="#">Banking</a></li>
            <li><a href="#">Investing</a></li>
            <li><a href="#">Inspiration</a></li>
          </ul>
        </div>
      </div>
      <!-- // Sidebar -->

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <div class="footer">
    <div class="footer-content">

      <div class="footer-section about">
        <h1 class="logo-text"><span>Budget</span>Save</h1>
        <p>
          Personal Finance Blog
        </p>
        <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
          <span><i class="fas fa-envelope"></i> &nbsp; info@budgetsave.com</span>
        </div>
        <div class="socials">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <a href="#">
            <li>About</li>
          </a>
          <a href="#">
            <li>Contact Us</li>
          </a>
          <a href="#">
            <li>Privacy Policy</li>
          </a>
          <a href="#">
            <li>Gallery</li>
          </a>
          <a href="#">
            <li>Terms and Conditions</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>Contact us</h2>
        <br>
        <form action="index.html" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
          <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send
          </button>
        </form>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; budgetsave.com | Designed by Tashverse Web Designs
    </div>
  </div>
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>

</body>

</html>