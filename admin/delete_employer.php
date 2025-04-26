<?php
include_once "../dbc.php";
$id=$_REQUEST['id'];
$sql="delete from job where employer_id='$id'";
$result=mysqli_query($con,$sql);
$sql="delete from employer where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>window.location.href='employer.php'
		alert('Employer deleted successfully')</script>";	
}
else{
	echo "<script>alert('Sorry, try again later')</script>";	
			
}
?>