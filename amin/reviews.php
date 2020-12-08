<?php
session_start();
if(!$_SESSION['isLogged']){
    header("location:../login.php");
    die();
}

include('../connect.php');

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="GAMERS REPUBLIC">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameSurf</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet">
    

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="img/icon.ico">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Menu Begin -->
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            <a href="index.php"><img src="img/logo/icon2.png" alt=""></a>
        </div>
        <div class="hw-menu mobile-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="categories.php">Categories </a>
                    
                </li>
                <li><a href="reviews.php">Reviews </a>
                 
                <li><a href="gallery.php">Gallery </a>
                </li>
                <li><a href="../logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Humberger Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="ht-widget">
                            <ul>
                                <li style="padding-left: 210%;"><a style="color: red;" href="../logout.php" > LOGOUT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <a href="index.php"><img src="img/logo/logo79.png" alt=""></a>
                    </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li><a href="index.php"><span>Home<i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="categories.php"><span>Categories <i class="fa fa-angle-down"></i></span></a></li>
                        <li class="active"><a href="reviews.php"><span>Reviews </span></a></li>
                        <li><a href="gallery.php"><span>Gallery <i class="fa fa-angle-down"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->


    <!-- Reviews Section Begin -->
    <section id="reviews" class="details-hero-section set-bg" data-setbg="img/details/scarecrow.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-hero-text">
                        <div class="label"><span>Playstation</span></div>
                        <div class="label"><span>INJUSTICE</span></div>
                        <h3>SCARECROW</h3>
                        <h3>"Focus on your fear."</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="details-post-section spad">
        <div class="container">
            <div class="row">
                <div>
                    <div class="details-text">
                        <div class="dt-tags">
                            <a style="padding-left: 15%;padding-right:15%;"><span style="float:left;">PC</span></a>
                            <a style="padding-left: 13%;padding-right:13%;"> <span style="float:right;">Xbox</span></a>
                            <a style="padding-left: 13%;padding-right:13%;"> <span style="float:right;">Playstation</span></a>
                        </div>
                        
                        <div class="dt-overall-rating">
                            <div class="or-heading">
                                <div class="or-item">
                                    <div class="or-loader">
                                        <div class="loader-circle-wrap">
                                            <div class="loader-circle">
                                                <span class="circle-progress-2" data-cpid="id-5" data-cpvalue="85"
                                                    data-cpcolor="#c20000"></span>
                                                <div class="review-point">
                                                    <div>9.5</div>
                                                    <span>Need For Speed HEAT</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="or-text">
                                        <h5>Reviews</h5>
                                        <p>Still burned by 2017’s Need for Speed Payback, I wasn’t sure Need for Speed Heat was going to be the salve the series needed – but this open-world street racer has some surprising pep to it.
                                             Heat is a marked return to form, owing its success to ingredients plucked from a few of the franchise’s most fondly-remembered games. It took more attempts than would’ve been ideal, but developer Ghost has finally built a racer that feels fittingly faithful to the roots of Need for Speed.
                                             Heat is hardly revolutionary, but it is fast, fun, and streets ahead of 2017’s properly disappointing Need for Speed Payback.</p>
                                            
                                    </div>
                                </div>
                                <div class="or-skill">
                                    <div class="skill-item">
                                        <p>Graphics</p>
                                        <div id="bar-1" class="barfiller">
                                            <span class="fill" data-percentage="70"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">8.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>Gameplay</p>
                                        <div id="bar-2" class="barfiller">
                                            <span class="fill" data-percentage="95"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">9.5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <a href="https://za.ign.com/need-for-speed-heat/138946/review/need-for-speed-heat-review">
                                        <p>IGN</p>
                                        <div id="bar-3" class="barfiller">
                                            <span class="fill" data-percentage="78"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">8.0</span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="skill-item">
                                        <p>Design</p>
                                        <div id="bar-4" class="barfiller">
                                            <span class="fill" data-percentage="85"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">8.5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="or-rating">
                                <p><span>User Rating:</span> 4.5/5 ( 23 votes )</p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dt-quote">
                            <p>“ It's these long and meandering character arcs that make my adventures feel so epic in
                                scale, like if Game of Thrones was a high-fantasy anime.” - <span>Steven Jobs</span></p>
                        </div>
                        
                        <!-- <div class="dt-share">
                            <div class="ds-title">Share</div>
                            <div class="ds-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div> -->
                        
                        <div class="dt-author">
                            <div class="da-pic">
                                <img src="img/details/author.jpg" alt="">
                            </div>
                            <div class="da-text">
                                <h5>Andy Mush</h5>
                                <p>FAILURE DOESNT MEAN GAME OVER, IT MEANS TRY AGAIN WITH EXPERIENCE</p>
                            </div>
                        </div>
                        
                        
                        <div class="dt-leave-comment">
                            <h4>Game Reviews</h4>
                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Username</th>
                                <th>Platform</th>
                                <th>Game</th>
                                <th>Review</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = "SELECT * FROM reviews";
                                $select_query = mysqli_query($conn,$select);
                                while($row=mysqli_fetch_array($select_query)){ 
                                ?>
                                <tr>
                                                
                                <td><p><?php echo $row['username']?></p></td>
                                <td><p><?php echo $row['platform']?></p></td>
                                <td><p><?php echo $row['game']?></p></td>
                                <td><p><?php echo $row['review']?></p>
                                <!-- <a style="color: red;" href="#" class="reply-btn"><span style="float: right;">Reply</span></a></td>-->
                                

                                
                            </tr>
                            <?php
                            }
                            ?>

                            </tbody>
                            </table>
                        </div>
                        <br>
                        <section id="review">
                        <div class="dt-leave-comment">
                            <h4>HAVE ANY REVIEW IN MIND ... <i class="far fa-hand-point-down"></i></h4>
                            <form method="POST" action="review_comment.php">
                                <div class="input-list">
                                    <input type="text" name="username" placeholder="Username" value="<?php echo $_SESSION['username'];?>">
                                    <input type="text" name="platform" placeholder="Platform" required>
                                    <input type="text" name="game" placeholder="Game" required>
                                    <input type="text" name="review" placeholder="Game Review" required>
                                </div>
                                <br>
                                <button name="submit" type="submit">Submit</button>
                            </form>
                        </div>
                        </section>
                        
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
    <!-- Reviews Section End -->


    <!-- Sign Up Section Begin -->
    <div class="signup-section">
        <div class="signup-close"><i class="fa fa-close"></i></div>
        <div class="signup-text">
            <div class="container">
                <div class="signup-title">
                    <h2>Sign up</h2>
                    <p>Fill out the form below to recieve a free and confidential</p>
                </div>
                <form action="#" class="signup-form">
                    <div class="sf-input-list">
                        <input type="text" class="input-value" placeholder="User Name*">
                        <input type="text" class="input-value" placeholder="Password">
                        <input type="text" class="input-value" placeholder="Confirm Password">
                        <input type="text" class="input-value" placeholder="Email Address">
                        <input type="text" class="input-value" placeholder="Full Name">
                    </div>
                    <div class="radio-check">
                        <label for="rc-agree">I agree with the term & conditions
                            <input type="checkbox" id="rc-agree">
                            <span class="checkbox"></span>
                        </label>
                    </div>
                    <button type="submit"><span>REGISTER NOW</span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>