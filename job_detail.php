<?php
include_once "header.php";
$id=$_REQUEST['id'];
$sql="select job.*, employer.name, employer.image as employer_image, short_intro, about, email, contact, dob, address, gender from job INNER JOIN employer on employer.id=job.employer_id where job.id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<!-- Course Header Section -->
    <section class="course-header text-white text-center">
        <div class="container">
            <h1 class="course-title"><?php echo $row['title'];?></h1>
            <p class="course-category">Company: <?php echo $row['company'];?></p>
            <p class="course-duration">Location: <?php echo $row['location'];?> | Salary Range: <?php echo $row['salary_range'];?></p>
            <p class="course-duration">Deadline: <?php echo date('d M Y',strtotime($row['deadline']));?></p>
        </div>
    </section>
    <!-- Course Overview Section -->
    <section class="course-overview">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Job Overview</h2>
                    <p><?php echo $row['description'];?></p>
                    <h3>Job Requirements:</h3>
                    <?php echo $row['job_requirements'];?>
                    <a href=""><button class="btn btn-primary btn-enroll mt-4">Apply Now</button></a>
                </div>
                <div class="col-md-4">
                    <!-- Instructor Profile Section -->
                    <div class="instructor-profile text-center">
                        <img src="image/<?php echo $row['employer_image'];?>" alt="Instructor" class="instructor-img rounded-circle">
                        <h3><?php echo $row['name'];?></h3>
                        <p class="instructor-title"><?php echo $row['short_intro'];?></p>
                        <p class="instructor-bio"><?php echo $row['about'];?></p>
                        <button class="btn btn-outline-primary btn-view-profile" data-toggle="modal" data-target="#instructorProfileModal">View Full Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="instructorProfileModal" tabindex="-1" aria-labelledby="instructorProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="instructorProfileModalLabel">Employer Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                    <!-- Profile Image -->
                    <div class="col-md-4 text-center">
                        <img src="image/<?php echo $row['image'];?>" alt="Instructor Image" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px;">
                    </div>
                    <!-- Profile Details -->
                    <div class="col-md-8">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-user"></i> <strong>Name:</strong> <?php echo $row['name'];?></li>
                            <li><i class="fas fa-info-circle"></i> <strong>Short Intro:</strong> <?php echo $row['short_intro'];?></li>
                            <li><i class="fas fa-envelope"></i> <strong>Email:</strong> <?php echo $row['email'];?></li>
                            <li><i class="fas fa-phone"></i> <strong>Contact:</strong> <?php echo $row['contact'];?></li>
                            <li><i class="fas fa-calendar-alt"></i> <strong>Date of Birth:</strong> <?php echo date('d M Y',strtotime($row['dob']));?></li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> <?php echo $row['address'];?></li>
                            <li><i class="fas fa-venus-mars"></i> <strong>Gender:</strong> <?php echo $row['gender'];?></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <!-- About Section -->
                <h6><i class="fas fa-user-edit"></i> About</h6>
                <p>
                    <?php echo $row['about'];?>
                </p>
            </div>
    </div>
  </div>
</div>

 
<?php
include_once "footer.php";
?>