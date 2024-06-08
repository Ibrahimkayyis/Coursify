<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Courses</title>
    <link rel="icon" href="./assets/logo.png" sizes="192x192" />
    <link rel="stylesheet" href="./css/Courses.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <div class="wrapper">
        <div class="logo">
          <a href="./Homepage.php"><i class="bx bxl-xing"></i>Coursify</a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./Courses.php">Courses</a></li>
            <li><a href="./Tutors.php">Mentors</a></li>
            <li><a href="./Sign-up.php" class="tbl-putih">Masuk</a></li>
            <li><a href="./Sign-up.php#signup-section" class="tbl-biru">Daftar</a></li>



          </ul>
        </div>
      </div>
    </nav>

    <!-- Courses section start -->
    <section id="courses">
      <div class="featured-course-container">
        <div class="featured-course-video">
          <iframe
            height="400"
            src="<?php echo ambil_kutipan_courses('2') ?>"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
        <div class="featured-course-content">
          <div class="small-heading gray">
            <span><i class="fa fa-circle yellow" id="yellow"></i></span>
            <?php echo ambil_kutipan_courses('3') ?>
          </div>
          <div class="featured-course-title">
            <h3><?php echo ambil_judul_courses('3') ?></h3>
          </div>
          <div class="featured-course-desc">
            <?php echo ambil_isi_courses('3') ?>
          </div>
          <div class="featured-course-icons-container">
            <div class="icons-row">
              <div class="icons-heading">
                <span><i class="fa fa-check-circle blue"></i></span>
                <?php echo ambil_kutipan_courses('4') ?>
              </div>
              <div class="icons-heading">
                <span><i class="fa fa-check-circle blue"></i></span>
                <?php echo ambil_kutipan_courses('5') ?>
              </div>
            </div>
            <div class="icons-row">
              <div class="icons-heading">
                <span><i class="fa fa-check-circle blue"></i></span>
                <?php echo ambil_kutipan_courses('6') ?>
              </div>
              <div class="icons-heading">
                <span><i class="fa fa-check-circle blue"></i></span>
                <?php echo ambil_kutipan_courses('7') ?>
              </div>
            </div>
          </div>
          <a href="./Sign-up.html"
            ><button class="btn btn-blue">Get Started For Free</button></a
          >
        </div>
      </div>

      <div class="dots-right">
        <img src="./assets/pngwing.com.png" alt="" height="350" width="300" />
      </div>
      <div class="more-courses-container">
        <div class="course">
          <div class="course-img">
            <img
              src="<?php echo ambil_gambar_courses ('8')?>"
              alt=""
            />
          </div>
          <div class="course-body">
            <div class="course-category"><?php echo ambil_kutipan_courses('8') ?></div>
            <div class="course-title"><?php echo ambil_judul_courses('8') ?></div>
            <div class="course-icons-row">
              <div class="course-icon-heading gray">
                <span><i class="fa fa-user gray"></i></span>
                <?php echo ambil_level_courses('8') ?>
              </div>
              <div class="course-icon-heading gray">
                <span><i class="fa fa-hourglass gray"></i></span>
                <?php echo ambil_waktu_courses('8') ?>
              </div>
            </div>
            <button class="btn btn-blue course-btn">
              Start Now <i class="fab fa-youtube"></i>
            </button>
          </div>
        </div>
        <div class="course">
          <div class="course-img">
            <img
              src="<?php echo ambil_gambar_courses ('9')?>"
              alt=""
            />
          </div>
          <div class="course-body">
            <div class="course-category"><?php echo ambil_kutipan_courses('9') ?></div>
            <div class="course-title"><?php echo ambil_judul_courses('9') ?></div>
            <div class="course-icons-row">
              <div class="course-icon-heading gray">
                <span><i class="fa fa-user gray"></i></span>
                <?php echo ambil_level_courses('9') ?>
              </div>
              <div class="course-icon-heading gray">
                <span><i class="fa fa-hourglass gray"></i></span>
                <?php echo ambil_waktu_courses('9') ?>
              </div>
            </div>
            <button class="btn btn-blue course-btn">
              Start Now <i class="fab fa-youtube"></i>
            </button>
          </div>
        </div>
        <div class="course">
          <div class="course-img">
            <img
              src="<?php echo ambil_gambar_courses ('10')?>"
              alt=""
            />
          </div>
          <div class="course-body">
            <div class="course-category"><?php echo ambil_kutipan_courses('10') ?></div>
            <div class="course-title">
              <?php echo ambil_judul_courses('10') ?>
            </div>
            <div class="course-icons-row">
              <div class="course-icon-heading gray">
                <span><i class="fa fa-user gray"></i></span>
                <?php echo ambil_level_courses('10') ?>
              </div>
              <div class="course-icon-heading gray">
                <span><i class="fa fa-hourglass gray"></i></span>
                <?php echo ambil_waktu_courses('10') ?>
              </div>
            </div>
            <button class="btn btn-blue course-btn">
              Start Now <i class="fab fa-youtube"></i>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- Courses section end -->

    <!-- Footer section start -->
    <?php include("inc_footer.php") ?>
    <!-- Footer section end -->
  </body>
</html>
