<?php include ("inc_header.php") ?>
<?php
$sukses = "";
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM tutors WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
        $sukses = "Delete Data Successful";
    }
}
?>
<h1>Admin Tutors Page</h1>
<p>
    <a href="input_tutors.php">
        <input type="button" class="btn btn-primary" value="Buat tutors Baru" />
    </a>
</p>

<?php
if ($sukses) {
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
    <?php
}
?>

<form class="row g-3" method="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo $katakunci ?>" />
    </div>

    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary" />
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th class = "col-2" >Picture</th>
            <th>Name</th>
            <th class="col-2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqltambahan = "";
        $per_halaman = 2;
        if ($katakunci != '') {
            $array_katakunci = explode(" ", $katakunci);
            $sqlcari = [];
            for ($x = 0; $x < count($array_katakunci); $x++) {
                $sqlcari[] = "(nama LIKE '%" . $array_katakunci[$x] .  "%' OR isi LIKE '%" . $array_katakunci[$x] . "%')";
            }
            $sqltambahan = "WHERE " . implode(" OR ", $sqlcari);
        }

        $sql1 = "SELECT * FROM tutors $sqltambahan";
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $mulai = ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
        $q1 = mysqli_query($koneksi, $sql1);
        $total = mysqli_num_rows($q1);
        $pages = ceil($total / $per_halaman);
        $nomor = $mulai + 1;
        $sql1 = $sql1 . " ORDER BY id DESC LIMIT $mulai, $per_halaman";

        $q1 = mysqli_query($koneksi, $sql1);
        
        while ($r1 = mysqli_fetch_array($q1)) {
            ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><img src="../gambar/<?php echo tutors_foto($r1['id']) ?>" style = "max-height:100px; max-width:100px" alt=""></td>
                <td><?php echo htmlspecialchars($r1['nama']) ?></td>
                <td>
                    <a href="input_tutors.php?id=<?php echo $r1['id'] ?>">
                        <span class="badge text-bg-warning">Edit</span>
                    </a>
                    
                    <a href="tutors.php?op=delete&id=<?php echo $r1['id'] ?>" onclick="return confirm('Are You Sure Want to Delete Data ?')">
                        <span class="badge text-bg-danger">Delete</span>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php
        for ($i = 1; $i <= $pages; $i++) {
            ?>
            <li class="page-item">
                <a class="page-link" href="tutors.php?katakunci=<?php echo urlencode($katakunci) ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
</nav>
<?php include("inc_footer.php") ?>
