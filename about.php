<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php    
session_start();
$wid=$_SESSION["aaaa"];
if(empty($_SESSION["aaaa"]))
{
	header("location:index.php");
}



?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Literary Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Natural Spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- gallery -->
    <link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" />
    <!-- fontawesome -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Markazi+Text:400,500,600,700" rel="stylesheet">
<style>
.col-sm-4 {
    border: 2px solid white; /* 2px solid white border */
    background-color: rgba(255, 255, 255, 0.5); /* White background color */
}

.ash-color {
    background-color: #d3d3d3; /* Ash color */
}
.row
{
    margin-top:50px;
}

</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- inner banner -->
        <div class="inner-banner">
            <!-- header -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-fixed-top">
                <div class="container">
                    <h1>
                        <a class="navbar-brand text-white" href="index.html">
                            Literary Hub
                        </a>
                    </h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center align-items-center">
                            <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="home.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item active mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="google-search.php">Add Here</a>
                            </li>
                            
                            <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="about.php">View Here</a>
                            </li>
                            <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search"  id="searchInput" class="btn btn-outline-danger" placeholder="search" name="search" aria-label="Search">
    
  </form>
                            <li class="nav-item  position-relative">
                                <a href="#menu" id="toggle">
                                    <span></span>
                                </a>
                                <div id="menu">
                                    <ul>

                                    <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                                    </ul>
                                   
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- /.container -->
            </nav>
            <!-- //header -->
        </div>
        <!-- //inner banner -->
        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="home.php">Home</a>
                </li>
                
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- banner bottom -->
        
        <!-- //banner bottom -->
        <!-- services -->
      
		<div class="row">
            
</div>      


                <div class="wthree-title container">
                    <h3 class="agile-title">
                      
                        <span>STORIES</span>
                        <br> 
                        <span class="title-pos"></span>
                    </h3>
                  
                  

                <div class="row" id="story">


                <?php
require("connection.php");

$res = $con->query("SELECT * FROM `tb_stories` WHERE `w_id`='$wid'");
$count = $res->num_rows;

if ($count > 0) {
    while ($row = $res->fetch_assoc()) {
        $story_id = $row["id"]; // Get the story ID
?>
        <div class="col-sm-4 story-box">
            <h4 style="color:red"><?php echo $row["Title"]; ?></h4>
            <img src="<?php echo "storypics/" . $row["Image"]; ?>" height="250px" width="250px">
            <p><?php echo $row["Storytype"]; ?></p>
            <p><?php echo substr($row["Story"], 0, 50); ?></p>
            <a href="readmore.php?read=<?php echo $story_id; ?>" class="service-btn">Read More</a>
            <a href="edithere.php?edit=<?php echo $story_id; ?>" class="service-btn">Edit Here</a>
            <a href="deletehere.php?delete=<?php echo $story_id; ?>" class="service-btn">Delete Here</a>

            <!-- Fetch and Display Comments -->
            <?php
            $comment_res = $con->query("SELECT * FROM `tb_comments` WHERE `story_id`='$story_id'");
            if ($comment_res->num_rows > 0) {
            ?>
               
                <div id="comments_<?php echo $story_id; ?>" class="comments-container">
                    <h5>Comments:</h5>
                    <ul>
                        <?php while ($comment = $comment_res->fetch_assoc()) { ?>
                            <li><?php echo $comment["comment_text"]; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
<?php
    }
}
?>

<!-- JavaScript for Toggle Comments -->


<!-- CSS to Prevent Size Expansion -->
<style>
.story-box {
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.comments-container {
    overflow: hidden;
    max-height: 200px;
    transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out;
    background: #f1f1f1;
    padding: 0px;
    border-radius: 5px;
    margin-top: 10px;
}

.comments-container ul {
    list-style: none;
    padding: 10px;
    margin: 0;
}

.toggle-btn {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
}

.toggle-btn:hover {
    background-color: #0056b3;
}
</style>

                    
                    </div>

          
                 
              
            
        <!-- //services -->
        <!-- gallery -->
        
        <!-- //gallery -->
        <!-- testimonials-->
       
        <!-- //testimonials -->
        <!--  team -->
       
        <!-- //branches -->
        <!-- footer -->
        
                        <!-- //fixed social icons -->

                    
                    <!-- //footer grid1 -->
                    <!-- footer grid3 -->
                   
                    <!-- //footer grid3 -->
                    <!-- footer grid4  -->
                   
              
            <!-- //footer container -->
        
        <!-- //footer -->
        
    </div>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <script>
$(document).ready(function() {
    $('.col-sm-4').click(function() {
        if (!$(this).is(':animated')) {
            // Toggle the animation when clicked
            $(this).animate({
                width: '+=50px',
                height: '+=50px'
            }, 500);

            // Add ash color class to the clicked div
            $(this).addClass('ash-color');

            // Remove ash color class after 1 second
            setTimeout(() => {
                $(this).removeClass('ash-color');
            }, 1000);
        }
    });
});
</script>

    <!--  menu toggle -->
    <script src="js/menu.js"></script>
    <!-- gallery  -->
    <script src="js/smoothbox.jquery2.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    

    <!-- team-->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: false,
                navigation: true,
                navigationText: true,
                pagination: true,
            });
        });
    </script>
    <!-- // team -->
    <!--  testimonials Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#searchInput').on('input', function(){
                var searchText = $(this).val().trim();
                if(searchText !== ''){
                    $.ajax({
                        url: 'search.php', // Assuming PHP script to handle database query
                        method: 'POST',
                        data: { searchText: searchText },
                        success: function(response){
                            $('#story').html(response);
                        }
                    });
                }  else if(searchText == ''){
    $.ajax({
        url: 'searchall.php',
        method: 'GET',
        success: function(response){
            $('#story').html(response);
        }
    });
                }
            });
        });
    </script>
    <!--  testimonials Responsiveslides -->
    <!-- counter -->
    <script src="js/counter.js">
    </script>
    <!-- smooth scroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <script src="js/bootstrap.js"></script>
</body>

</html>