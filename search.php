<?php
include_once "header.php";
?>
    <!-- Main Content -->
    <main class="container mt-4 mb-5">

        <!-- view courses -->
        <section>
            <h2 class="text-center pt-5 pb-5">Search Result</h2>
            <div class="row">
            <?php 
			$search=$_POST['search'];
			$sql="select * from job where (title LIKE '%$search%' OR company LIKE '%$search%' OR location LIKE '%$search%' OR job_type LIKE '%$search%') AND status=1";
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