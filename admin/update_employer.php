<?php
include_once "header.php";
$id=$_REQUEST['id'];
$sql="select * from employer where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
            <!-- Main Content -->
              <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-edit"></i> Update Employer Details</h4>
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
                                <label>Introduction</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                    </div>
                                    <input type="text" name="short_intro" value="<?php echo $row['short_intro'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerEmail">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerPhone">Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="tel" name="contact" value="<?php echo $row['contact'];?>" class="form-control">
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
                                <label for="dob">Dob</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" name="dob" value="<?php echo $row['dob'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    </div>
                                    <input type="file" name="img" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sellerAddress">Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                                    </div>
                                    <textarea class="form-control" name="address" rows="3"><?php echo $row['address'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="About">About</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                                    </div>
                                    <textarea class="form-control" name="about" rows="3"><?php echo $row['about'];?></textarea>
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
	$short_intro=$_POST['short_intro'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];	$about=$_POST['about'];
	if(!empty($_FILES['img']['name'])){
		move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$_FILES['img']['name']);
		$img=$_FILES['img']['name'];
	}
	else{
		$img=$row['image'];
	}
	$sql="update employer set name='$name', short_intro='$short_intro', email='$email', contact='$contact', password='$password', dob='$dob', address='$address', about='$about', image='$img' where id='$id'";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>window.location.href='employer.php'
		alert('Employer updated successfully')</script>";	
	}
	else{
		echo "<script>alert('Sorry, try again later')</script>";	
			
	}
}
?>