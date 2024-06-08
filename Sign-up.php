
<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign-Up</title>
    <link rel="icon" href="./assets/logo.png" sizes="192x192" />
    <link rel="stylesheet" href="Sign-up.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Login Form Creation -->
    <div class="background"></div>
    <div class="container">
      <div class="item">
        <h2 class="logo"><i class="bx bxl-xing"></i>Coursify</h2>
        <div class="text-item">
          <h2>
            Welcome!<br />
            <span> To Our Online Course </span>
          </h2>
          <p>
            "Unleash Your Creativity: Register Now for an Inspiring Design
            Journey!"
          </p>
          <div class="social-icon">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="login-section">
        <div class="form-box login">
          <form action="Sign-upcon.php" method="post">
            <h2>Sign In</h2>
            <div class="input-box">
              <span class="icon"><i class="bx bxs-envelope"></i></span>
              <input type="email" name="email" required />
              <label for="">Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><i class="bx bxs-lock-alt"></i></span>
              <input type="password" name="password" required />
              <label for="">Password</label>
            </div>
            <div class="remember-password">
              <label for=""
                ><input type="checkbox" name="checkbox" />Remember Me</label
              >
              <a href="">Forget Password</a>
            </div>
            <button class="btn" type="submit" name="submit" value="login">
              Login
            </button>
            <div class="create-account">
              <p>
                Create A new Account
                <a href="#" class="register-link">Sign Up</a>
              </p>
            </div>
          </form>
        </div>
        <div class="form-box register" >
          <form action="Sign-upcon.php" method="post">
            <h2>Sign Up</h2>
            <div class="input-box">
              <span class="icon"><i class="bx bxs-user"></i></span>
              <input type="text" name="username" required />
              <label for="">Username</label>
            </div>
            <div class="input-box">
              <span class="icon"><i class="bx bxs-envelope"></i></span>
              <input type="email" name="email" required />
              <label for="">Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><i class="bx bxs-lock-alt"></i></span>
              <input type="password" name="password" required />
              <label for="">Password</label>
            </div>
            <div class="remember-password">
              <label for=""
                ><input type="checkbox" name="checkbox" />I Agree With Service
                Level Agreement</label
              >
            </div>
            <button class="btn" type="submit" name="submit" value="signup">
              Sign-up
            </button>
            <div class="create-account">
              <p>
                Already Have An Account
                <a href="#" class="login-link">Sign In</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="Sign-up.js"></script>
  </body>
</html>


