<?php
include_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Hub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin-style.css"> <!-- Link to your custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar">
            <div class="sidebar-heading">Career Hub</div>
            <div class="list-group list-group-flush">
                <a href="home.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="job.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-briefcase"></i> Manage Jobs</a>
                <a href="profile.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-id-badge"></i> Manage Profile</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
<!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>
                <a class="navbar-brand" href="home.php">Employer Dashboard</a>
            </nav>