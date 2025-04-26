<!doctype html>
<html>
<head>
<title>Career Hub</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="login-card">
            <div class="card-body">
                <h2 class="text-center mb-4">Admin Login</h2>
                <form method="post" id="loginForm">
                    <div class="form-group">
                        <label for="adminEmail">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" id="adminEmail" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adminPassword">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" id="adminPassword" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	include_once "../dbc.php";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="select * from admin where email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row){
		$_SESSION['admin']=$email;
		header('location:home.php');
	}
	else{
		echo "<script>alert('Invalid email or password')</script>";	
		
	}
}
?>