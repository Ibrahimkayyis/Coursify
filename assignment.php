<?php include("inc_header_assgn.php") ?>
<?php

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "coursify");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$nama = "";
$file_name = "";
$deskripsi = "";

$error = "";
$sukses = "";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    if ($nama == '' || $deskripsi == '') {
        $error = "Silahkan Masukkan nama dan deskripsi tugas";
    }

    if (isset($_FILES['file']) && $_FILES['file']['name']) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];

        $detail_file = pathinfo($file_name);
        $file_extension = $detail_file['extension'];
        $allowed_extensions = array("jpg", "jpeg", "png", "rar", "pdf", "doc", "docx");

        if (!in_array($file_extension, $allowed_extensions)) {
            $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png, rar, pdf, doc, dan docx";
        } else {
            $directory = "uploads";
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true); // Membuat direktori jika belum ada
            }
            $file_name = "assignment_" . time() . "_" . $file_name;
            if (!move_uploaded_file($file_tmp, $directory . "/" . $file_name)) {
                $error = "Upload file gagal";
            }
        }
    } else {
        $file_name = ""; // Jika tidak ada file diupload
    }

    if (empty($error)) {
        $sql1 = "INSERT INTO assignment (nama, file_name, deskripsi) VALUES ('$nama', '$file_name', '$deskripsi')";
        $q1 = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "Pengumpulan tugas berhasil";
        } else {
            $error = "Pengumpulan tugas gagal";
        }
    }
}
?>

<div class="container mt-5 mb-5">
    <h1 class="text-center">Kumpulkan Tugas</h1>
    <div class="mb-3 row">
        <a href="Member-area.php"><< Kembali ke Member Area </a>
    </div>
    <?php if ($error) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
        </div>
    <?php } ?>
    <?php if ($sukses) { ?>
        <div class="alert alert-primary" role="alert">
            <?php echo $sukses ?>
        </div>
    <?php } ?>

    <div class="d-flex justify-content-center align-items-center">
        <form action="" method="post" enctype="multipart/form-data" style="width: 50%; margin-top: 20px;">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
                </div>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File Tugas</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="file" name="file">
                    <small class="form-text text-muted">Ekstensi yang diperbolehkan: jpg, jpeg, png, rar, pdf, doc, docx</small>
                </div>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Tugas</label>
                <div class="col-sm-10">
                    <textarea name="deskripsi" id="summernote" class="form-control"><?php echo $deskripsi ?></textarea>
                </div>
            </div>
            <div class="mb-3">
                <div class="com-sm-2"></div>
                <div class="col-sm-10">
                    <input type="submit" name="simpan" value="Kumpulkan Tugas" class="btn btn-primary"/>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include("inc_footer_assgn.php") ?>
