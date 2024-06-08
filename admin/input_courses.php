<?php include ("inc_header.php"); ?>
<?php
$judul      = "";
$kutipan    = "";
$level      = "";
$waktu      = "";
$isi        = "";
$error      = "";
$sukses     = "";

// Debugging connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id']) && $_GET['id'] != ""){
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    // Debugging ID
    echo "ID: " . htmlspecialchars($id) . "<br>";

    $sql1 = "SELECT * FROM courses WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
        if (mysqli_num_rows($q1) > 0) {
            $r1 = mysqli_fetch_array($q1);
            $judul = $r1['judul'];
            $kutipan = $r1['kutipan'];
            $level = $r1['level'];
            $waktu = $r1['waktu'];
            $isi = $r1['isi'];
        } else {
            $error = "Data Not Found";
        }
    } else {
        $error = "Query Failed: " . mysqli_error($koneksi);
    }
} else {
    $id = "";
}

if (isset($_POST['simpan'])){
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $kutipan = mysqli_real_escape_string($koneksi, $_POST['kutipan']);
    $level = mysqli_real_escape_string($koneksi, $_POST['level']);
    $waktu = mysqli_real_escape_string($koneksi, $_POST['waktu']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);

    if ($judul == '' || $isi == ''){
        $error = "Silahkan Masukkan Judul dan Isi";
    }

    if (empty($error)){
        if ($id != ""){
            $sql1 = "UPDATE courses SET judul = '$judul', kutipan = '$kutipan', level = '$level', waktu = '$waktu', isi = '$isi', tgl_isi = NOW() WHERE id = '$id'";
        } else {
            $sql1 = "INSERT INTO courses (judul, kutipan, level, waktu, isi, tgl_isi) VALUES ('$judul', '$kutipan', '$level', '$waktu', '$isi', NOW())";
        }
        $q1 = mysqli_query($koneksi, $sql1);

        if ($q1){
            $sukses = "Input Data Successful";
        } else {
            $error  = "Input Data Failed: " . mysqli_error($koneksi);
        }
    }
}
?>

<h1>Courses Input Admin Page</h1>
<div class="mb-3 row">
    <a href="courses.php"><< Back to Courses Admin</a>
</div>
<?php
if ($error){
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
    <?php 
}
?>
<?php
if ($sukses){
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses; ?>
    </div>
    <?php 
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo htmlspecialchars($judul); ?>" name="judul">
        </div>
    </div>
    <div class="mb-3">
        <label for="kutipan" class="form-label">Quotes</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kutipan" value="<?php echo htmlspecialchars($kutipan); ?>" name="kutipan">
        </div>
    </div>
    <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="level" value="<?php echo htmlspecialchars($level); ?>" name="level">
        </div>
    </div>
    <div class="mb-3">
        <label for="waktu" class="form-label">Waktu</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="waktu" value="<?php echo htmlspecialchars($waktu); ?>" name="waktu">
        </div>
    </div>
    <div class="mb-3">
        <label for="isi" class="form-label">Content</label>
        <div class="col-sm-10">
            <textarea name="isi" id="summernote" class="form-control"><?php echo htmlspecialchars($isi); ?></textarea>
        </div>
    </div>
    <div class="mb-3">
        <div class="com-sm-2"></div>
        <div class="col-sm-10">
            <input type="Submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
        </div>
    </div>
</form>
<?php include ("inc_footer.php"); ?>
