<?php
session_start();
include("Config.php");

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM classes";

$data = mysqli_query($con, $sql);
$i = 2;
while ($res = mysqli_fetch_array($data)) {
    if ($i > 2 && $prev == $res['name']);
    else {
        if (isset($_POST['attr' . $res['name']])) {
            $ctime = $_POST['attr' . $res['name']];
            if ($ctime == 'cur');
            else {
                $sql = "UPDATE training SET time = '$ctime' WHERE className = '$res[name]' AND user_id = $user_id";
                //Excute
                if (!mysqli_query($con, $sql)) {
                    echo "<script>
                    alert('Error, something wrong happened.');
                    window.location.href='../PHP/userViewClass.php';
                    </script>";
                    echo mysqli_errno($con);
                }
            }
        }
    }
    $prev = $res['name'];
    $i++;
}

echo "<script>
        alert('Information updated successfully.');
        window.location.href='../PHP/userViewClass.php';
        </script>";

// echo $_POST['ctime'];
// $cname = $_POST['cname'];

// $sql = "UPDATE training SET time = '$ctime' WHERE name = '$cname' and user_id=$user_id";
// //Excute
// if (!mysqli_query($con, $sql)) {
//     echo "<script>
//         alert('Error, something wrong happened.');
//         </script>";
//     echo mysqli_errno($con);
// } else {
//     echo "<script>
//         alert('Information updated successfully.');
//         window.location.href='../PHP/userViewClass.php';
//         </script>";
// }
