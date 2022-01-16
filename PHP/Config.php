<?php

$Host = "localhost";
$Username = "root";
$Password = "";
$DB_Name = "active";


$con = mysqli_connect($Host, $Username, $Password, $DB_Name) or die("couldn't Connect");

mysqli_query($con, "DELETE FROM training WHERE endDate < NOW()");
