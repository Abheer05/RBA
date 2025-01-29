<?php
include "db.php";
include "fun.php";
$connect =new connect();
$db=$connect->dbconnect();
$fun=new fun($connect->dbconnect());
	
	$srno=$_GET['srno'];
	$sql="DELETE  FROM `about_images` where `srno`=$srno";
	mysqli_query($db,$sql);
	header("location:admin_about_view.php");
?>