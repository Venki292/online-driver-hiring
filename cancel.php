<?php
include("dbconfig.php");
extract($_REQUEST);
$reg_id=$_GET['reg_id'];
$cid=mysqli_connect(server,user,password,database) or die("connection error");
$result = mysqli_query($cid, "UPDATE `driver_register` SET `status`='Cancelled' WHERE reg_id = $reg_id");
header("location:admin_show.php");
?>