<?php
session_start();
?>

<html>

<head>
    <link rel="icon" href="../images/weightlifter.png">
    <!-- BS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- BS END -->
    <link rel="stylesheet" type="text/css" href="../CSS/logincss.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="../HTML/index.php" style="font-family: Arial Black, Gadget, sans-serif; font-size: 22px; color: white;">Active Gym</a>
            <ul class="mr-auto"></ul>
            <ul class="navbar-nav list">
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php#services">Services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php#plans">Plans <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php#classes">Class Booking <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php#contact">Contact Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/userRegister.html">Register <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Login <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="parallax"></div>
    <div class="centered">
        <div class="center">
            <form action="../PHP/loginPage_B.php" method="post">
                <div class="row" style="text-align: center; padding: 5%;">
                    <div class="col-lg-12">
                        <span class="sec-heading">Login Form</span><br><br><br>
                    </div>
                    <?php
                    if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
                    ?>
                        <input class="cont-inpt" value="<?php echo $_COOKIE['email']; ?>" type="text" name="email" placeholder="E-mail"><br>

                        <input class="cont-inpt" value="<?php echo $_COOKIE['password']; ?>" type="password" name="pass" placeholder="Password">
                    <?php
                    } else {


                    ?>
                        <input class="cont-inpt" type="text" name="email" placeholder="E-mail"><br>
                        <input class="cont-inpt" type="password" name="pass" placeholder="Password">
                    <?php
                    }

                    ?>
                    <br>
                    <button class="cont-inpt" type="submit" class="btn btn-danger rounded-pill" style="padding: 1%; background-color:#B12A2A; color: white; ">Login</button>
                </div>
            </form>
        </div>

</body>

</html>