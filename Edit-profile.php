
<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");

$error = "";
$sukses = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $fullName = mysqli_real_escape_string($koneksi, $_POST['fullName']);
    $eMail = mysqli_real_escape_string($koneksi, $_POST['eMail']);
    $phone = mysqli_real_escape_string($koneksi, $_POST['phone']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    // Validasi data
    if ($fullName == '' || $eMail == '' || $phone == '' || $password == '') {
        $error = "Silahkan isi semua data!";
    } else {
        // Update data di database
        $sql = "UPDATE Profile SET username='$fullName', email='$eMail', phone_number='$phone', password='$password' WHERE id=(SELECT id FROM (SELECT id FROM Profile ORDER BY id DESC LIMIT 1) AS temp)";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            $sukses = "Update data berhasil!";
        } else {
            $error = "Update data gagal: " . mysqli_error($koneksi);
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>account setting or edit profile - Bootdey.com</title>
    <link rel="icon" href="./assets/logo.png" sizes="192x192" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="./css/Edit-profile.css" rel="stylesheet" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="hero">
      <nav>
        <img
          src="./assets/Screenshot 2024-03-16 161331.jpg.png"
          alt=""
          class="logo"
        />
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="./Member-Area.php">Member Area</a></li>
          <li><a href="./Diskusi.php">Forum Diskusi</a></li>
        </ul>
        <img
          src="./assets/user.png"
          alt=""
          class="user-pic"
          onclick="toggleMenu()"
        />
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="./assets/user.png" alt="" />
              <h4><?php echo ambil_username_terbaru(); ?></h4>
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

      <div class="container">
        <div class="row gutters">
          <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
              <div class="card-body">
                <div class="account-settings">
                  <div class="user-profile">
                    <div class="user-avatar">
                      <img src="./assets/user.png" alt="User Avatar" />
                    </div>
                    <h5 class="user-name"><?php echo ambil_username_terbaru(); ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
              <div class="card-body">
                <form action="Edit-profile.php" method="post">
                  <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <h6 class="mb-2">Personal Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="fullName"
                          name="fullName"
                          placeholder="Enter full name"
                          value="<?php echo ambil_username_terbaru(); ?>"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                        <label for="eMail">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="eMail"
                          name="eMail"
                          placeholder="Enter email ID"
                          value="<?php echo ambil_email_terbaru(); ?>"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input
                          type="text"
                          class="form-control"
                          id="phone"
                          name="phone"
                          placeholder="Enter phone number"
                          value="<?php echo ambil_nomor_terbaru(); ?>"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input
                          type="password"
                          class="form-control"
                          id="password"
                          name="password"
                          placeholder="Enter password"
                          value="<?php echo ambil_password_terbaru(); ?>"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="text-right">
                        <a type="button" class="tbl-putih" href="Member-Area.php">Cancel</a>
                        <button type="submit" class="tbl-biru">Update</button>
                      </div>
                    </div>
                  </div>
                </form>
                <?php if ($error): ?>
                  <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                  </div>
                <?php endif; ?>

                <?php if ($sukses): ?>
                  <div class="alert alert-success" role="alert">
                    <?php echo $sukses; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
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


    <!-- Footer section start -->
    <?php include("inc_footer.php") ?>
    <!-- Footer section end -->

    <script>
      let subMenu = document.getElementById("subMenu");

      function toggleMenu() {
        subMenu.classList.toggle("open-menu");
      }
    </script>
    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
