<?php
session_start();
include('Config.php');

setcookie('email', $_POST['email'], time() + 3600, '/', '', 0);
setcookie('password', $_POST['pass'], time() + 3600, '/', '', 0);

$email = $_POST['email'];
$password = $_POST['pass'];
//to prevent from mysqli injection
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $result = mysqli_query($con, "SELECT id FROM register WHERE email = '$email' AND password = '$password'");
    $_SESSION['admin_id'] = $row['id'];
    $_SESSION['admin_fname'] = $row['fname'];
    $_SESSION['admin_lname'] = $row['lname'];
    header("Location: ../HTML/adminPage.php");
}

$sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $result = mysqli_query($con, "SELECT id FROM register WHERE email = '$email' AND password = '$password'");
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_fname'] = $row['fname'];
    $_SESSION['user_lname'] = $row['lname'];
    $_SESSION['user_password'] = $row['password'];
    $_SESSION['user_address'] = $row['address'];
    $_SESSION['user_age'] = $row['age'];
    $_SESSION['user_gender'] = $row['gender'];
    $_SESSION['user_email'] = $row['email'];
    // mysqli_query($con, "DELETE FROM training WHERE endDate < NOW()");
    header("Location: ../HTML/userPage.php");
} else {
    echo "<script>
alert('Login failed. Invalid username or password.');
window.location.href='../HTML/loginPage.php';
</script>";
}
