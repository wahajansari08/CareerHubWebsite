<?php
include_once "../dbc.php";
$id=$_REQUEST['id'];
$sql="delete from job where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>window.location.href='job.php'
		alert('Job deleted successfully')</script>";	
}
else{
	echo "<script>alert('Sorry, try again later')</script>";	
			
}
?>