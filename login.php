<?php
include_once "header.php";
?>
<div class="login-container">
        <div class="login-card">
            <h2 class="text-center mb-4">Job Seeker Login</h2>
            <form method="post">
                <div class="form-group position-relative">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" name="email" class="form-control input-field" placeholder="Email" required>
                </div>
                <div class="form-group position-relative">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" name="password" class="form-control input-field" placeholder="Password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center mt-3">
                Don't have an account? <a href="register.php">Register</a>
            </div>
        </div>
    </div>
<?php
include_once "footer.php";
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="select * from job_seeker where email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row){
		$_SESSION['job_seeker']=$email;
		echo "<script>window.location.href='index.php';</script>";
	}
	else{
		echo "<script>alert('Invalid email or password')</script>";		
	}
}
?>