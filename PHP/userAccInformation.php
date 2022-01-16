<?php
session_start();
?>
<Html>

<head>
    <title>
        Account Information
    </title>
    <link rel="icon" href="../images/weightlifter.png">

    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    <!-- BS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- BS END -->
    <link rel="stylesheet" type="text/css" href="../CSS/registerStyle.css">
    <style type="text/css">
        .center {
            margin: auto;
            width: 60%;
            padding: 10px;
        }
    </style>
</head>

<body>
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
                    <a class="nav-link" href="../index.php"><i class="fas fa-user"></i> Logout <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <form action="../PHP/userUpdateAcc_B.php" method="post">
        <section class="h-100 bg-dark">
            <div class="container py-6 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">

                        <div class="card card-registration my-4">

                            <h3 class="mb-6 text-uppercase" style="text-align: center; padding: 3%;">Account Information</h3>
                            <div class="row g-0">
                                <div class="center ">
                                    <div class="col-xl-12">

                                        <div class="card-body p-md-5 text-black">
                                            <div class="form-outline mb-4">
                                                <input type="text" name="id" class="form-control form-control-lg" disabled value="<?php echo $_SESSION['user_id']; ?>" />
                                                <label class="form-label">ID</label>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" name="fname" class="form-control form-control-lg" value="<?php echo $_SESSION['user_fname']; ?>" />
                                                        <label class="form-label">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" name="lname" class="form-control form-control-lg" value="<?php echo $_SESSION['user_lname']; ?>" />
                                                        <label class="form-label">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" name="address" class="form-control form-control-lg" value="<?php echo $_SESSION['user_address']; ?>" />
                                                <label class="form-label">Address</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" class="form-control form-control-lg" value="<?php echo $_SESSION['user_password']; ?>" />
                                                <label class="form-label">Password</label>
                                            </div>
                                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                                <h6 class="mb-0 me-4">Gender: &nbsp;</h6>
                                                <?php echo ucfirst($_SESSION['user_gender']); ?>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="number" name="age" class="form-control form-control-lg" value="<?php echo $_SESSION['user_age']; ?>" />
                                                <label class="form-label" for="form3Example9">Age</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" name="email" class="form-control form-control-lg" value="<?php echo $_SESSION['user_email']; ?>" />
                                                <label class="form-label" for="form3Example97">Email</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <div class="col-lg-12" style="text-align: center;">
                                                    <button type="submit" class="btn btn-warning btn-lg ms-2" style="background-color: #B12A2A; color:white;">Save</button>
                                                </div>
                                            </div> <br>
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
    </form>
</body>

</html>