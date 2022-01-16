<?php
session_start();
include("Config.php");

$user_id = $_SESSION['user_id'];

echo "<script>
        var answer = window.confirm('Are you sure you want to delete your account?');
if (!answer) {
    alert('Account was not deleted.');
    window.location.href='../HTML/userPage.php'
}
</script>";

$sql = "DELETE FROM register WHERE id=$user_id";
//Excute
if (!mysqli_query($con, $sql)) {
    echo "<script>
        alert('Error, something wrong happened.');
        window.location.href='../index.php';
        </script>";
} else
    echo "<script>
        alert('Account deleted successfully.');
        window.location.href='../index.php';
        </script>";
