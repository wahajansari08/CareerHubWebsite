<?php
include_once "dbc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Hub</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-white py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="index.php"><img src="image/logo.png" class="mt-2 d-none"></a>
                <form method="post" action="search.php" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary btn-lg my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Career Hub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php
					if(isset($_SESSION['job_seeker'])){
						$sql="select * from job_seeker where email='".$_SESSION['job_seeker']."'";
						$result=mysqli_query($con,$sql);
						$job_seeker=mysqli_fetch_array($result);
					?>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <?php } else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Job Seeker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employer.php">Employer</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>