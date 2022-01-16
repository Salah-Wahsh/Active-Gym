<?php
session_start();
include("Config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method

    $sql = "INSERT INTO register(id,fname,lname,password,
          address,gender,age,email) VALUES (DEFAULT ,'$_POST[fname]','$_POST[lname]','$_POST[password]',
          '$_POST[address]','$_POST[gender]','$_POST[age]','$_POST[email]')";
    //Excute
    if (!mysqli_query($con, $sql)) {
        echo "<script>
        alert('Please enter correct Data');
        window.location.href='../HTML/userRegister.html';
        </script>";
    } else
        echo "<script>
        alert('You Registerd Sucssessfuly');
        window.location.href='../HTML/loginPage.php';
        </script>";
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $fullname = $_SESSION['user_fname'] . " " . $_SESSION['user_lname'];

    $sql = "INSERT INTO comments(comment_id, user_id, cname, comment, ctime) VALUES (DEFAULT , '$_SESSION[user_id]','$fullname', '$_GET[cmnt]', NOW())";
    //Excute
    if (!mysqli_query($con, $sql)) {
        echo "<script>
alert('Something wrong happened, please try again later.');
window.location.href='../HTML/userPage.php';
</script>";
    } else
        echo "<script>
alert('We received your comment, Thank You <3');
window.location.href='../HTML/userPage.php';
</script>";
}
