<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php    
session_start();
$id=$_SESSION["aa"];
if(empty($_SESSION["aa"]))
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

/* Story Card Styling */
.story-card {
    background: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    max-height:800px;
}
.story-card:hover {
    transform: translateY(-5px);
}

/* Story Title */
.story-title {
    color: #e74c3c;
    font-weight: bold;
    text-align: center;
}

/* Image Styling */
.story-img {
    width: 100%;
    height: 400px;
    border-radius: 10px;
    object-fit: cover;
}

/* Author Name */
.author-name {
    font-weight: bold;
    color: #333;
}
.author-name span {
    color: #3498db;
}

/* Read More Button */
.read-more {
    display: block;
    background: #2ecc71;
    color: white;
    text-align: center;
    padding: 8px 12px;
    border-radius: 5px;
    margin-top: 10px;
    text-decoration: none;
    transition: background 0.3s;
}
.read-more:hover {
    background: #27ae60;
}

/* Icon Styling */
.icon-container {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}
.comment-icon {
    color: #555;
    font-size: 20px;
    cursor: pointer;
    transition: color 0.3s ease;
}
.comment-icon:hover {
    color: #f39c12;
}

/* Colorful Share Icon */
.share-icon {
    font-size: 20px;
    cursor: pointer;
    background: linear-gradient(45deg, #f39c12, #e74c3c, #9b59b6, #3498db);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: transform 0.3s ease;
}
.share-icon:hover {
    transform: scale(1.2);
}

/* Comment Box */
.comment-box {
    display: none;
    background: #f9f9f9;
    padding: 10px;
    border-radius: 5px;
    margin-top: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}
.comment-box textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 10px;
    resize: none;
}
.submit-comment {
    background: #2ecc71;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}
.submit-comment:hover {
    background: #27ae60;
}

/* Toggle Comment Button */
.toggle-comment {
    display: block;
    margin-top: 10px;
    background: #e74c3c;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}
.toggle-comment:hover {
    background: #c0392b;
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
                            LH
                        </a>
                    </h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center align-items-center">
                            <li class="nav-item active mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="readers.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="moralstory.php">Moral Stories</a>
                            </li>
                            
                            <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="shortstory.php">Short Stories</a>
                            </li>
                            <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="horrorstory.php">Horror Stories</a>
                            </li>
                            <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="others.php">Other Stories</a>
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
                            <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                                <a class="nav-link" href="yourprofile.php">Your Profile</a>
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
		
					
        
                <div class="wthree-title container">
                    <h3 class="agile-title">
                      
                        <span>STORIES</span>
                        <br> 
                        <span class="title-pos"></span>
                    </h3>
                


                    <div class="row" id="story">
    <?php
    require("connection.php");
    $res = $con->query("SELECT a.Title, a.Story, a.Image, a.id, c.jname 
                        FROM tb_stories a 
                        JOIN tb_jlogin c ON a.w_id = c.id");
    $count = $res->num_rows;

    if ($count > 0) {
        while ($row = $res->fetch_assoc()) {
            $story_id = $row["id"];
            ?>
           <div class="col-sm-4 story-card">
    <h4 class="story-title"><?php echo htmlspecialchars($row["Title"]); ?></h4>
    <img src="<?php echo "storypics/" . htmlspecialchars($row["Image"]); ?>" class="story-img">

    <p class="author-name">Author: <span><?php echo htmlspecialchars($row["jname"]); ?></span></p>
    <p class="story-preview"><?php echo substr(htmlspecialchars($row["Story"]), 0, 50); ?>...</p>

    <a href="more.php?read=<?php echo $story_id; ?>" class="service-btn read-more">Read More</a>

    <!-- Comment & Share Icons -->
    <div class="icon-container">
        <!-- Comment Icon -->
        <i class="fa fa-comment comment-icon" data-story="<?php echo $story_id; ?>"></i>

        <!-- WhatsApp Share Icon (Colorful) -->
        <i class="fa fa-share-alt share-icon" onclick="shareStory(<?php echo $story_id; ?>)"></i>
    </div>

    <!-- Comment Section -->
    <div class="comment-box" id="comment-box-<?php echo $story_id; ?>">
        <textarea id="comment-<?php echo $story_id; ?>" placeholder="Write your comment..."></textarea>
        <button class="submit-comment" data-story="<?php echo $story_id; ?>">Submit</button>
        <div class="comments-list" id="comments-list-<?php echo $story_id; ?>">
            <!-- Comments will load here -->
        </div>
        <button class="toggle-comment" onclick="toggleCommentBox(<?php echo $story_id; ?>)">Hide</button>
    </div>
</div>
            <?php
        }
    }
    ?>
</div>
<script>
    function toggleCommentBox(storyId) {
    var commentBox = document.getElementById("comment-box-" + storyId);
    var toggleButton = commentBox.querySelector(".toggle-comment");

    if (commentBox.style.display === "none") {
        commentBox.style.display = "block";
        toggleButton.innerText = "Hide"; // Change text to "Hide"
    } else {
        commentBox.style.display = "none";
        toggleButton.innerText = "Show"; // Change text to "Show"
    }
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Show comment box
    $(".comment-icon").click(function() {
        var storyId = $(this).data("story");
        $("#comment-box-" + storyId).toggle();
        loadComments(storyId);
    });

    // Submit comment
    $(".submit-comment").click(function() {
        var storyId = $(this).data("story");
        var comment = $("#comment-" + storyId).val().trim();
        
        if (comment !== "") {
            $.post("submit_comment.php", { story_id: storyId, comment: comment }, function(response) {
                if (response === "success") {
                    $("#comment-" + storyId).val("");
                    loadComments(storyId);
                } else {
                    alert("Failed to submit comment");
                }
            });
        } else {
            alert("Comment cannot be empty!");
        }
    });

    // Load comments
    function loadComments(storyId) {
        $.post("fetch_comments.php", { story_id: storyId }, function(data) {
            $("#comments-list-" + storyId).html(data);
        });
    }
});
</script>
<!-- Share Icon (Update this inside your while loop) -->


<script>
function shareStory(storyId) {
    // Find the story container
    let storyDiv = document.getElementById("story");

    // Get the title, author, and story snippet
    let title = storyDiv.querySelector("h4").innerText;
    let author = storyDiv.querySelector("p:nth-of-type(1)").innerText; // First <p> tag (Author Name)
    let storyText = storyDiv.querySelector("p:nth-of-type(2)").innerText; // Second <p> tag (Story)
    
    // Full Read More link
    let readMoreUrl = "For Content Check Out Page Literary Hub=";

    // Formatted message
    let message = `📖 *${title}*\n\n👤 ${author}\n\n${storyText}\n\n🔗 Read more: ${readMoreUrl}`;

    // Encode message for WhatsApp URL
    let whatsappUrl = "https://wa.me/?text=" + encodeURIComponent(message);

    // Open WhatsApp share link
    window.open(whatsappUrl, "_blank");
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