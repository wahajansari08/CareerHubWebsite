<?php
include_once "header.php";
?>
            <!-- Main Content -->
             <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Manage Jobs</h4>
                    </div>
                    <div class="card-body">
                    <a href="add_job.php" class="btn btn-success mb-2 float-right"><i class="fas fa-plus"></i> Add</a>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Job Type</th>
                                    <th scope="col">Last Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							$sql="select * from job where employer_id='".$employer['id']."'";
							$result=mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($result)){
							?>
                                <tr>
                                    <td><img src="../image/<?php echo $row['image'];?>" alt="Item Image" height="80" class="item-image"></td>
                                    <td><?php echo $row['title'];?></td>
                                    <td><?php echo $row['company'];?></td>
                                    <td><?php echo $row['salary_range'];?></td>
                                    <td><?php echo $row['job_type'];?></td>
                                    <td><?php echo date('d M Y',strtotime($row['deadline']));?></td>
                                    <td><?php 
										if($row['status']==0){
											echo "Pending";
										}
										else if($row['status']==1){
											echo "Approved";
										}
										else{
											echo "Rejected";
										}
									
									?></td>
                                    <td>
                                        <a href="update_job.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm mt-2"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="delete_job.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm mt-2"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                             <?php } ?>
                                <!-- Repeat similar <tr> blocks for other items -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>