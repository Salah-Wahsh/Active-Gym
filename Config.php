<?php

$Host = "us-cdbr-east-05.cleardb.net";
$Username = "bce73203446537";
$Password = "1ecc5223";
$DB_Name = "heroku_668576cf359d5f1";


$con = mysqli_connect($Host, $Username, $Password, $DB_Name) or die("couldn't Connect");

mysqli_query($con, "DELETE FROM training WHERE endDate < NOW()");
