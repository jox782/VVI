<?php
include('connection.php');
session_start();
$type = $_GET['type'];
$id = $_GET['id'];
$status = $_GET['sta'];
$q = "UPDATE `$type` SET `status`= '$status' WHERE id = $id";
mysqli_query($con,$q);
header('Location: adminOrders.php?type='.$type);
?>