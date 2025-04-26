<?php
include_once "header.php";
?>
            <!-- Main Content -->
             <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Manage Job Seekers</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Sr.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							$i=1;
							$sql="select * from job_seeker";
							$result=mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($result)){
							?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['contact'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><?php echo $row['address'];?></td>
                                    <td>
                                        <a href="update_job_seeker.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="delete_job_seeker.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
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