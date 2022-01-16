<?php
session_start();
include("Config.php");

$sql = "INSERT INTO admins(id,fname,lname,title,
          address,gender,age,email, password) VALUES (DEFAULT ,'$_POST[fname]','$_POST[lname]', '$_POST[title]',
          '$_POST[address]','$_POST[gender]','$_POST[age]','$_POST[email]', '$_POST[password]')";
//Excute
if (!mysqli_query($con, $sql)) {
    echo "<script>
        alert('Please check entered data.');
        window.location.href='../HTML/loginPage.php';
        </script>";
} else
    echo "<script>
        alert('You Registerd Sucssessfuly.');
        window.location.href='../HTML/loginPage.php';
        </script>";
