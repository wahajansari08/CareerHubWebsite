<?php
include_once "header.php";
?>
 <div class="container mt-5 seller-profile">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card seller-card">
                    <div class="card-body text-center">
                        <img src="image/user.png" alt="Seller Profile Picture" class="img-fluid rounded-circle mb-3">
                        <h4 class="card-title"><?php echo $job_seeker['name'];?></h4>
                        <p class="card-text"><?php echo $job_seeker['email'];?></p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-md-9">
                <div class="card seller-card">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0">Profile Details</h4>
                    </div>
                    <div class="card-body">
                        <!-- Profile Form -->
                        <form method="post" id="profileForm">
                            <div class="form-group">
                                <label for="sellerName">Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="name" value="<?php echo $job_seeker['name'];?>" class="form-control" id="sellerName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerEmail">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" value="<?php echo $job_seeker['email'];?>" class="form-control" id="sellerEmail" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerPhone">Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="tel" name="contact" value="<?php echo $job_seeker['contact'];?>" class="form-control" id="sellerPhone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" value="<?php echo $job_seeker['password'];?>" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerAddress">Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                                    </div>
                                    <textarea class="form-control" name="address" rows="3"><?php echo $job_seeker['address'];?></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for editing profile -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="editProfileForm">
                        <div class="form-group">
                            <label for="editSellerName">Name</label>
                            <input type="text" name="name" value="<?php echo $job_seeker['name'];?>" class="form-control" id="editSellerName">
                        </div>
                        <div class="form-group">
                            <label for="editSellerEmail">Email</label>
                            <input type="email" name="email" value="<?php echo $job_seeker['email'];?>" class="form-control" id="editSellerEmail">
                        </div>
                        <div class="form-group">
                            <label for="editSellerPhone">Phone Number</label>
                            <input type="text" name="contact" value="<?php echo $job_seeker['contact'];?>" class="form-control" id="editSellerPhone">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" value="<?php echo $job_seeker['password'];?>" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="editSellerAddress">Address</label>
                            <textarea name="address" class="form-control" id="editSellerAddress" rows="3"><?php echo $job_seeker['address'];?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include_once "footer.php";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$_SESSION['job_seeker']=$email;
	$sql="update job_seeker set name='$name', email='$email', contact='$contact', password='$password', address='$address' where id='".$job_seeker['id']."'";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>window.location.href='profile.php'
		alert('Profile updated successfully')</script>";	
	}
	else{
		echo "<script>alert('Sorry, try again later')</script>";	
		
	}
}
?>