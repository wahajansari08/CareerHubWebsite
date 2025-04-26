<?php
include_once "header.php";
$id=$_REQUEST['id'];
$sql="select * from job_seeker where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
            <!-- Main Content -->
              <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-edit"></i> Update Job Seeker Details</h4>
            </div>
            <div class="card-body">
                <form method="post" id="updateItemForm">
                    <div class="form-group">
                                <label for="sellerName">Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control" id="sellerName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerEmail">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control" id="sellerEmail" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerPhone">Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="tel" name="contact" value="<?php echo $row['contact'];?>" class="form-control" id="sellerPhone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" value="<?php echo $row['password'];?>" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerAddress">Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                                    </div>
                                    <textarea class="form-control" name="address" id="sellerAddress" rows="3"><?php echo $row['address'];?></textarea>
                                </div>
                            </div>
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
                </form>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$sql="update job_seeker set name='$name', email='$email', contact='$contact', password='$password', address='$address' where id='$id'";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>window.location.href='job_seeker.php'
		alert('Job Seeker updated successfully')</script>";	
	}
	else{
		echo "<script>alert('Sorry, try again later')</script>";	
			
	}
}
?>