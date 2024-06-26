<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main-course2</title>
    <link rel="icon" href="./assets/logo.png" sizes="192x192" />
    <link rel="stylesheet" href="./css/Main-course2.css" />
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
            src="./videos/Intro Beginner + Exercise.mp4"
            controls
            autoplay
          ></video>
          <h3 class="title">Intro Beginner + Exercise</h3>
        </section>

        <section class="video-playlist">
          <h3 class="title">
            NEW Figma 2024: Getting started the Beginner to Pro Class
          </h3>
          <p>9 lessons &nbsp; . &nbsp; 50m 48s</p>
          <div class="videos"></div>
        </section>
      </main>
      <script src="./js/Main-course2.js"></script>
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
              Kursus ini adalah pengenalan komprehensif ke Figma dari
              fitur-fitur dasar Figma hingga fitur-fitur tingkat lanjut. Singkat
              dan terfokus, memberikan Anda semua yang perlu Anda ketahui untuk
              menangani desain apa pun.<br />
              <br />
              Kita akan mulai dari awal dengan membuat akun Figma dan
              membiasakan diri dengan struktur file-nya. Kemudian, kita akan
              membahas dasar-dasar Figma, seperti mengatur bingkai dan
              menyusunnya, menambahkan bentuk, teks, warna, dan kisi-kisi, serta
              membuat desain UI yang solid. Setelah Anda merasa nyaman dengan
              dasar-dasarnya, kita akan menyelami mata pelajaran yang lebih
              lanjut seperti membuat desain UI yang solid dan bekerja dengan
              komponen untuk elemen yang dapat digunakan kembali.<br />
              <br />
              Anda akan belajar cara membuat gaya dan variabel untuk
              konsistensi, membuat desain responsif dengan tata letak otomatis,
              dan menambahkan prototipe dasar untuk menghidupkan desain Anda -
              selalu mengingat kolaborasi dengan pengembangan.<br />
              <br />
              Dengan latihan langkah demi langkah serta tips dan trik yang
              berharga, Anda akan mahir menggunakan Figma dalam waktu kurang
              dari 4 jam. Aplikasi ini sangat cocok untuk pemula atau mereka
              yang baru saja beralih dari perangkat lunak desain lain seperti
              Sketch atau Adobe XD ke Figma.<br />
              <br />
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
              Jangan khawatir; kita akan membahas penanganan file secara lebih
              rinci nanti. Anda bisa mengunduh file kapan saja, tetapi pastikan
              Anda melakukannya! Tidak ada yang lebih baik daripada mencoba
              semua yang saya tunjukkan untuk Anda sendiri! <br /><br />
              Jika Anda mengklik tombol unduh, file tersebut akan langsung
              terbuka di akun Figma Anda. File tersebut mungkin akan terbuka di
              browser, tergantung pada pengaturan Anda, tetapi file tersebut
              akan disimpan di DRAFTS Anda, dan Anda dapat memindahkannya ke tim
              atau proyek lain dari sana. Cara lainnya, cukup klik tanda panah
              kecil di sebelah nama file di browser, dan Anda juga bisa
              mengirimkannya ke tim atau proyek lain. Selamat menikmati!
              <br /><br />
            </p>
            <button class="button">
              <a href="https://www.moonlearning.io/downloads-figma-beginner"
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
