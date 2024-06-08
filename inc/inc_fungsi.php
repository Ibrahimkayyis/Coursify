<?php 

function url_dasar() {
    //$_SERVER['SERVER_NAME'] : alamat website, misalkan coursify.com
    //$_SERVER['SCRIPT_NAME'] : directory website, coursify.com/blog $_SERVER['SCRIPT_NAME'] :blog
    $url_dasar = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}

function ambil_gambar($id_tulisan) {
    global $koneksi;
    $sql1 = "SELECT * FROM homepage WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['isi'];

        preg_match('/<img[^>]+src="?([^"\s]+)"?[^>]*>/i', $text, $img);
        $gambar = isset($img[1]) ? $img[1] : ''; // ../gambar/filename.jpg
        $gambar = str_replace("../gambar/", url_dasar() . "/gambar/", $gambar);

        return $gambar;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_kutipan($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM homepage WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['kutipan'];
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_judul($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM homepage WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['judul'];
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_isi($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM homepage WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = strip_tags($r1['isi']);
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function bersihkan_judul ($judul){
    $judul_baru     = strtolower($judul);
    $judul_baru     = preg_replace("/[^a-zA-Z0-9\s]/", "", $judul_baru);
    $judul_baru     = str_replace(" ", "-", $judul_baru);
    return $judul_baru;
}

function buat_link_halaman($id){
    global $koneksi;
    $sql1 = "SELECT * FROM homepage WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $judul = $r1['judul'];
        // http://localhost/coursify/Homepage.php/15/judul
        return url_dasar() . "/Sign_up.php/$id/" . urlencode($judul);
    } else {
        return ''; // or handle the error as needed
    }
}

function partners_foto($id) {
    global $koneksi;
    
    // Perbaiki kutipan dalam query SQL
    $sql1 = "SELECT * FROM partners WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    // Periksa apakah query berhasil dan menghasilkan data
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        
        // Periksa apakah data ditemukan
        if ($r1) {
            $foto = $r1['foto'];
            if ($foto) {
                return $foto;
            }
        }
    }
    
    // Kembalikan nilai default jika tidak ada foto atau terjadi kesalahan
    return 'partners_default_picture.png';
}

function buat_link_partners ($id){
    global $koneksi;
    $sql1   = "select * from partners where id = '$id' ";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama   = bersihkan_judul($r1['nama']);
    return url_dasar()."/partners.php/$id/$nama";
}

function tutors_foto($id) {
    global $koneksi;
    $sql1 = "SELECT foto FROM tutors WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_assoc($q1);
    return $r1 ? $r1['foto'] : 'default_tutor_picture.png';
}

function ambil_isi_contact($id, $kolom) {
    global $koneksi;
    $sql1   = "select * from contact where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);

    return $r1[$kolom];
}

function ambil_gambar_courses($id_tulisan) {
    global $koneksi;
    $sql1 = "SELECT * FROM courses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['isi'];

        preg_match('/<img[^>]+src="?([^"\s]+)"?[^>]*>/i', $text, $img);
        $gambar = isset($img[1]) ? $img[1] : ''; // ../gambar/filename.jpg
        $gambar = str_replace("../gambar/", url_dasar() . "/gambar/", $gambar);

        return $gambar;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_kutipan_courses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM courses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['kutipan'];
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_judul_courses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM courses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['judul'];
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_isi_courses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM courses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = strip_tags($r1['isi']);
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_waktu_courses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT waktu FROM courses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_assoc($q1);
        return $r1['waktu'];
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_level_courses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT level FROM courses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_assoc($q1);
        return $r1['level'];
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_username_terbaru() {
    global $koneksi;
    $sql = "SELECT username FROM Profile ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
        return $result['username'];
    } else {
        return ''; // atau menangani error sesuai kebutuhan
    }
}

function ambil_password_terbaru() {
    global $koneksi;
    $sql = "SELECT password FROM Profile ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
        return $result['password'];
    } else {
        return ''; // atau menangani error sesuai kebutuhan
    }
}

function ambil_email_terbaru() {
    global $koneksi;
    $sql = "SELECT email FROM Profile ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
        return $result['email'];
    } else {
        return ''; // atau menangani error sesuai kebutuhan
    }
}

function ambil_nomor_terbaru() {
    global $koneksi;
    $sql = "SELECT phone_number FROM Profile ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
        return $result['phone_number'];
    } else {
        return ''; // atau menangani error sesuai kebutuhan
    }
}

function ambil_kutipan_mycourses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM mycourses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['kutipan'];
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_judul_mycourses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM mycourses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = $r1['judul'];
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function ambil_isi_mycourses($id_tulisan){
    global $koneksi;
    $sql1 = "SELECT * FROM mycourses WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $text = strip_tags($r1['isi']);
        return $text;
    } else {
        return ''; // or handle the error as needed
    }
}

function hitung_jumlah_mycourses() {
    global $koneksi;
    $sql = "SELECT COUNT(*) as total FROM mycourses";
    $query = mysqli_query($koneksi, $sql);
    $result = mysqli_fetch_assoc($query);
    return $result['total'];
}

function ambil_semua_mycourses() {
    global $koneksi;
    $sql = "SELECT * FROM mycourses";
    $query = mysqli_query($koneksi, $sql);
    $courses = [];

    if ($query) {
        while ($row = mysqli_fetch_assoc($query)) {
            $courses[] = $row;
        }
    }

    return $courses;
}

?>
