<?php
session_start();
include("Config.php");

?>

<title>My Classes</title>
<link rel="icon" href="../images/weightlifter.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Font Awesome -->
<link href="fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="fontawesome/css/brands.css" rel="stylesheet">
<link href="fontawesome/css/solid.css" rel="stylesheet">
<!-- Font Awesome End -->
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
<!-- CSS Link -->
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
<!--  -->
<style type="text/css">
    .container {
        width: 70%;
        padding: 5%;
        position: relative;
        text-align: center;
    }
</style>
</head>


<body style="background-color: black;">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-tarpost="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="../HTML/userPage.php" style="font-size: 22px; color: white;"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a class="navbar-brand" href="../HTML/userPage.php" style="font-family: Arial Black, Gadpost, sans-serif; font-size: 22px; color: white;">Active Gym</a>
            <ul class="mr-auto"></ul>
            <ul class="navbar-nav list">
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php"><i class="fas fa-user"></i> Logout <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div style="text-align: center; padding: 5%;">
        <div class="col-lg-12">
            <span class="sec-heading">Your Registered Classes</span><br>
        </div>
    </div>
 
    <div class="container">
        <label style="color: white;">Change your class time:</label>
        <form action="../PHP/userUpdateUserClass_B.php" method="post">
            <br><br>
            <div class="input-group mb-3">
                <?php
                $sql = "SELECT * FROM training where user_id = $_SESSION[user_id]";

                $data = mysqli_query($con, $sql);
                while ($res = mysqli_fetch_array($data)) {
                ?>
                    <div class="input-group mb-3" style="height: 48px;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><?php echo $res['className']; ?></label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="attr<?php echo $res['className']; ?>" style="height: 48px;">
                            <option selected value="cur">(Current) <?php echo $res['time']; ?></option>
                            <?php
                            $sql = "SELECT time FROM classes WHERE name = '$res[className]'";

                            $data2 = mysqli_query($con, $sql);
                            while ($res2 = mysqli_fetch_array($data2)) {
                                if ($res2['time'] == $res['time']);
                                else {
                            ?>
                                    <option value="<?php echo $res2['time'] ?>"><?php echo $res2['time'] ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                <?php } ?>

                <br>
                <br><br>

                <button type="submit" class="btn btn-danger btn-lg">Confirm</button>
        </form>

    </div>
</body>