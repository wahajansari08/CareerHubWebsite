<?php
include_once "../dbc.php";
$id=$_REQUEST['id'];
$sql="delete from job_seeker where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>window.location.href='job_seeker.php'
		alert('Job seeker deleted successfully')</script>";	
}
else{
	echo "<script>alert('Sorry, try again later')</script>";	
			
}
?>