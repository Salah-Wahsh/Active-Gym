<?php
session_start();
include("../PHP/Config.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/weightlifter.png">
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
    <title>Home</title>

    <script type="text/javascript">
        function disableBack() {
            window.history.forward();
        }   
        setTimeout("disableBack()", 0);
        window.onunload = function() {
            null
        };
    </script>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-tarpost="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <a class="navbar-brand" href="../HTML/index.php" style="font-family: Arial Black, Gadpost, sans-serif; font-size: 22px; color: white;">Active Gym</a>

            <ul class="mr-auto"></ul>

            <ul class="navbar-nav list">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"></i> Options
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../PHP/Delete.php">Delete Account</a>
                        <a class="dropdown-item" href="../PHP/userAccInformation.php">Account Information</a>
                        <a class="dropdown-item" href="../PHP/userViewClass.php">My Classes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php"><i class="fas fa-user"></i> Logout <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>
    <div id="classes" class="sec8" style="background-color: black;">
        <div class="row" style="text-align: center; padding: 5%;">
            <div class="col-lg-12">
                <span class="sec-heading">Rigester New Classes</span><br>
            </div>
        </div>
    </div>
    <div class="sec9" style="background-color: black;">
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
                        <!--  
        -->
                        <div class="col-lg-6" style="background-color: #B12A2A;padding: 2%;">
                            <span style="font-size: 30px;font-family: Helvetica; color: white;"><?php echo $res['name']; ?></span><br>
                            <div class="form-outline mb-4">
                                <br>
                                <form action="../PHP/userClassReg_B.php" method="post">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">

                                            <input type="text" hidden value="<?php echo $res['name']; ?>" name="class">

                                        </div>
                                    </div>
                                    <label style="color: white;">Choose the day</label><br>
                                    <select name="Cdate" class="browser-default custom-select">
                                        <option selected="">Open this select menu</option>
                                        <?php
                                        $sql = "SELECT time FROM classes WHERE name = '$res[name]'";
                                        $data2 = mysqli_query($con, $sql);
                                        while ($res2 = mysqli_fetch_array($data2)) {
                                        ?>
                                            <option value="<?php echo $res2['time'] ?>"><?php echo $res2['time'] ?></option>

                                        <?php } ?>
                                    </select><br>
                                    <br><button type="submit" class="btn btn-danger rounded-pill" style="padding: 2%; background-color:black; width: 220px; ">Join Now</button>
                                </form>
                            </div>
                        </div>
                    </div><br>
                <?php } else { ?>
                    <div class="row no-gutters">
                        <div class="col-lg-6" style="background-color: #B12A2A;padding: 2%;">
                            <span style="font-size: 30px;font-family: Helvetica; color: white;"><?php echo $res['name']; ?></span><br>
                            <div class="form-outline mb-4">
                                <br>
                                <form action="../PHP/userClassReg_B.php" method="post">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">

                                            <input type="text" hidden value="<?php echo $res['name']; ?>" name="class">

                                        </div>
                                    </div>
                                    <label style="color: white;">Choose the day</label><br>
                                    <select name="Cdate" class="browser-default custom-select">
                                        <option selected="">Open this select menu</option>
                                        <?php
                                        $sql = "SELECT time FROM classes WHERE name = '$res[name]'";
                                        $data2 = mysqli_query($con, $sql);
                                        while ($res2 = mysqli_fetch_array($data2)) {
                                        ?>
                                            <option value="<?php echo $res2['time'] ?>"><?php echo $res2['time'] ?></option>

                                        <?php } ?>
                                    </select><br>
                                    <br><button type="submit" class="btn btn-danger rounded-pill" style="padding: 2%; background-color:black; width: 220px; ">Join Now</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <img src="../images/<?php echo $res['image']; ?>" style="width: 100%;">
                        </div>
                    </div>
                    <br>
        <?php }
            }
            $prev = $res['name'];
            $i++;
        } ?>

        <!--
        <div class="row no-gutters">
            <div class="col-lg-6" style="background-color: #B12A2A;padding: 2%">
                <span style="font-size: 30px;font-family: Helvetica; color: white;">ABS</span><br>
                <form action="../PHP/userClassReg_B.php" method="post">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">

                            <input type="text" hidden value="ABS" name="class">

                        </div>
                    </div>
                    <label style="color: white;">Choose the day</label><br>
                    <select name="Cdate" class="browser-default custom-select">
                        <option selected="">Open this select menu</option>
                        <option value="Sun:Tue | 7 : 10 Am">Sun:Tue | 7 : 10 Am</option>
                        <option value="Mon:Fri | 7 : 10 pm">Mon:Fri | 7 : 10 pm</option>
                        <option value="Thu:Sat | 7 : 10 Am">Thu:Sat | 7 : 10 Am</option>
                    </select><br>
                    <br><button type="submit" class="btn btn-danger rounded-pill" style="padding: 2%; background-color:black; width: 220px; ">Join Now</button>
                </form>
            </div>
            <div class="col-lg-6">
                <img src="../images/3.jpg" style="width: 100%;">
            </div>
        </div>
        <br>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <img src="../images/class1.jpg" style="width: 100%;">
            </div>
            <div class="col-lg-6" style="background-color: #B12A2A;padding: 2%;">
                <span style="font-size: 30px;font-family: Helvetica; color: white;">KICKBOXING</span><br>
                <form action="../PHP/userClassReg_B.php" method="post">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">

                            <input type="text" hidden value="KICK" name="class">

                        </div>
                    </div>
                    <label style="color: white;">Choose the day</label><br>
                    <select name="Cdate" class="browser-default custom-select">
                        <option selected="">Open this select menu</option>
                        <option value="Sun:Tue | 7 : 10 Am">Sun:Tue | 7 : 10 Am</option>
                        <option value="Mon:Fri | 7 : 10 pm">Mon:Fri | 7 : 10 pm</option>
                        <option value="Thu:Sat | 7 : 10 Am">Thu:Sat | 7 : 10 Am</option>
                    </select><br>
                    <br><button type="submit" class="btn btn-danger rounded-pill" style="padding: 2%; background-color:black; width: 220px; ">Join Now</button>
                </form>
            </div>
        </div><br>
        <div class="row no-gutters">
            <div class="col-lg-6" style="background-color: #B12A2A;padding: 2%; ">
                <span style="font-size: 30px;font-family: Helvetica; color: white;">YOGA</span><br>
                <form action="../PHP/userClassReg_B.php" method="post">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">

                            <input type="text" hidden value="YOGA" name="class">

                        </div>
                    </div>
                    <label style="color: white;">Choose the day</label><br>
                    <select name="Cdate" class="browser-default custom-select">
                        <option selected="">Open this select menu</option>
                        <option value="Sun:Tue | 7 : 10 Am">Sun:Tue | 7 : 10 Am</option>
                        <option value="Mon:Fri | 7 : 10 pm">Mon:Fri | 7 : 10 pm</option>
                        <option value="Thu:Sat | 7 : 10 Am">Thu:Sat | 7 : 10 Am</option>
                    </select><br>
                    <br><button type="submit" class="btn btn-danger rounded-pill" style="padding: 2%; background-color:black; width: 220px; ">Join Now</button>
                </form>
            </div>
            <div class="col-lg-6">
                <img src="../images/class3.jpg" style="width: 100%;">
            </div>
        </div>-->
        <div class="sec10">
            <div class="row" style="text-align: center; padding: 5%;">
                <div class="col-lg-12">
                    <span class="sec-heading">Give Feedback</span><br>
                </div>
            </div>
        </div>
        <form action="../PHP/userRegister_B.php" method="get" style="text-align: center;">
            <div class="container3">
                <div class="comment">
                    <textarea class="textinput" name="cmnt" placeholder="Type something Positive :)" maxlength="280"></textarea>
                </div>
            </div><br><br><br><br>
            <button type="submit" class="btn btn-danger rounded-pill " style="padding: 1%; background-color:#B12A2A; width:30% ;  ">Send</button>
        </form>
        <br><br><br><br>
    </div>
</body>

</html>