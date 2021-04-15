<?php include("path.php");
      include(ROOT_PATH . "/Backend/database/db.php");
?>


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

  <title>BudgetSave : Secure Your Future</title>
</head>

<body>
  <!--Header -->

  <?php include("Backend/includes/header.php"); ?>

  <!-- Header --> 
  
  <!-- Logged In Message -->
  <?php include("Backend/includes/messages.php"); ?> 

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="Frontend/images/image1.jpeg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">5 Tips to Effectively Get rid of Debt</a></h4>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 17, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="Frontend/images/art.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">Fun Hobbies That Can Make You Money in Your Free Time</a></h4>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 25, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="Frontend/images/Expenses.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">How to Track Expenses in 3 Easy Steps</a></h4>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 02, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="Frontend/images/apps.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">15 Best Budgeting Apps to Download Now</a></h4>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 17, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="Frontend/images/retirement.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">The Ultimate Guide to Retirement : Everything you need to know</a></h4>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 17, 2020</i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="Frontend/images/image5.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">20 Passive Income Ideas To Build Real Wealth</a></h2>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 01, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="Frontend/images/image2.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">What Kind of Car can I really Afford?</a></h2>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 01, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="Frontend/images/image4.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">10 Ways to Make Money Online </a></h2>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 01, 2021 </i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="Frontend/images/image3.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">Best Savings Accounts in Kenya</a></h2>
            <i class="far fa-user"> Kevin Mwangi</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 01, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
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

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->

  <?php include("Backend/includes/footer.php"); ?>

  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="Frontend/js/scripts.js"></script>

</body>

</html>