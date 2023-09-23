
<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM `order` WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: dashboard.php");

?>