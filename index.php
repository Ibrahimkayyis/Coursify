<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursify.com</title>
    <link rel="icon" href="./assets/logo.png" sizes="192x192">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href=".//fontawesome-free-6.5.1-web/css/all.css">

</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="./index.php"><i class='bx bxl-xing'></i>Coursify</a></div>
            <div class="menu">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="./Tutors.php">Mentors</a></li>
                    <li><a href="./Sign-up.php" class="tbl-putih">Masuk</a></li>
                    <li><a href="./Sign-up.php" class="tbl-biru">Daftar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <!-- home - section -->
        <section id="home">
            
            <img src="<?php echo ambil_gambar ('15')?>" alt="img"
            width="500" height="500">

            <div class="kolom">
                <p class="deskripsi"> <?php echo ambil_kutipan('15') ?></p>
                <h2> <?php echo ambil_judul('15') ?> </h2>
                <?php echo ambil_isi('15') ?>
                <p><a href="<?php echo buat_link_halaman ('15') ?>" class="tbl-abu">Mulai Belajar</a></p>
            </div>
        </section>

        <!-- course - section -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('16') ?></p>
                <h2><?php echo ambil_judul('16') ?></h2>
                <?php echo ambil_isi('15') ?>
                <p> <a href="./Courses.php" class="tbl-abu">Lihat Courses</a></p>
            </div>
            <img src="<?php echo ambil_gambar ('16')?>" alt="" height="450" width="450">
        </section>

        <!-- start partners - section -->

        <section id="partners" >
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our partners</p>
                    <h2>Partners</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sed labore rerum sit natus inventore.</p>
                </div>

                <div class="partner-list">

                <?php
                $sql1   = "select * from partners order by id asc";
                $q1     = mysqli_query($koneksi, $sql1);
                while($r1 = mysqli_fetch_assoc($q1)){
                    ?>
                    <div class="kartu-partner">
                        <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id']) ?>" alt="">
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>
    </div>

    <?php include("inc_footer.php") ?>
</body>
</html>