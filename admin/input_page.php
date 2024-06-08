<?php include ("inc_header.php") ?>
<?php
$judul      = "";
$kutipan    = "";
$isi        = "";
$error      = "";
$sukses     = "";

if (isset($_GET['id']) && $_GET['id'] != ""){
    $id     = $_GET['id'];

    $sql1   = "SELECT * FROM homepage WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);

    if ($r1){
        $judul      = $r1['judul'];
        $kutipan    = $r1['kutipan'];
        $isi        = $r1['isi'];
    } else {
        $error  = "Data Not Found";
    }
} else {
    $id     = "";
}

if (isset($_POST['simpan'])){
    $judul      = $_POST['judul'];
    $kutipan    = $_POST['kutipan'];
    $isi        = $_POST['isi'];

    if ($judul == '' or $isi == ''){
        $error = "Silahkan Masukkan Judul dan Isi";
    }

    if (empty($error)){
        if ($id != ""){
            $sql1   = "UPDATE homepage SET judul = '$judul', kutipan = '$kutipan', isi = '$isi', tgl_isi = NOW() WHERE id = '$id'";
        } else {
            $sql1   = "INSERT INTO homepage (judul, kutipan, isi, tgl_isi) VALUES ('$judul', '$kutipan', '$isi', NOW())";
        }
        $q1     = mysqli_query ($koneksi, $sql1);

        if ($q1){
            $sukses = "Input Data Succesfull";
        } else {
            $error  = "Input Data Failed";
        }
    }
}
?>

<h1>Data Input Admin Page</h1>
<div class="mb-3 row">
    <a href="homepage.php"><< Back to Homepage</a>
</div>
<?php
if ($error){
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
    <?php 
}
?>
<?php
if ($sukses){
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
    <?php 
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
        </div>
    </div>
    <div class="mb-3">
        <label for="kutipan" class="form-label">Quotes</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kutipan" value="<?php echo $kutipan ?>" name="kutipan">
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
            <input type="Submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
        </div>
    </div>
</form>
<?php include ("inc_footer.php") ?>
