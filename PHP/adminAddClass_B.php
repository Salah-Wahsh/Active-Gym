<?php
session_start();
include("Config.php");

$sql = "INSERT INTO classes (name, time, description, image) VALUES ('$_POST[cname]', '$_POST[time]', '$_POST[desc]', '$_POST[img]')";
//Excute
if (!mysqli_query($con, $sql)) {
    echo "<script>
        alert('Please check entered data.');
        window.location.href='../HTML/adminPage.php';
        </script>";
} else
    echo "<script>
        alert('Class registerd sucssessfuly.');
        window.location.href='../HTML/adminPage.php';
        </script>";
