<?php
include_once "header.php";
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 carousel-img" src="image/s1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-img" src="image/s2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-img" src="image/s3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Main Content -->
    <main class="container mt-4 mb-5">

        <!-- view courses -->
        <section>
            <h2 class="text-center pt-5 pb-5">View Jobs</h2>
            <div class="row">
            <?php 
			$sql="select * from job where status=1";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result)){
			?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="image/<?php echo $row['image'];?>" class="card-img-top" alt="Item 1">
                        <div class="card-body border shadow-sm">
                            <h5 class="card-title"><?php echo $row['title'];?></h5>
                            <p class="card-text"><td><?php echo mb_strimwidth($row['description'], 0, 120, '...');?></td></p>
                            <a href="job_detail.php?id=<?php echo $row['id'];?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
             <?php } ?>
                <!-- Repeat for other items -->
            </div>
        </section>
    </main>
<?php
include_once "footer.php";
?>