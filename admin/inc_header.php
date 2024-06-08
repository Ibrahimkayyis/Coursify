<?php
include ("../inc/inc_koneksi.php");
include ("../inc/inc_fungsi.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link href="../css/summernote-image-list.min.css">
    <script src="../js/summernote-image-list.min.js"></script>

    <script src="https://kit.fontawesome.com/1462ec7890.js" crossorigin="anonymous"></script>

    <style>
      .image-list-content .col-lg-3 {width: 100%;}
      .image-list-content img {float: left; width: 20%}
      .image-list-content p {float: left; padding-left: 20px}
      .image-list-item {padding: 10px 0px 10px 0px}

    </style>
  </head>
  <body class = "container">
    <header>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./homepage.php">Homepage Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./courses.php">Course Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./tutors.php">Tutor Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./partners.php">Partners Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./mycourses.php">My Courses Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./assigment.php">Assigment Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Logout>></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    </header>
    <main>