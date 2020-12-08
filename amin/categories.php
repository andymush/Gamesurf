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
                        <li><a href="index.php"><span>Home</span> <i class="fa fa-angle-down"></i></span></a></li>
                        <li class="active"><a href="categories.php"><span>Categories</i></span></a></li>
                        <li><a href="reviews.php"><span>Reviews <i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="gallery.php"><span>Gallery <i class="fa fa-angle-down"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->




    <!-- Categories list Section Begin -->
    <section id="categories" class="categories-list-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                <a href="#advent">
                    <div class="cl-item">
                            <div class="cl-pic">
                                <img src="img/categories-list/adventure.jpg" alt="">
                            </div>
                            <div class="cl-text">
                                <div class="label"><span>Adventure</span></div>
                                <h5><a href="#advent">Exploration and Eagerness</a></h5>
                                <p>Adventure games emphasize experiencing a story through dialogue and puzzle solving. Gameplay mechanics emphasize decision over action.
                                    Puzzle solving usually revolves around combining or manipulating items to advance the story</p>
                            </div>
                    </div>
                </a>
                <a href="#race">
                    <div class="cl-item">
                            <div class="cl-pic">
                                <img src="img/categories-list/race.jpg" alt="">
                            </div>
                            <div class="cl-text">
                                <div class="label"><span>Racing</span></div>
                                <h5><a href="#race">Speed and Reflexes</a></h5>
                                <p>Each gamer has had an experience with atleast one or three racing games be it in the lowest resolution to those with high-end graphics.
                                This game genre needs not further explanation but not all racing games were invented to be played by everyone.</p>
                            </div>
                    </div>
                </a>
                <a href="#action">
                    <div class="cl-item">
                            <div class="cl-pic">
                                <img src="img/categories-list/action.jpg" alt="">
                            </div>
                            <div class="cl-text">
                                <div class="label"><span>Action</span></div>
                                <h5><a href="#action">Accuracy * Movement * Quick Decisions * Reflexes * Timing</a></h5>
                                <p>Action games have long been one of the most popular game genres. Games in the ‘action’ genre put emphasis on challenging the player’s reflexes, reaction time,and hand-eye coordination. 
                                    The best action games include the perfect blend of everything this genre has to offer and channel it into a unique experience which only an action game can deliver.</p>
                            </div>
                    </div>
                </a>
                <a href="#action-adventure">
                    <div class="cl-item">
                            <div class="cl-pic">
                                <img src="img/categories-list/gta5.jpg" alt="">
                            </div>
                            <div class="cl-text">
                                <div class="label"><span>Action - Adventure</span></div>
                                <h5><a href="#action-adventure">simply One of the best</a></h5>
                                <p>This hybrid genre combines core elements from the two genres thus making it the broadest one of all video games.
                                    IT engages both reflexes and problem-solving, in both violent and non-violent situations. Best example is Grand Theft Auto A.K.A GTA
                                </p>
                            </div>
                    </div>
                </a>
                <a href="#fight">
                    <div class="cl-item">
                        <div class="cl-pic">
                            <img src="img/categories-list/fight.jpg" alt="">
                        </div>
                        <div class="cl-text">
                            <div class="label"><span>Fighting </span></div>
                            <h5><a href="#fight">close combat and strategy</a></h5>
                            <p>Fighting games are a form of action game in which two on-screen characters engage in one-on-one combat.
                            Fighting games frequently feature unarmed fighting, such as boxing or martial arts, but can also include fighting with weapons like swords or guns.</p>
                        </div>
                    </div>
                </a>
                <a href="#simulate">
                    <div class="cl-item">
                        <div class="cl-pic">
                            <img src="img/categories-list/simulate.jpeg" alt="">
                        </div>
                        <div class="cl-text">
                            <div class="label"><span>Simulation</span></div>
                            <h5><a href="#">not much but comfort</a></h5>
                            <p>Just as the name suggests, these type of games are designed to simulate real-world activities. The player here has the power to controlo the a character or the environment freely.
                            This type of game also serves the purpose of training , analysis or even prediction given their reality depicting quality,
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#sports">
                    <div class="cl-item">
                        <div class="cl-pic">
                            <img src="img/categories-list/sport.jpg" alt="">
                        </div>
                        <div class="cl-text">
                            <div class="label"><span>Sports</span></div>
                            <h5><a href="#">Talk about addiction !!</a></h5>
                            <p>Sports games emerged early in the history of gaming and today it remains as one of the most popular game genres in the world.
                                Just like the real-world sports, sports games simulate the traditional physical sports wherein the opposing team is controlled by artificial intelligence (AI) or other real-life people.</p>
                        </div>
                    </div>
                </a>

                </div>

    <!-- Sidebar Section End -->
        <div class="col-lg-4 col-md-7 p-0">
            <div class="sidebar-option">
                
                <div class="hardware-guides">
                    <div class="section-title">
                        <h5>Hardware guides</h5>
                    </div>
                    <div class="trending-item">
                        <div class="ti-pic">
                            <img src="img/trending/kit.jpg" alt="no image">
                        </div>
                        <div class="ti-text">
                            <ul>
                                <li>Racers delight</li>
                            </ul>
                            <h6><a href="#race">Racers must be itching to get a chance to spin those hotwheels using this 
                                driving kit.</a>
                            </h6>
                            
                        </div>
                    </div>
                    <div class="trending-item">
                        <div class="ti-pic">
                            <img src="img/trending/headset.jpg" alt="no image">
                        </div>
                        <div class="ti-text">
                            <ul>
                                <li>Communicate</li>
                            </ul>
                            <h6><a href="">Gaming has never been better while speaking to your crewmates and rivals.</a></h6>
                        </div>
                    </div>
                    <div class="trending-item">
                        <div class="ti-pic">
                            <img src="img/trending/keyboard.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <ul>
                                <li>PC variables</li>
                            </ul>
                            <h6><a href="">Pc gamers cant be left behind, their skills are hot!!</a>
                            </h6>
                        </div>
                    </div>
                    <div class="trending-item">
                        <div class="ti-pic">
                            <img src="img/trending/vr.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <ul>
                                <li>Immerse</li>
                            </ul>
                            <h6><a href="">Virtual reality just made gaming much more than it seems. With this gear 
                                you feel the game.
                            </a></h6>
                        </div>
                    </div>
                    <div class="trending-item">
                        <div class="ti-pic">
                            <img src="img/trending/chair.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <ul>
                                <li>Comfort</li>
                            </ul>
                            <h6><a href="">Sit down and relax, you rather game in comfort than complaining later about 
                                RSI's and other discomfort related issues.
                            </a></h6>
                        </div>
                    </div>
                </div>
                <div class="best-of-post">
                    <div class="section-title">
                        <h5>Best of ...</h5>
                    </div>
                    <div class="bp-item">
                        <div class="bp-loader">
                            <div class="loader-circle-wrap">
                                <div class="loader-circle">
                                    <span class="circle-progress-1" data-cpid="id-1" data-cpvalue="95"
                                        data-cpcolor="#c20000"></span>
                                    <div class="review-point">9.5</div>
                                </div>
                            </div>
                        </div>
                        <div class="bp-text">
                            <ul>
                                <li> Racing </li>
                            </ul>
                            <h6><a href="">Need For Speed Heat</a></h6>
                        </div>
                    </div>
                    <div class="bp-item">
                        <div class="bp-loader">
                            <div class="loader-circle-wrap">
                                <div class="loader-circle">
                                    <span class="circle-progress-1" data-cpid="id-2" data-cpvalue="85"
                                        data-cpcolor="#c20000"></span>
                                    <div class="review-point">8.5</div>
                                </div>
                            </div>
                        </div>
                        <div class="bp-text">
                            <ul>
                                <li> Sports </li>
                            </ul>
                            <h6><a href=""> FIFA 21</a></h6>
                        </div>
                    </div>
                    <div class="bp-item">
                        <div class="bp-loader">
                            <div class="loader-circle-wrap">
                                <div class="loader-circle">
                                    <span class="circle-progress-1" data-cpid="id-3" data-cpvalue="80"
                                        data-cpcolor="#c20000"></span>
                                    <div class="review-point">9.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="bp-text">
                            <ul>
                                <li> Adventure </li>
                            </ul>
                            <h6><a href="">God of war 4</a></h6>
                        </div>
                    </div>
                    <div class="bp-item">
                        <div class="bp-loader">
                            <div class="loader-circle-wrap">
                                <div class="loader-circle">
                                    <span class="circle-progress-1" data-cpid="id-4" data-cpvalue="75"
                                        data-cpcolor="#c20000"></span>
                                    <div class="review-point">10</div>
                                </div>
                            </div>
                        </div>
                        <div class="bp-text">
                            <ul>
                                <li> ACTION </li>
                            </ul>
                            <h6><a href="">GTA V (Grand Theft Auto)</a></h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    <!-- sidebar List Section End -->
            </div>
        </div>
    </section>
    <!-- Categories List Section End -->

    <!-- Game type Section Begin -->
    <section class="video-guide-section">

    <!-- adventure pictures -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Adventure</h5>
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
                                    <section id="advent">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="vg-item large-vg set-bg" data-setbg="img/genre/adventure/clank.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vg-item large-vg set-bg" data-setbg="img/genre/adventure/dead.jpg">                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    <!-- adventure pictures -->

    <!-- racing pictures -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Racing</h5>
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
                                <section id="race">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="vg-item  set-bg" data-setbg="img/genre/racing/most1.png">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/racing/nolimits.png">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/racing/rivals.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vg-item set-bg" data-setbg="img/genre/racing/most1.jpg">                                                    
                                            </div>
                                        </div>
                                </section>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    <!-- racing pictures -->

    <!-- action pictures -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Action</h5>
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
                                    <section id="advent">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="vg-item  set-bg" data-setbg="img/genre/action/codmod.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/action/codops.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/action/codinf.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/action/resident.jpg">                                                    
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    <!-- action pictures -->

    <!-- action-adventure pictures -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Action-Adventure</h5>
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
                                    <section id="advent">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="vg-item  set-bg" data-setbg="img/genre/mixed/gta5.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vg-item set-bg" data-setbg="img/genre/mixed/fortnite.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/mixed/unchart.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vg-item set-bg" data-setbg="img/genre/mixed/halo.jpg">                                                    
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    <!-- action-adventure pictures -->

    <!-- fighting pictures -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Fighting</h5>
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
                                    <section id="advent">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="vg-item  set-bg" data-setbg="img/genre/fight/injust.png">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/fight/tekken.jpg">                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="vg-item set-bg" data-setbg="img/genre/fight/mk11.jpg">                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vg-item set-bg" data-setbg="img/genre/fight/injust1.jpg">                                                    
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    <!-- fighting pictures -->

    </section>
    <!-- Game type Section End -->

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