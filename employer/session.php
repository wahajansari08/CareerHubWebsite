<?php
include_once "../dbc.php";
if(!isset($_SESSION['employer'])){
	header('location:../employer.php');
}
$sql="select * from employer where email='".$_SESSION['employer']."'";
$result=mysqli_query($con,$sql);
$employer=mysqli_fetch_array($result);
?>