<?php
session_start();
if(!$_SESSION['isLogged']){
    header("location:../login.php");
    die();
    
}

    

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
                <li><a href="reviews.php">Reviews </a></li>                 
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
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="active"><a href="index.php"><span>Home</span></a></li>
                        <li><a href="categories.php"><span>Categories <i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="reviews.php"><span>Reviews <i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="gallery.php"><span>Gallery <i class="fa fa-angle-down"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="hs-text">
                        <div class="label"><span>Playstation 5</span></div>
                        <h3>Pronounced the future of Gaming</h3>
                        <div class="ht-meta">
                            <img src="img/hero/meta-pic.jpg" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2">
                    <div class="trending-post">
                        <div class="section-title">
                            <h5>Trending posts</h5>
                        </div>
                        <div class="trending-slider owl-carousel">
                            <div class="single-trending-item">
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-1.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="https://www.ea.com/games/need-for-speed/need-for-speed-heat/news/nfs-heat-black-market-delivery">
                                        NEED FOR SPEED™ HEAT – NEW CARS ARRIVE 
                                        The Aston Martin DB11 Volante (2018), McLaren F1 (1993)</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> March 3 2020</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">GTA 6 release graphics could look this good if Rockstar uses next-gen ray-tracing
                                                </a>
                                            </h6>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-3.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">FIFA 20 Title Update 17 now live on all platforms - PC, Xbox and PS4
                                        </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-4.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="https://www.somagnews.com/claim-rockstar-games-close-gta-6/">
                                        Claim: Rockstar Games to Close After GTA 6</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Jan 2, 2020</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-trending-item">
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-5.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Nvidia to release a next generation ampere GPU </a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> MARCH 14, 2020</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/batman.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/captain_cold.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/gran-turismo.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Machine Preview Section Begin -->
    <section class="latest-preview-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Machine Preview</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="lp-slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/machine-preview/omen.png">
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Hp Omen 15 GAMING LAPTOP I7-9750H 8GB 256SSD+1TB HDD NVIDIA GTX 1050 4GB</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/machine-preview/lenovo.jpg">
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Lenovo Legion Y540 with RTX 2060:
                                     Gaming laptop with good sound and 144 Hz panel</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/machine-preview/xboxx.jpg">
                            </div>
                            <div class="lp-text">
                                <h6><a href="#"> Xbox One X lays a credible claim to the title of most powerful game console ever</a>
                            </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/machine-preview/asus.jpg">
                               
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">ASUS Gaming Desktop, Intel Core i7 ,
                                     GeForce GTX 1050, 1TB HDD, 8GB DDR4</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Machine Preview Section End -->

    <!-- Videos Guide Section Begin -->
    <section class="video-guide-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>TAKE A PEAK</h5>
                    </div>
                </div>
            </div>
            <div class="tab-elem">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-5" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/nfs.jpg">
                                                <a href="https://www.youtube.com/watch?v=K-5EdHZ0hBs"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>Need for Speed Payback Official Gameplay Trailer</h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/injustice.jpg">
                                                <a href="https://www.youtube.com/watch?v=YIOTVmjCuNs"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/assasin.jpg">
                                            <a href="https://www.youtube.com/watch?v=fnD_2700qUQ"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/mortal.jpg">
                                                <a href="https://www.youtube.com/watch?v=4ANaKFnOOjk"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="vg-item set-bg" data-setbg="img/videos/watch.jpg">
                                                <a href="https://www.youtube.com/watch?v=1qqajp9H7nA"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>Open world games that will blow your mind</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Videos Guide Section End -->



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


    