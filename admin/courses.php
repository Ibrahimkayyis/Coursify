<?php include ("inc_header.php"); ?>
<?php
$sukses = "";
$katakunci = isset($_GET['katakunci']) ? $_GET['katakunci'] : "";
$op = isset($_GET['op']) ? $_GET['op'] : "";

if ($op == 'delete') {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $sql1 = "DELETE FROM courses WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
        $sukses = "Delete Data Successful";
    } else {
        $sukses = "Delete Data Failed: " . mysqli_error($koneksi);
    }
}
?>

<h1>Courses Admin Page</h1>
<p>
    <a href="input_courses.php">
        <input type="button" class="btn btn-primary" value="Masukkan Courses Baru" />
    </a>
</p>

<?php
if ($sukses) {
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses; ?>
    </div>
    <?php
}
?>

<form class="row g-3" method="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo htmlspecialchars($katakunci); ?>" />
    </div>

    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary" />
    </div>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>Header</th>
            <th>Quotes</th>
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
            foreach ($array_katakunci as $kata) {
                $kata = mysqli_real_escape_string($koneksi, $kata);
                $sqlcari[] = "(judul LIKE '%$kata%' OR kutipan LIKE '%$kata%' OR isi LIKE '%$kata%')";
            }
            $sqltambahan = "WHERE " . implode(" OR ", $sqlcari);
        }

        $sql1 = "SELECT * FROM courses $sqltambahan";
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
                <td><?php echo $nomor++; ?></td>
                <td><?php echo htmlspecialchars($r1['judul']); ?></td>
                <td><?php echo htmlspecialchars($r1['kutipan']); ?></td>
                <td>
                    <a href="input_courses.php?id=<?php echo $r1['id']; ?>">
                        <span class="badge text-bg-warning">Edit</span>
                    </a>
                    
                    <a href="courses.php?op=delete&id=<?php echo $r1['id']; ?>" onclick="return confirm('Are You Sure Want to Delete Data ?')">
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
            <li class="page-item <?php if($i == $page) echo 'active'; ?>">
                <a class="page-link" href="courses.php?katakunci=<?php echo urlencode($katakunci); ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
</nav>

<?php include("inc_footer.php"); ?>
