<?php
include 'config.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `records` WHERE id=$id");
header('location:records.php');
exit();
?>