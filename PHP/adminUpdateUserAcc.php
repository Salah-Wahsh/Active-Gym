<?php
session_start();
include("Config.php");

$updateid = $_POST['uid'];
$prop = $_POST['attr'];
$newVal = $_POST['newValue'];

$sql = "UPDATE register SET $prop = '$newVal' WHERE id = $updateid";
//Excute
if (!mysqli_query($con, $sql)) {
    echo "<script>
        alert('Error, something wrong happened.');
        window.location.href='../HTML/adminPage.php';
        </script>";
} else
    echo "<script>
        alert('Information updated successfully.');
        window.location.href='../HTML/adminPage.php';
        </script>";
