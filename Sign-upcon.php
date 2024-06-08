<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "coursify";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "login") {
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $password = mysqli_real_escape_string($koneksi, $_POST['password']);

        $query = "SELECT * FROM login WHERE email = '$email'";
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                // Set session atau lakukan hal lain untuk menandakan login sukses
                echo "<script>
                alert('Login Sukses');
                window.location.href = 'Member-Area.php'; 
                </script>";
            } else {
                echo "<script>
                alert('Email/Password Salah');
                window.location.href = 'index.php'; 
                </script>";
            }
        } else {
            echo "<script>
            alert('Email/Password Salah');
            window.location.href = 'index.php'; 
            </script>";
        }
    } elseif ($_POST['submit'] == "signup") {
        $username = mysqli_real_escape_string($koneksi, $_POST['username']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $password = mysqli_real_escape_string($koneksi, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>
            alert('Sign-up Sukses');
            window.location.href = 'index.php'; 
            </script>";
        } else {
            echo "<script>
            alert('Error: " . mysqli_error($koneksi) . "');
            window.location.href = 'index.php'; 
            </script>";
        }
    }
}

mysqli_close($koneksi);
?>
