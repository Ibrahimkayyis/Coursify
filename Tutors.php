<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Our Team Section</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/Tutors.css" />

    <link rel="icon" href="./assets/logo.png" sizes="192x192">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href=".//fontawesome-free-6.5.1-web/css/all.css">
</head>
<body>
    <nav>
      <div class="wrapper">
        <div class="logo">
          <a href="./HOMEPAGE.HTML"><i class='bx bxl-xing'></i>Coursify</a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./Courses.php">Courses</a></li>
            <li><a href="./Tutors.php">Mentors</a></li>
            <li><a href="./Sign-up.php" class="tbl-putih">Masuk</a></li>
            <li><a href="./Sign-up.php" class="tbl-biru">Daftar</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <div class="row">
        <h1>Our Team & Mentors</h1>
      </div>
      <div class="row">

      <?php
      $sql1 = "SELECT * FROM tutors ORDER BY id DESC";
      $q1 = mysqli_query($koneksi, $sql1);

      if ($q1) {
          while ($r1 = mysqli_fetch_array($q1)) {
              $tutor_image = tutors_foto($r1['id']); // Get the correct image path
              ?>
              <div class="column">
                <div class="card">
                  <div class="img-container">
                    <img src="<?php echo url_dasar()."/gambar/".tutors_foto($r1['id']); ?>" alt="<?php echo $r1['nama']; ?>" />
                  </div>
                  <h3><?php echo $r1['nama']; ?></h3>
                  <p><?php echo $r1['isi']; ?></p>
                  <div class="icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                  </div>
                </div>
              </div>
              <?php
          }
      } else {
          echo "<p>No tutors found.</p>";
      }
      ?>

      </div>
    </section>

    <!-- Footer section start -->
    <?php include("inc_footer.php") ?>
    <!-- Footer section end -->
</body>
</html>
