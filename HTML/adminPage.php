<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin Page</title>
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
  <link rel="stylesheet" type="text/css" href="../CSS/admin.css">
  <!--  -->
  <style type="text/css">
    .sec {
      position: relative;
      text-align: center;
    }
  </style>

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

<body style="background-color: black;">

  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-tarpost="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="../index.php" style="font-family: Arial Black, Gadpost, sans-serif; font-size: 22px; color: white;">Active Gym</a>
      <ul class="mr-auto"></ul>
      <ul class="navbar-nav list">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php"><i class="fas fa-user"></i> Logout <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div style="text-align: center; padding: 5%;">
    <div class="col-lg-12">
      <span class="sec-heading">Welcome Admin, <?php echo $_SESSION['admin_fname']; ?></span><br>
    </div>
  </div>
  <div class="sec">

    <img src="../images/admin2.webp" style="width:50%;"><br><br><br>
    <form action="../PHP/adminViewUsers.php" method="post">
      <button type="submit" class="btn btn-dark btn-lg ">Show Users</button>
    </form><br>
    <form action="../PHP/adminViewUsers.php" method="get">
      <button type="submit" class="btn btn-dark btn-lg">Show Class Registeries</button>

    </form><br>
    <button type="button" onclick="location.href = '../HTML/userUpdateAcc.html';" class="btn btn-dark btn-lg">Update
      User</button>
    <br><br>
    <button type="button" onclick="location.href = '../HTML/addAdmin.html';" class="btn btn-dark btn-lg">Add
      Admin</button>
    <br><br>
    <button type="button" onclick="location.href = '../HTML/adminAddClass.html';" class="btn btn-dark btn-lg">Add
      Class</button>
    <br><br>
    <button type="button" onclick="location.href = '../PHP/adminDeleteClass_F';" class="btn btn-dark btn-lg">Delete
      Class</button>
  </div>
  <br><br><br><br>
</body>

</html>