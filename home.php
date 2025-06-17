
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
 
			button {
			    padding:10px;
			    background-color:#6a67ce;
			    color: #FFFFFF;
			    border: 0px;
			    cursor:pointer;
			    border-radius: 5px;
			}
			
			#output {
			    background-color:#F9F9F9;
			    padding:10px;
			    width: 100%;
			    margin-top:20px;
			    line-height:30px;
			}
			.hide {
			    display:none;
			}
			.show {
			    display:block;
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
                           
                            
                            <li class="nav-item  position-relative">
                                <a href="#menu" id="toggle">
                                    <span></span>
                                </a>
                                <div id="menu">
                                    <ul>

                                    <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>

                           
                            <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="profile.php">Your Profile</a>
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
		
					
        
               
                <div>
               
                <h3  class="agile-title"><span>Literary Hub serves as a digital hub for all things literary, fostering a community of readers and writers and providing a platform for the exploration and celebration of literature in its various forms.</span></h3>
		<center><h4> click here to add your story</h4>
    <a href="google-search.php" class="btn"> Add Your Story</a>
    </center>
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
    
</body>

</html>



































































