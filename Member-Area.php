<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Member Area</title>
    <link rel="icon" href="./assets/logo.png" sizes="192x192" />
    <link rel="stylesheet" href="./css/Member-Area.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

</head>
<body>
    <!-- NavBar Section Start -->
    <div class="hero">
        <img src="./assets/logo.svg" style="filter: invert(46%) sepia(95%) saturate(1242%) hue-rotate(158deg) brightness(91%) contrast(101%);" alt="" />
        <nav>
            <img src="./assets/Screenshot 2024-03-16 161331.jpg.png" alt="" class="logo" />
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./Member-Area.php">Member Area</a></li>
                <li><a href="./Diskusi.php">Forum Diskusi</a></li>
            </ul>
            <img src="./assets/user.png" alt="" class="user-pic" onclick="toggleMenu()" />

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="./assets/user.png" alt="" />
                        <h4><?php echo ambil_username_terbaru()?></h4>
                    </div>
                    <hr />

                    <a href="Edit-profile.php" class="sub-menu-link">
                        <img src="./assets/profile.png" alt="" />
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>

                    <a href="#" class="sub-menu-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <img src="./assets/logout.png" alt="" />
                        <p>Log-Out</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- NavBar Section End -->

        <!-- Poster section Start -->
        <div class="wrapper">
            <img src="./assets/banner-ramadan-paket-1.jpg" alt="" />
        </div>
        <!-- Poster section End -->

        <!-- Profile Section Start -->
<div class="wrapper2">
    <div class="user-card">
        <div class="user-card-img">
            <img src="./assets/user.png" alt="" />
        </div>

        <div class="user-card-info">
            <h2><?php echo ambil_username_terbaru()?></h2>
            <p><span>Courses: </span><?php echo hitung_jumlah_mycourses(); ?></p>
        </div>
        <div class="user-card-buttons">
            <a href="./Edit-profile.php"><button class="btn btn-primary">Edit Profile</button></a>
            <a href="assets/Certificate.jpeg" download="Certificate"><button class="btn btn-success">Download Certificate</button></a>
        </div>
    </div>
</div>
<!-- Profile Section end -->


        <!-- MyCourses Section Start -->
        <div class="wrapper3">
            <ul class="accordion">
                <h2>MyCourses</h2>
               <?php
$courses = ambil_semua_mycourses();
$index = 1;
foreach ($courses as $course) {
    ?>
    <li>
        <input type="radio" name="accordion" id="course-<?php echo $index; ?>" <?php echo $index === 1 ? 'checked' : ''; ?> />
        <label for="course-<?php echo $index; ?>"><?php echo $course['judul']; ?></label>
        <div class="content">
            <p>
                <?php echo $course['isi']; ?>
            </p>
            <div class="button-group">
                <!-- Tombol Learn -->
                <a href="./Main-course<?php echo $course['id']; ?>.php"><button class="btn2">Learn</button></a>
                <!-- Tombol Upload Assignment -->
                <a href="./assignment.php?course_id=<?php echo $course['id']; ?>"><button class="btn2">Upload Assignment</button></a>
                <!-- Tombol Comments -->
                <?php
                // Menentukan halaman Comments yang sesuai berdasarkan index
                $commentsPage = "";
                switch ($index) {
                    case 1:
                        $commentsPage = "comments.php";
                        break;
                    case 2:
                        $commentsPage = "comments2.php";
                        break;
                    case 3:
                        $commentsPage = "comments3.php";
                        break;
                    // Tambahkan case lain jika diperlukan
                    default:
                        $commentsPage = "comments.php"; // Default jika tidak ada case yang cocok
                        break;
                }
                ?>
                <a href="<?php echo $commentsPage; ?>"><button class="btn2">Comments</button></a>
            </div>
        </div>
    </li>
    <?php
    $index++;
}
?>

                ?>
            </ul>
        </div>
        <!-- MyCourses Section End -->

    </div>

<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content shadow-lg">
            <div class="modal-header bg-gray-200">
                <h5 class="modal-title text-xm font-weight-bold text-info uppercase" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are You Sure Want to Log Out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                    <i class="fas fa-window-close"></i> Cancel
                </button>
                <a type="button" class="btn btn-danger shadow-lg waves-effect" href="index.php">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    <!-- Footer section start -->
    <?php include("inc_footer.php") ?>
    <!-- Footer section end -->

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>
