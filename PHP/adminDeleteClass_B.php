<?php
session_start();
include("Config.php");

echo "<script>
        var answer = window.confirm('Are you sure you want to delete this class?');
if (!answer) {
    alert('Class was not deleted.');
    window.location.href='../HTML/adminPage.php'
}
</script>";

$class = $_POST['class'];
$className = '';
$classTime = '';

$i = 0;
for ($i; $class[$i] != '/'; $i++) {
    $className = $className . $class[$i];
}
$i++;
for ($i; $i < strlen($class); $i++) {
    $classTime = $classTime . $class[$i];
}

$sql = "DELETE FROM classes WHERE name = '$className' AND time = '$classTime'";
//Excute
if (!mysqli_query($con, $sql)) {
    echo "<script>
        alert('Error, something wrong happened.');
        window.location.href='../HTML/adminPage.php';
        </script>";
} else
    echo "<script>
        alert('Class deleted successfully.');
        window.location.href='../HTML/adminPage.php';
        </script>";
        


        
