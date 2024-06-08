<?php include("inc_header.php") ?>
<?php
$nama = "";
$foto = "";
$isi = "";
$foto_name = "";

$error = "";
$sukses = "";

if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM partners WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $nama = $r1['nama'];
        $isi = $r1['isi'];
        $foto = $r1['foto'];
    } else {
        $error = "Data Not Found";
    }
} else {
    $id = "";
}

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $isi = $_POST['isi'];

    if ($nama == '' || $isi == '') {
        $error = "Silahkan Masukkan nama dan Isi";
    }

    if (isset($_FILES['foto']) && $_FILES['foto']['name']) {
        $foto_name = $_FILES['foto']['name'];
        $foto_file = $_FILES['foto']['tmp_name'];

        $detail_file = pathinfo($foto_name);
        $foto_ekstensi = $detail_file['extension'];
        $ekstensi_yang_diperbolehkan = array("jpg", "jpeg", "png", "gif");

        if (!in_array($foto_ekstensi, $ekstensi_yang_diperbolehkan)) {
            $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png, dan gif";
        } else {
            $direktori = "../gambar";
            $foto_name = "partners_" . time() . "_" . $foto_name;
            if (!move_uploaded_file($foto_file, $direktori . "/" . $foto_name)) {
                $error = "Upload file gagal";
            }
        }
    } else {
        $foto_name = ""; // Jika tidak ada file diupload
    }

    if (empty($error)) {
        if ($id != "") {
            if ($foto_name) {
                $sql1 = "UPDATE partners SET nama = '$nama', foto = '$foto_name', isi = '$isi', tgl_isi = NOW() WHERE id = '$id'";
                if ($foto) {
                    @unlink($direktori . "/" . $foto); //delete data lama jika ada foto baru
                }
                $foto = $foto_name;
            } else {
                $sql1 = "UPDATE partners SET nama = '$nama', isi = '$isi', tgl_isi = NOW() WHERE id = '$id'";
            }
        } else {
            $sql1 = "INSERT INTO partners (nama, foto, isi, tgl_isi) VALUES ('$nama', '$foto_name', '$isi', NOW())";
        }
        $q1 = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "Input Data Successful";
        } else {
            $error = "Input Data Failed";
        }
    }
}
?>

<h1>Data Input Admin partners</h1>
<div class="mb-3 row">
    <a href="partners.php"><< Back to partners Admin</a>
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

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
        </div>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Picture</label>
        <div class="col-sm-10">
            <?php if ($foto) { ?>
                <img src='../gambar/<?php echo $foto ?>' style='max-height: 100px; max-width: 100px;' alt=''>
            <?php } ?>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
    </div>
    <div class="mb-3">
        <label for="isi" class="form-label">Content</label>
        <div class="col-sm-10">
            <textarea name="isi" id="summernote" class="form-control"><?php echo $isi ?></textarea>
        </div>
    </div>
    <div class="mb-3">
        <div class="com-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>
