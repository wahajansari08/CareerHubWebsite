<?php
include_once "header.php";
?>
            <!-- Main Content -->
              <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-plus"></i> Add Job</h4>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" id="updateItemForm">
                    <div class="form-group">
                        <label for="itemName">Job Title</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            </div>
                            <input type="text" name="title" class="form-control" placeholder="Enter job title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemName">Company Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                            <input type="text" name="company" class="form-control" placeholder="Enter company name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemName">Location</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                            </div>
                            <input type="text" name="location" class="form-control" placeholder="Enter location" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription">Job Requirements</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                            </div>
                            <textarea class="form-control" name="job_requirements" rows="3" placeholder="Enter job requirements" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemName">Salary Range</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                            </div>
                            <input type="text" name="salary_range" class="form-control" placeholder="Enter salary range" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemCategory">Job Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-clipboard-list"></i></span>
                            </div>
                            <select name="job_type" class="form-control" id="itemCategory" required>
                                <option>Select Job Type</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Contract">Contract</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemPrice">Application Deadline</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="date" name="deadline" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription">Description</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                            </div>
                            <textarea class="form-control" name="description" id="itemDescription" rows="4" placeholder="Enter job description" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-image"></i></span>
                            </div>
                            <input type="file" name="img" class="form-control" required>
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
	$title=$_POST['title'];
	$company=$_POST['company'];
	$location=$_POST['location'];
	$job_requirements=$_POST['job_requirements'];
	$salary_range=$_POST['salary_range'];
	$job_type=$_POST['job_type'];
	$deadline=$_POST['deadline'];
	$description=$_POST['description'];
	move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$_FILES['img']['name']);
	$img=$_FILES['img']['name'];
	$sql="insert into job values('','".$employer['id']."','$title','$company','$location','$job_requirements','$salary_range','$job_type','$deadline','$description','$img','0')";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>window.location.href='job.php'
		alert('Job added successfully')</script>";	
	}
	else{
		echo "<script>alert('Sorry, try again later')</script>";	
			
	}
}
?>