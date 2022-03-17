<?php
session_unset(); //removes value
include("../PHP/Config.php");
include("Config.php");

?>

<!DOCTYPE html>
<html style=" scroll-behavior: smooth;">

<head>
    <title>Active Gym</title>
    <link rel="icon" href="../images/weightlifter.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awsome -->
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    <!-- Font Awsome End -->
    <!-- image hover -->
    <link rel="stylesheet" type="text/css" href="imagehover.css-master/css/imagehover.min.css">
    <!-- image hover end -->
    <!-- BS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- BS END -->
    <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <!--  -->

</head>

<body>
    <div id="progressbar" style="z-index: 1;"></div>
    <div id="scrollPath" style="z-index: 1;"></div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#" style="font-family: Arial Black, Gadget, sans-serif; font-size: 22px; color: white;">Active Gym</a>
            <ul class="mr-auto"></ul>
            <ul class="navbar-nav list">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#services">Services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#plans">Plans <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#classes">Class Booking <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#contact">Contact Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/userRegister.html">Register <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/loginPage.php"><i class="fas fa-user"></i> Login <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sec1">

        <div class="parallax"></div>
        <div class="centered">
            <div class="sc1">
                <h1 class="h1-style">Active Gym</h1>
                <p class="stronger">Be.. <b><span style="color:red">Stronger</span></b></p>
                <button class="btn btn-danger" onclick="location.href = '../HTML/userRegister.html';" style="width: 200px; background-color:#B12A2A;">Join Now</button>
            </div>
        </div>
    </div>
    <div class="carrier" style="background-color: #061010;">
        <div class="sec2">
            <div class="row" style="text-align: center; padding: 5%;">
                <div class="col-lg-12">
                    <span class="sec-heading">ABOUT US</span><br>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-5" style="margin-left: 8.2%;">
                    <img src="../images/GYM-Cleaning.jpeg" style="width: 100%;">
                </div>
                <!--
		-->
                <div class="col-lg-6" style="background-color: #B12A2A;padding: 5%;">
                    <span class="abt-headings">We Care About You</span><br>
                    <span class="abt-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                </div>
            </div><br>
            <div class="row no-gutters">
                <div class="col-lg-6" style="background-color: #B12A2A;padding: 5%; text-align: right;">
                    <span class="abt-headings">Privacy Matters</span><br>
                    <span class="abt-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                </div>
                <div class="col-lg-5">
                    <img src="../images/download.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
        <div id="services" class="sec3">
            <div class="row" style="text-align: center; padding: 5%;">
                <div class="col-lg-12">
                    <span class="sec-heading">OUR SERVICES</span><br>
                </div>
            </div>
            <!-- Slider Beginning -->
            <div class="row" style="margin-left: 6%;">
                <div class="col-lg-11">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <!-- slide show -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/1.jpg " style="width: 100%;" alt="anything">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/3.jpg" style="width: 100%;" alt="anything">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/4.jpg" style="width: 100%;" alt="anything">
                            </div>
                        </div>
                        <!-- left right -->
                        <a href="#demo" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#demo" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec4">
            <div class="row" style="text-align: center; padding: 5%;">
                <div class="col-lg-12">
                    <span class="sec-heading">OUR TRAINERS</span><br>
                </div>
            </div>
            <!-- Cards Beginning -->
            <div class="row">

                <div class="container">
                    <div class="cent">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card c">
                                    <img class="card-img-top" src="../images/p2.jpg">
                                    <br>
                                    <h5 class="card-title">Gus Fring</h5>
                                    <p class="card-text" style="font-family: sans-serif;">BIO<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card c">
                                    <img class="card-img-top" src="../images/p1.jpg">
                                    <br>
                                    <h5 class="card-title">Rick Grimes</h5>
                                    <p class="card-text" style="font-family: sans-serif;">BIO<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card c">
                                    <img class="card-img-top" src="../images/p3.jpg">
                                    <br>
                                    <h5 class="card-title">Walter White</h5>
                                    <p class="card-text" style="font-family: sans-serif;">BIO<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Cards End -->
            </div>
        </div>
        <div class="sec5">
            <div class="row" style="text-align: center; padding: 5%;">
                <div class="col-lg-12">
                    <span class="sec-heading">GALLERY</span><br>
                </div>
            </div>
            <!-- Gallery -->
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <a href="https://www.pexels.com/search/gym/" target="_blank">
                            <figure class="imghvr-fade">

                                <img src="../images/fit1.jpg" style="width: 100%;">

                                <figcaption>

                                    <br><br><br>
                                    <i class="fas fa-plus fa-3x"></i>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.pexels.com/search/gym/" target="_blank">
                            <figure class="imghvr-fade">
                                <img src="../images/fit2.jpg" style="width: 100%;">
                                <figcaption>
                                    <br><br><br>
                                    <i class="fas fa-plus fa-3x"></i>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.pexels.com/search/gym/" target="_blank">
                            <figure class="imghvr-fade">
                                <img src="../images/fit3.jpg" style="width: 100%;">
                                <figcaption>
                                    <br><br><br>
                                    <i class="fas fa-plus fa-3x"></i>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <a href="https://www.pexels.com/search/gym/" target="_blank">
                            <figure class="imghvr-fade">
                                <img src="../images/fit4.jpg" style="width: 100%;">
                                <figcaption>
                                    <br><br><br>
                                    <i class="fas fa-plus fa-3x"></i>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.pexels.com/search/gym/" target="_blank">
                            <figure class="imghvr-fade">
                                <img src="../images/fit5.jpg" style="width: 100%;">
                                <figcaption>
                                    <br><br><br>
                                    <i class="fas fa-plus fa-3x"></i>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.pexels.com/search/gym/" target="_blank">
                            <figure class="imghvr-fade">
                                <img src="../images/fit6.jpg" style="width: 100%;">
                                <figcaption>
                                    <br><br><br>
                                    <i class="fas fa-plus fa-3x"></i>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div><!-- Gallery End -->
        </div>
        <div class="sec6">
            <div id="plans" class="row" style="text-align: center; padding: 5%;">
                <div class="col-lg-12">
                    <span class="sec-heading">PRICES AND OFFERS</span><br>
                </div>
            </div>
            <<!-- Prices Cards -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card" style="width: 19rem">
                                <div class="card-header" style="background-color: #CD3636; text-align: center; color: white;">
                                    <h4 class="card-title">Silver<br>20$/MO.</h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore.</span>
                                </div>
                                <div class="card-body card2" style="background-color: #CD3636; text-align: center; color: white;	">
                                    <span class="card-text"><strong> 5 Active Days</strong></span><br><br>
                                    <span class="card-text"><strong> 5% Off After one year</strong></span><br><br>
                                    <span class="card-text"><strong> -</span></strong><br><br>
                                    <span class="card-text"><strong> -</span></strong><br><br><br>
                                    <button type="button" onclick="location.href = '../HTML/userRegister.html';" class="btn btn-danger rounded-pill" style="padding: 1%; background-color:black; width: 220px; ">Join Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card" style="width: 19rem">
                                <div class="card-header" style="background-color: #CD3636; text-align: center; color: white;">
                                    <h4 class="card-title">Gold<br>30$/MO.</h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore.</span>
                                </div>
                                <div class="card-body card2" style="background-color: #CD3636; text-align: center; color: white;	">
                                    <span class="card-text"><strong> 5 Active Days</strong></span><br><br>
                                    <span class="card-text"><strong> 5% Off After one year</strong></span><br><br>
                                    <span class="card-text"><strong> No Online Booking fees</span></strong><br><br>
                                    <span class="card-text"><strong> -</span></strong><br><br><br>
                                    <button type="button" onclick="location.href = '../HTML/userRegister.html';" class="btn btn-danger rounded-pill" style="padding: 1%; background-color:black; width: 220px; ">Join Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card" style="width: 19rem">
                                <div class="card-header" style="background-color: #CD3636; text-align: center; color: white;">
                                    <h4 class="card-title">Platinum<br>40$/MO.</h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore.</span>
                                </div>
                                <div class="card-body card2" style="background-color: #CD3636; text-align: center; color: white;	">
                                    <span class="card-text"><strong> 5 Active Days</strong></span><br><br>
                                    <span class="card-text"><strong> 10% Off After one year</strong></span><br><br>
                                    <span class="card-text"><strong> No Online Booking fees</span></strong><br><br>
                                    <span class="card-text"><strong> Points System</span></strong><br><br><br>
                                    <button type="button" onclick="location.href = '../HTML/userRegister.html';" class="btn btn-danger rounded-pill" style="padding: 1%; background-color:black; width: 220px; ">Join Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!--  <div class="row">
                    <div class="col-lg-4">
                        <img src="pic1.png">
                    </div>
                    <div class="col-lg-4">
                        <img src="pic2.png">
                    </div>
                </div>
                <div class="row" style="margin-left: 10%;">
                    <div class="col-lg-5">
                        <img src="pic3.png">
                    </div>
                    <div class="col-lg-5">
                        <img src="pic4.png">
                    </div>
                </div> -->
                <!-- Reviews Section -->
                <!-- 1 -->
                <div class="sec7">
                    <div class="row" style="text-align: center; padding: 5%;">
                        <div class="col-lg-12">
                            <span class="sec-heading">TOP COMMENTS</span><br>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card" style="width: 19rem">
                                <div class="card-header" style="background-color: white; text-align: center; color: white;">
                                    <br><br>
                                    <h4 class="card-title" style="color: black;">Jesse Pinkman</h4><br><br>
                                </div>
                                <div class="card-body card2" style="background-color: #CD3636; text-align: center; color: white;	">
                                    <span class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br><br>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="col-lg-4">
                            <div class="card" style="width: 19rem">
                                <div class="card-header" style="background-color: white; text-align: center; color: white;">
                                    <br><br>
                                    <h4 class="card-title" style="color: black;">James Mcgill</h4><br><br>
                                </div>
                                <div class="card-body card2" style="background-color: #CD3636; text-align: center; color: white;	">
                                    <span class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br><br>
                                </div>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="col-lg-4">
                            <div class="card" style="width: 19rem">
                                <div class="card-header" style="background-color: white; text-align: center; color: white;">
                                    <br><br>
                                    <h4 class="card-title" style="color: black;">Mike Ehrmantraut</h4><br><br>
                                </div>
                                <div class="card-body card2" style="background-color: #CD3636; text-align: center; color: white;	">
                                    <span class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="classes" class="sec8">
                    <div class="row" style="text-align: center; padding: 5%;">
                        <div class="col-lg-12">
                            <span class="sec-heading">CLASSES</span><br>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="sec9">

                    <?php
                    $sql = "SELECT * FROM classes";

                    $data = mysqli_query($con, $sql);
                    $i = 2;
                    while ($res = mysqli_fetch_array($data)) {
                        if ($i > 2 && $prev == $res['name']);
                        else {
                            if ($i % 2 == 0) {
                    ?>
                                <div class="row no-gutters">
                                    <div class="col-lg-6">
                                        <img src="../images/<?php echo $res['image']; ?>" style="width: 100%;">
                                    </div>
                                    <div class="col-lg-6" style="background-color: #B12A2A;padding: 5%;">
                                        <span style="font-size: 30px;font-family: Helvetica; color: white;"><?php echo $res['name']; ?></span><br>
                                        <span style=" color: white;font-family: Helvetica;"><?php echo $res['description']; ?></span>
                                    </div>
                                </div><br>
                            <?php } else { ?>
                                <div class="row no-gutters">
                                    <div class="col-lg-6" style="background-color: #B12A2A;padding: 5%;">
                                        <span style="font-size: 30px;font-family: Helvetica; color: white;"><?php echo $res['name']; ?></span><br>
                                        <span style=" color: white;font-family: Helvetica;"><?php echo $res['description']; ?></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="../images/<?php echo $res['image']; ?>" style="width: 100%;">
                                    </div>
                                </div><br>
                    <?php
                            }
                        }
                        $prev = $res['name'];
                        $i++;
                    }
                    ?>
                    <!-- <div class="row no-gutters">
                        <div class="col-lg-6" style="background-color: #B12A2A;padding: 5%; text-align: right;">
                            <span style="font-size: 30px;font-family: Helvetica; color: white;">ABS</span><br>
                            <span style=" color: white;font-family: Helvetica;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </div>
                        <div class="col-lg-6">
                            <img src="../images/3.jpg" style="width: 100%;">
                        </div>
                    </div>
                    <br> -->
                    <!-- <div class="row no-gutters">
                        <div class="col-lg-6">
                            <img src="../images/class1.jpg" style="width: 100%;">
                        </div>
                        
                        <div class="col-lg-6" style="background-color: #B12A2A;padding: 5%;">
                            <span style="font-size: 30px;font-family: Helvetica; color: white;">KICKBOXING</span><br>
                            <span style=" color: white;font-family: Helvetica;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </div>
                    </div><br> -->
                    <!-- NEW -->
                    <!-- NEW -->
                    <!-- <div class="row no-gutters">
                        <div class="col-lg-6" style="background-color: #B12A2A;padding: 5%; text-align: right;">
                            <span style="font-size: 30px;font-family: Helvetica; color: white;">YOGA</span><br>
                            <span style=" color: white;font-family: Helvetica;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </div>
                        <div class="col-lg-6">
                            <img src="../images/class3.jpg" style="width: 100%;">
                        </div>
                    </div> -->
                </div>
                <div class="sec11a">
                    <div id="contact" class="row " style="text-align: center; padding: 5%;">
                        <div class="col-lg-6">
                            <span class="sec-heading">Contact Us</span><br><br><br>
                            <div class="loc" style="background-color: #B12A2A; padding: 5%;">
                                <div>
                                    <i class="fa fa-address-book" aria-hidden="true" style="color: white;"></i> <span style="color: white;">+20 010-2201-2214</span><br><br><br>
                                    <i class="fa fa-address-book" aria-hidden="true" style="color: white;"></i> <span style="color: white;">+20 010-2490-8449</span><br><br><br>
                                    <i class="fa fa-envelope" aria-hidden="true" style="color: white;"></i> <span style="color: white;">support.activegym@gmail.com
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span class="sec-heading">OUR BRANCHES</span><br><br><br>
                            <div class="loc" style="background-color: #B12A2A; padding: 5%;">
                                <div>
                                    <i class="fas fa-map-marker-alt" style="color: white;"></i> <span style="color: white;">37 Baghdad st.,Heliopolis- Cairo</span><br><br><br>
                                    <i class="fas fa-map-marker-alt" style="color: white;"></i> <span style="color: white;">3170 Gregory Lane- Cairo</span><br><br><br>
                                    <i class="fas fa-map-marker-alt" style="color: white;"></i> <span style="color: white;">Nasr City Men Branch- Cairo</span><br><br><br>
                                    <i class="fas fa-map-marker-alt" style="color: white;"></i> <span style="color: white;">First settllement. New Cairo</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec10">
                    <div class="row" style="text-align: center; padding: 5%;">
                        <div class="col-lg-12">
                            <span class="sec-heading">COMMENTS</span><br>
                        </div>
                    </div>
                </div>
                <?php
                include("Config.php");

                $sql = "SELECT * FROM comments";

                $data = mysqli_query($con, $sql);
                echo '<table  class="table">';
                while ($res = mysqli_fetch_array($data)) {
                    echo '<tr class="bg-danger">
                            <th>' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@" . $res['cname'] . '</th>
                        </tr>
                        <tr class="bg-dark">
                            <td style="color: white; text-align: center;">' . $res['comment'] . '</td>
                        </tr>';
                }
                echo '</table>';
                ?>
                <br><br><br><br>
        </div>
    </div>
    <script type="text/javascript">
        let progress = document.getElementById('progressbar');
        let totalHeight = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function() {
            let progressHeight = (window.pageYOffset / totalHeight) * 100;
            progress.style.height = progressHeight + "%";
        }
    </script>
</body>

</html>