<!DOCTYPE html>
<html>

<head>
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

    <link rel="stylesheet" type="text/css" href="../CSS/admin.css">
    <style>
        body {
            background-color: #292b2c;
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-tarpost="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="../HTML/adminPage.php" style="font-size: 22px; color: white;"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a class="navbar-brand" href="../HTML/adminPage.php" style="font-family: Arial Black, Gadpost, sans-serif; font-size: 22px; color: white;">Active Gym</a>
            <ul class="mr-auto"></ul>
            <ul class="navbar-nav list">
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/index.php"><i class="fas fa-user"></i> Logout <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    session_start();
    include("Config.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "SELECT * FROM register";

        $data = mysqli_query($con, $sql);

        echo '<table class="table table-dark">
            <tr>
                <th> ID </th>
                <th> First Name </th>
                <th> Last Name </th>
                <th> Address </th>
                <th> Gender </th>
                <th> Age </th>
                <th> Email </th>
            <tr/>';
        while ($res = mysqli_fetch_array($data)) {
            echo '<tr>
                <th>' . $res['id'] . '</th>
                <td>' . $res['fname'] . '</td>
                <td>' . $res['lname'] . '</td>
                <td>' . $res['address'] . '</td>
                <td>' . $res['gender'] . '</td>
                <td>' . $res['age'] . '</td>
                <td>' . $res['email'] . '</td>
              </tr>';
        }
        echo '</table>';
    } else {
        $sql = "SELECT * FROM training";

        $data = mysqli_query($con, $sql);

        echo '<table class="table table-dark">
            <tr>
                <th> ID </th>
                <th> Class </th>
                <th> Time </th>
                <th> End Date </th>
            <tr/>';
        while ($res = mysqli_fetch_array($data)) {
            echo '<tr>
                <td>' . $res['user_id'] . '</td>
                <td>' . $res['className'] . '</td>
                <td>' . $res['time'] . '</td>
                <td>' . $res['endDate'] . '</td>
              </tr>';
        }
        echo '</table>';
    }
    ?>
</body>

</html>