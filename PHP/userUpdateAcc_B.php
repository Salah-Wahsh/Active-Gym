<?php
session_start();
include("Config.php");

if (
    $_SESSION['user_fname'] == $_POST['fname'] &&
    $_SESSION['user_lname'] == $_POST['lname'] &&
    $_SESSION['user_password'] == $_POST['password'] &&
    $_SESSION['user_address'] == $_POST['address'] &&
    $_SESSION['user_age'] == $_POST['age'] &&
    $_SESSION['user_email'] == $_POST['email']
) {
    echo "<script>
        window.location.href='../HTML/userPage.php';
        </script>";
} else {
    $sql = "UPDATE register SET fname = '$_POST[fname]',
                        lname = '$_POST[lname]',
                        password = '$_POST[password]',
                        address = '$_POST[address]',
                        age = '$_POST[age]',
                        email = '$_POST[email]' WHERE id = $_SESSION[user_id]";
    //Excute
    if (!mysqli_query($con, $sql)) {
        echo "<script>
        alert('Error, something wrong happened.');
        </script>";
        echo mysqli_errno($con);
    } else
        echo "<script>
        alert('Information updated successfully.');
        window.location.href='../HTML/userPage.php';
        </script>";
}
