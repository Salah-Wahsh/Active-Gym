<?php
session_start();
include("Config.php");

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['Cdate'] == 'Open this select menu') {
        echo "<script>
alert('Please, choose a correct time' );
window.location.href='../HTML/userPage.php';
</script>";
    } else {

        $sql = "INSERT INTO training(user_id,className,time, endDate) VALUES ($user_id, '$_POST[class]'  ,'$_POST[Cdate]', DATE_ADD(CURDATE(), INTERVAL 30 DAY))";
        //Excute
        if (!mysqli_query($con, $sql)) {
            echo "<script>
alert('You are already Registered in this class' );
window.location.href='../HTML/userPage.php';
</script>";
        } else
            echo "<script>
alert('You Registered The Class successfully');
window.location.href='../HTML/userPage.php';
</script>";
    }
}
