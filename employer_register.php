<?php
include_once "header.php";
?>
<div class="registration-container">
        <div class="row no-gutters">
            <!-- Registration Form -->
            <div class="col-md-6 form-container text-right m-auto">
                <div class="registration-card p-4 rounded shadow-sm">
                    <h2 class="text-center mb-4">Employer Registration</h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group position-relative">
                            <i class="fas fa-user icon"></i>
                            <input type="text" name="name" class="form-control input-field" placeholder="Full Name" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-user-edit icon"></i>
                            <input type="text" name="short_intro" class="form-control input-field" placeholder="Short Introduction" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-envelope icon"></i>
                            <input type="email" name="email" class="form-control input-field" placeholder="Email Address" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-phone icon"></i>
                            <input type="tel" name="contact" class="form-control input-field" placeholder="Contact" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" name="password" class="form-control input-field" placeholder="Password" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" name="confirm_password" class="form-control input-field" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-calendar-alt icon"></i>
                            <input type="date" name="dob" class="form-control input-field" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-map-marker-alt icon"></i>
                            <input type="text" name="address" class="form-control input-field" placeholder="Address" required>
                        </div>
                        <div class="form-group position-relative">
                            <i class="fas fa-image icon"></i>
                            <input type="file" name="img" class="form-control input-field" required>
                        </div>
                         <div class="form-group">
                        	<div class="input-group">
                            	<div class="input-group-prepend">
                                	<span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                                </div>
                              <textarea class="form-control" name="about" placeholder="About" rows="3"></textarea>
                            </div>
                         </div>
                        <div class="text-left">
                        <label>Gender</label><br>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mt-3 btn-block">Register</button>
                    </form>
                    <div class="text-center mt-3">
                       Already have an account? <a href="employer.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once "footer.php";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$short_intro=$_POST['short_intro'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$about=$_POST['about'];
	move_uploaded_file($_FILES['img']['tmp_name'],"image/".$_FILES['img']['name']);
	$img=$_FILES['img']['name'];
	if($password!=$confirm_password)
	{
		echo "<script>alert('Confirm password does not match')</script>";
	}
	else{
		$sql="select * from employer where email='$email'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
			echo "<script>alert('This email already exist please try another one')</script>";
			die();
		}
		$sql="insert into employer values('','$name','$short_intro','$email','$contact','$password','$dob','$address','$gender','$about','$img')";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "<script>window.location.href='employer.php'
			alert('Account created successfully')</script>";	
		}
		else{
			echo "<script>alert('Sorry, try again later')</script>";	
			
		}
	}
}
?>