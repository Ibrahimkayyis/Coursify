<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Menyambungkan file CSS -->
    <link rel="stylesheet" href="css/inc_footer.css">
    <link rel="icon" href="./assets/logo.png" sizes="192x192">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css">
</head>
<body>

    <!-- Konten halaman -->

    <!-- Footer section start -->
    <footer class="footer">
        <div class="footer__row">
            <div class="footer__col">
                <img src="./assets/—Pngtree—letter c logo design_4060951.png" alt="" class="footer__logo">
                <p> Temukan pengalaman belajar UI/UX yang menyenangkan dan interaktif hanya di Coursify. Dengan kurikulum yang up-to-date dan pengajar profesional, kami siap membantumu menjadi desainer UI/UX handal. Jangan lewatkan kesempatan untuk berkolaborasi dengan komunitas kreatif dan inovatif kami.
                <br> Daftar sekarang dan mulailah perjalananmu menuju karir impian di dunia desain! </p>
            </div>
            <div class="footer__col">
                <h3> <?php echo ambil_isi_contact('1', 'judul')?> <div class="footer__underline"><span></span></div></h3>
                <?php echo ambil_isi_contact('1', 'isi') ?>
                <p class="footer__email-id">Coursify@gmail.com</p>
                <h4>+6281334885528</h4>
            </div>
            <div class="footer__col">
                <h3> <?php echo ambil_isi_contact('2', 'judul')?> <div class="footer__underline"><span></span></div></h3>
                <ul>
                    <li><a href="./index.php"><?php echo ambil_isi_contact('2', 'isi') ?></a></li>
                    <li><a href="./Courses.php"><?php echo ambil_isi_contact('4', 'isi') ?></a></li>
                    <li><a href="./Tutors.php"><?php echo ambil_isi_contact('5', 'isi') ?></a></li>
                    <li><a href="./Sign-up.php"><?php echo ambil_isi_contact('6', 'isi') ?></a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h3><?php echo ambil_isi_contact('3', 'judul')?><div class="footer__underline"><span></span></div></h3>
                <form class="footer__form">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="footer__social-icons">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
        </div>
        <hr class="footer__hr">
        <p class="footer__copyright">Coursify &copy; 2024. - All Rights Reserved.</p>
    </footer>
    <!-- Footer section end -->

</body>
</html>
