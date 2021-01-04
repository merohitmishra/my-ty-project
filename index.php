<?php 
include("path.php");
include(ROOT_PATH ."/app/controllers/topics.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font awesome-->
    <link rel="stylesheet" href="assets/css/all.css">
    <!--custom style-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>influencingTech</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


    <!--page wrapper-->
    <div class="page-wrapper">
        <!--Post Slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending Techs</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>
            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/post1.jpg" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Feel the power of ray tracing</a></h4>
                        <i class="far fa-user">Profile</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/post2.jpg" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Feel the power of ray tracing</a></h4>
                        <i class="far fa-user">Profile</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/post3.jpg" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Feel the power of ray tracing</a></h4>
                        <i class="far fa-user">Profile</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/post4.jpg" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Feel the power of ray tracing</a></h4>
                        <i class="far fa-user">Profile</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2020</i>
                    </div>
                </div>
            </div>
        </div>
        
        <!--//Post Slider//-->
        <!--content-->
        <div class="content clearfix">
            <!--main content-->
            <div class="main-content">
                <h1 class="recent-post-title">Recents Posts</h1>
                <div class="post clearfix">
                    <img src="assets/images/blog1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">AMD: Gaming Revolution. Make a comeback with AMD Radeon.</a></h2>
                        <i class="fas fa-user">Profile</i>
                        &nbsp;
                        <i class="fas fa-calendar">Mar 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequuntur in at esse quidem illum vitae accusamus aliquam, praesentium quia sequi.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/blog2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">AMD: Gaming Revolution. Make a comeback with AMD Radeon.</a></h2>
                        <i class="fas fa-user">Profile</i>
                        &nbsp;
                        <i class="fas fa-calendar">Mar 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequuntur in at esse quidem illum vitae accusamus aliquam, praesentium quia sequi.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/blog3.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">AMD: Gaming Revolution. Make a comeback with AMD Radeon.</a></h2>
                        <i class="fas fa-user">Profile</i>
                        &nbsp;
                        <i class="fas fa-calendar">Mar 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequuntur in at esse quidem illum vitae accusamus aliquam, praesentium quia sequi.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/blog4.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">AMD: Gaming Revolution. Make a comeback with AMD Radeon.</a></h2>
                        <i class="fas fa-user">Profile</i>
                        &nbsp;
                        <i class="fas fa-calendar">Mar 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequuntur in at esse quidem illum vitae accusamus aliquam, praesentium quia sequi.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!--//main content-->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Categories</h2>
                    <ul>

                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="#"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>

                        

                        <!-- <li><a href="#">Compare</a></li>
                        <li><a href="#">PC Builtup</a></li>
                        <li><a href="#">AMD</a></li>
                        <li><a href="#">intel</a></li>
                        <li><a href="#">Nvidea</a></li> -->
                    </ul>
                </div>

            </div>

        </div>
        <!--//content-->

    </div>
    <!--//page wrapper//-->

    <!--Footer-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

    <!--//Footer-->


    <!--jquery-->
    <script src="assets/js/jquery.js"></script>

    <!--custom scripts-->
    <script src="assets/js/scripts.js"></script>

    <!--Carausel slick-->
    <script src="assets/js/slick.min.js"></script>
  
</body>

</html>