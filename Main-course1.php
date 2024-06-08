<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main-course1</title>
    <link rel="icon" href="./assets/logo.png" sizes="192x192" />
    <link rel="stylesheet" href="./css/Main-course1.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="hero">
      <!-- NavBar Section Start -->
      <nav>
        <img
          src="./assets/Screenshot 2024-03-16 161331.jpg.png"
          alt=""
          class="logo"
        />
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="./Member-Area.php">Member Area</a></li>
        </ul>
        <img
          src="https://i.pinimg.com/564x/eb/d0/4a/ebd04a9f55c88e461b78728241667dbc.jpg"
          alt=""
          class="user-pic"
          onclick="toggleMenu()"
        />

        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img
                src="https://i.pinimg.com/564x/eb/d0/4a/ebd04a9f55c88e461b78728241667dbc.jpg"
                alt=""
              />
              <h4 id="username">Freyana Shifa</h4>
            </div>
            <hr />

            <a href="#" class="sub-menu-link">
              <img src="./assets/profile.png" alt="" />
              <p>Edit Profile</p>
              <span>></span>
            </a>

            <a href="#" class="sub-menu-link">
              <img src="./assets/setting.png" alt="" />
              <p>Settings</p>
              <span>></span>
            </a>

            <a href="#" class="sub-menu-link">
              <img src="./assets/logout.png" alt="" />
              <p>Log-Out</p>
              <span>></span>
            </a>
          </div>
        </div>
      </nav>

      <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
          subMenu.classList.toggle("open-menu");
        }
      </script>
      <!-- NavBar Section End -->

      <!-- Video Playlist Section Start -->
      <main class="container">
        <section class="main-video">
          <video
            src="./videos/Introduction to figma essentials training coursets.mp4"
            controls
            autoplay
          ></video>
          <h3 class="title">
            Introduction to figma essentials training coursets.
          </h3>
        </section>

        <section class="video-playlist">
          <h3 class="title">Figma UI/UX Design Essentials</h3>
          <p>9 lessons &nbsp; . &nbsp; 50m 48s</p>
          <div class="videos"></div>
        </section>
      </main>
      <script src="./js/Main-course1.js"></script>
      <!-- Video Playlist Section End -->

      <!-- Tab-Layout Section Start -->
      <div class="hero2">
        <div class="btn-box">
          <button id="btn1" onclick="openAbout()">
            <i class="fa-solid fa-circle-info"></i>About
          </button>
          <button id="btn2" onclick="openProject()">
            <i class="fa-solid fa-list-check"></i>Project & Resources
          </button>
        </div>

        <div id="content1" class="content">
          <div class="content-left">
            <h1>About This Class</h1>
            <p>
              Hai, nama saya Dan Scott & selamat datang di Figma Essentials.
              Bersama-sama - Anda dan saya - akan mempelajari semua yang Anda
              butuhkan untuk mulai bekerja sebagai Desainer UX menggunakan
              Figma. <br />
              <br />
              kita akan menggunakan alat desain UI UX ini untuk membuat
              Antarmuka Pengguna yang indah dan prototipe yang menarik. Yang
              paling penting... kami akan membahas ekspektasi klien terhadap
              Anda sebagai desainer UX baru. <br />
              <br />
              Kursus ini ditujukan untuk orang-orang yang baru mengenal desain,
              yang baru mengenal desain Pengalaman Pengguna. Bahkan jika Anda
              tidak sepenuhnya yakin apa arti UX, jangan khawatir. Kita akan
              mulai dari awal dan membahasnya selangkah demi selangkah. <br />
              <br />
              Pertama, kami akan menjelaskan penjelasan singkat & cara bekerja
              dengan persona UX. <br />
              <br />
              Kemudian Anda akan belajar cara membuat gambar rangka sederhana.
              <br />
              <br />
              Dari sana kita akan melihat bagaimana cara mengimplementasikan
              warna & gambar dengan benar dalam desain Anda. <br />
              <br />
              Kamu akan belajar apa yang boleh dan tidak boleh dilakukan dalam
              memilih font untuk aplikasi web dan mobile. <br />
              <br />
              Kamu akan belajar cara membuat ikon, tombol, dan komponen UI
              lainnya. <br />
              <br />
              Kamu akan belajar beberapa istilah yang cukup menakutkan seperti
              Komponen, Batasan dan Varian Multi Dimensi. Semuanya sangat mudah
              dimengerti setelah kamu tahu caranya. <br />
              Kita juga akan membuat hidup kita lebih mudah dengan menggunakan
              kit & plugin UI gratis untuk Figma yang akan mempercepat alur
              kerja kita secara dramatis! <br />
              Kita akan membuat Style Guide sederhana yang siap untuk diserahkan
              kepada klien. <br />
              <br />
              Anda akan memahami cara membuat interaksi mikro sederhana &
              lanjutan, transisi halaman & animasi <br />
              <br />
              Baiklah - saatnya untuk meng-upgrade diri Anda sendiri dan beralih
              dari Figma Zero ke Figma Hero.
            </p>
          </div>
          <div class="content-right">
            <img src="" alt="" />
          </div>
        </div>
        <div id="content2" class="content">
          <div class="content-left">
            <h1>Project And Resources</h1>
            <p>
              Sebelum kursus ini berakhir, Anda akan membuat prototipe yang
              sepenuhnya interaktif <br /><br />
              Anda akan menyelesaikan proyek sepenuhnya - berkolaborasi dengan
              anggota tim lain dan mengekspor file yang tepat yang siap untuk
              diserahkan kepada pengembang atau insinyur perangkat lunak Anda.
              <br /><br />
              kita akan fokus pada perangkat lunak Figma tetapi saya akan
              memastikan untuk menjelaskan teknik & istilah yang digunakan dalam
              UX dan bagaimana proyek dunia nyata dijalankan. Anda akan
              mengembangkan pemahaman yang baik tentang industri ini dan akan
              dapat mengelola proyek UX Anda sendiri. <br /><br />
              Saya akan memberikan tugas selama kursus yang akan membantu
              mengembangkan keterampilan Anda dan memungkinkan Anda untuk
              membuat sesuatu yang istimewa dan unik untuk portofolio Anda
              sendiri. <br /><br />
            </p>
            <button class="button">
              <a href="https://bringyourownlaptop.com/files"
                >Download The Exercise File Here</a
              >
            </button>
          </div>
          <div class="content-right">
            <img src="" alt="" />
          </div>
        </div>
      </div>
      <!-- Tab-Layout Section End -->

      <!-- Footer section start -->
    <?php include("inc_footer.php") ?>
    <!-- Footer section end -->
    </div>
    <script>
      var content1 = document.getElementById("content1");
      var content2 = document.getElementById("content2");
      var btn1 = document.getElementById("btn1");
      var btn2 = document.getElementById("btn2");

      function openAbout() {
        content1.style.transform = "translateX(0)";
        content2.style.transform = "translateX(100%)";
        btn1.style.color = "#00ADB5";
        btn2.style.color = "#fff";
        content1.style.transitionDelay = "0.3s";
        content2.style.transitionDelay = "0s";
      }

      function openProject() {
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(0)";
        btn2.style.color = "#00ADB5";
        btn1.style.color = "#fff";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0.3s";
      }
    </script>
  </body>
</html>

<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>