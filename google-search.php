
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
                <li class="breadcrumb-item active" aria-current="page">
                 
                   
                      
                <a href="about.php">View Stories</a></li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- banner bottom -->
        
        <!-- //banner bottom -->
        <!-- services -->
		
					
        
                <div class="wthree-title pb-sm-5 pb-3">
                    <h3 class="agile-title">
                      
                        <span>Add Your Stories</span> 
                        <br> 
                        <span class="title-pos"></span>
                    </h3>
                </div>
                <div>
                    <center>
	
	

                    <form action="storyinsertaction.php" method="post" enctype="multipart/form-data">

<div  class="form-group col-md-4">
   <label>Enter Here Your Title</label>	
     <input type="text"class="form-control" required style="border-style: outset 0px" name="title" >
 </div><br>
 
 <div class="form-group">
<label>Select Your Story Type :</label>&nbsp&nbsp&nbsp
                                 
                                 
<input type="radio"  value="Moralstory" name="storytype" checked> Moral Story &nbsp&nbsp
<input type="radio" value="Shortstory" name="storytype"> Fairytale Story  &nbsp&nbsp
                 
<input type="radio"value="Horrorstory" name="storytype"> Horror Story &nbsp&nbsp
<input type="radio"value="Others" name="storytype"> Others &nbsp&nbsp
                                     </div>
                                         
<div class="form-group">
        Upload your Story Picture....&nbsp&nbsp<input type="file" required name="image">
</div>
<p>Click on the button and tell your story...</p>
    <p>
        <button type="button" onclick="runSpeechRecognition()">Start Listening</button>
        <button type="button" onclick="pauseSpeechRecognition()">Pause</button>
        <button type="button" onclick="stopSpeechRecognition()">Stop</button>
        &nbsp; <span id="action"></span>
    </p>

    <div id="output">
        <textarea id="textArea" rows="5" cols="50"name="tx" placeholder="Recognized speech will appear here..."></textarea>
    </div>

<input type="submit" value="submit" class="btn btn-success">
</form>



</center>
		
                </div>
            






    <script>
       var recognition;
var isPaused = false;
var transcript = '';

function runSpeechRecognition() {
    var output = document.getElementById("textArea");
    var action = document.getElementById("action");

    if (!('webkitSpeechRecognition' in window || 'SpeechRecognition' in window)) {
        alert("Your browser does not support speech recognition. Please use Google Chrome.");
        return;
    }

    if (!recognition) {
        var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        recognition = new SpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;
        recognition.lang = "en-US";

        recognition.onstart = function () {
            action.innerHTML = "<small>Listening... Please speak.</small>";
        };

        recognition.onresult = function (event) {
            let interimTranscript = "";
            for (var i = event.resultIndex; i < event.results.length; i++) {
                if (event.results[i].isFinal) {
                    transcript += event.results[i][0].transcript + " ";
                } else {
                    interimTranscript += event.results[i][0].transcript;
                }
            }
            output.value = transcript + interimTranscript;
        };

        recognition.onerror = function (event) {
            console.error("Speech recognition error:", event.error);
            action.innerHTML = "<small>Error occurred: " + event.error + "</small>";
        };

        recognition.onend = function () {
            if (!isPaused) {
                action.innerHTML = "<small>Speech recognition stopped.</small>";
            }
        };
    }

    isPaused = false;
    recognition.start();
}

function pauseSpeechRecognition() {
    if (recognition) {
        recognition.stop();
        isPaused = true;
        document.getElementById("action").innerHTML = "<small>Paused. Click 'Start' to continue.</small>";
    }
}

function stopSpeechRecognition() {
    if (recognition) {
        recognition.stop();
        isPaused = true;
        document.getElementById("action").innerHTML = "<small>Paused. Click 'Start' to continue.</small>";
    }
}

    </script>



        
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
    <!--// end-smoth-scrolling -->
    <script src="js/bootstrap.js"></script>
	
	
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>



































































