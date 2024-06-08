-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2024 pada 04.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursify`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `assignment`
--

CREATE TABLE `assignment` (
  `id` int(25) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `assignment`
--

INSERT INTO `assignment` (`id`, `nama`, `file_name`, `deskripsi`) VALUES
(4, 'Ibrahim Kayyis', 'assignment_1717054769_Saly-10.png', '<p>Test</p>'),
(5, 'Ibrahim Kayyis', 'assignment_1717054895_Saly-10.png', '<p>Test</p>'),
(6, 'Erin', 'assignment_1717055623_Saly-1.png', '<p>test</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(132, '130', 'Eng. Vince', 'So, kindly, hurry and sign up', '2021-08-05 03:27:43'),
(131, '130', 'Eng. Vince', 'I will be teaching it here soon.', '2021-08-05 03:27:33'),
(130, '0', 'Eng. Vince', 'Hello, anyone interested in learning cybersecurity ?', '2021-08-05 03:27:07'),
(129, '126', 'Mr Kyalo', 'Technology might fail to be a key driver of development in Africa', '2021-08-03 04:35:25'),
(128, '121', 'Mr Kyalo', 'No, English is spoken in the same measure as French', '2021-08-03 04:34:33'),
(127, '126', 'Mr Kyalo', 'it will definitely become industrialized ', '2021-08-03 04:33:58'),
(126, '0', 'Mr Kyalo', 'What is the future of Africa?\n', '2021-08-03 04:33:28'),
(125, '121', 'Martin', 'Maybe Chinese due to high population in the home nation ', '2021-08-03 04:28:57'),
(124, '104', 'Martin', 'on which subject?', '2021-08-03 04:28:30'),
(123, '116', 'Martin', 'Soon all technical courses will be available', '2021-08-03 04:28:09'),
(122, '121', 'Martin', 'I know there are many international langugaes', '2021-08-03 04:27:27'),
(121, '0', 'Martin', 'Is English the most spoken language on the globe', '2021-08-03 04:26:53'),
(120, '116', 'Martin', 'i just know of cybersecurity ', '2021-07-22 01:32:27'),
(119, '93', 'Martin', 'being new makes it better', '2021-07-22 01:32:01'),
(118, '104', 'Martin', 'get in touch, i can help', '2021-07-22 01:31:40'),
(117, '107', 'Martin', 'try windows 11', '2021-07-22 01:31:17'),
(115, '104', 'Mr Kyalo', 'i can do it for you. can i give you my contact.', '2021-07-22 01:23:22'),
(116, '0', 'Martin', 'What courses can i learn on this platform', '2021-07-22 01:30:58'),
(114, '99', 'Mr Kyalo', 'purchase only from a verified dealer', '2021-07-22 01:22:33'),
(113, '95', 'Mr Kyalo', 'depends with personal prefference', '2021-07-22 01:20:50'),
(112, '93', 'Mr Kyalo', 'its fast', '2021-07-22 01:20:28'),
(111, '104', 'Jack', 'For which subject', '2021-07-21 14:11:58'),
(110, '107', 'John', 'For which computer', '2021-07-21 14:11:25'),
(109, '107', 'Jane', 'I also need windows 11', '2021-07-21 14:10:38'),
(108, '107', 'Jemoh', 'Which one', '2021-07-21 14:09:55'),
(107, '0', 'Martin', 'Kindly help me in OS', '2021-07-18 20:55:00'),
(106, '104', 'Martin', 'or any other topic of your choice', '2021-07-18 20:54:39'),
(105, '104', 'Martin', 'The project title can be fees management system', '2021-07-18 20:54:15'),
(104, '0', 'Martin', 'Who can develop fourth year project for me?', '2021-07-18 20:53:31'),
(103, '99', 'Mr Kyalo', 'of what capacity', '2021-07-09 01:44:14'),
(102, '93', 'Mr Kyalo', 'enhanced security as compared to previous versions.', '2021-07-09 01:43:19'),
(101, '99', 'Martin', 'you can buy it at any computer shop', '2021-07-09 01:27:36'),
(100, '99', 'Mr Kyalo', 'But also the old version its okey', '2021-07-05 12:55:09'),
(99, '0', 'Mr Kyalo', 'I am looking for a external harddisk SSD it will be better', '2021-07-05 12:54:50'),
(98, '95', 'Mr Kyalo', 'also JavaScript its also popular', '2021-07-05 12:54:01'),
(97, '95', 'Mr Kyalo', 'Python is so far the best', '2021-07-05 12:53:35'),
(96, '93', 'Masila', 'By the way it looks like they copy pasted the mac-os', '2021-07-05 12:53:04'),
(95, '0', 'Masila', 'Which is the best programming language?', '2021-07-05 12:52:22'),
(94, '93', 'Mr Kyalo', 'It looks more attractive', '2021-07-05 12:43:18'),
(93, '0', 'Mr Kyalo', 'What are some of the improved features of windows 11?', '2021-07-05 12:42:52'),
(133, '0', 'Gracia', 'asdfghjkl', '2024-05-27 20:36:07'),
(134, '0', 'Ibrahim kayyis', 'yes are you dumb ?', '2024-05-30 12:19:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments2`
--

CREATE TABLE `comments2` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `comments2`
--

INSERT INTO `comments2` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(1, '', 'Ibrahim kayyis', 'yes are you dumb ?', '2024-05-30 12:21:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments3`
--

CREATE TABLE `comments3` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `comments3`
--

INSERT INTO `comments3` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(1, '0', 'jalu', 'are we need food to survive ?', '2024-05-30 12:36:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `judul`, `isi`, `tgl_isi`) VALUES
(1, 'Office', '<p>Jl. Kejawen Putih Tambak</p><p>Surabaya, Jawa Timur</p><p>Indonesia</p>', '2024-05-26 07:03:53'),
(2, 'Links', '<p>Home</p>', '2024-05-26 07:09:43'),
(3, 'Newsletter', '<p><br></p>', '2024-05-26 06:40:46'),
(4, 'Links', '<p>Courses</p>', '2024-05-26 07:10:19'),
(5, 'Links', '<p>Tutors</p>', '2024-05-26 07:12:23'),
(6, 'Links', '<p>Daftar</p>', '2024-05-26 07:13:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `level` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `judul`, `kutipan`, `isi`, `level`, `waktu`, `tgl_isi`) VALUES
(2, 'YouTube video player', 'https://www.youtube.com/embed/t0aCoqXKFOU?si=q1QnsFvk8WuU3wtg', '<p>UX Design: How To Get Started&nbsp;</p>', '', '', '2024-05-27 13:00:20'),
(3, 'Getting Started For UI/UX Design For Beginners', 'WELCOME TO OUR ONLINE COURSE', '<p><span style=\"color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\">Unlock your creativity and master the fundamentals of user experience and interface design with our comprehensive, easy-to-follow course. Transform your ideas into stunning digital experiences today! Sign up now and start your journey towards becoming a UI/UX design expert!</span><br></p>', '', '', '2024-05-27 13:06:18'),
(4, 'featured course', 'Figma UI/UX Design Essentials.', '<p>-</p>', '', '', '2024-05-27 13:22:03'),
(5, 'featured course 2', ' Figma Beginner to Pro Class.', '<p>-</p>', '', '', '2024-05-27 13:28:49'),
(6, 'featured course 3', 'Web UI Design Using Figma.', '<p>-</p>', '', '', '2024-05-27 13:29:50'),
(7, 'featured course 4', 'WEB UI DESIGN USING WEBFLOW.', '<p>-</p>', '', '', '2024-05-27 13:30:19'),
(8, 'Figma UI/UX Design Essentials', 'UI/UX Design', '<p><img src=\"../gambar/045117b0e0a11a242b9765e79cbf113f.jpg\" style=\"width: 480px;\"><br><img src=\"../gambar/65ded5353c5ee48d0b7d48c591b8f430.jpg\" style=\"width: 544px;\"></p>', 'Beginner', '11 H 36 M', '2024-05-27 15:10:00'),
(9, 'Figma Beginner to Pro Class', 'UI/UX DESIGN', '<p><img src=\"../gambar/7f1de29e6da19d22b51c68001e7e0e54.jpg\" style=\"width: 480px;\"><br></p>', 'BEGINNER', '4 H 31 M', '2024-05-27 15:16:33'),
(10, 'Web UI Design Using Figma And Webflow', 'UI/UX DESIGN', '<p><img src=\"../gambar/5f93f983524def3dca464469d2cf9f3e.jpg\" style=\"width: 480px;\"><br></p>', ' INTERMEDIATE', '19 H 36 M', '2024-05-27 15:20:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(141, '140', 'Sania', 'Keberhasilan UX dapat diukur melalui metrik seperti kepuasan pengguna, tingkat retensi, waktu yang dihabiskan di aplikasi, dan tingkat konversi.\n', '2024-05-30 09:19:16'),
(140, '', 'Doni', 'Bagaimana cara mengukur keberhasilan UX suatu produk?\n\n', '2024-05-29 08:19:01'),
(139, '138', 'Rahma', 'Wireframe adalah sketsa dasar yang menunjukkan tata letak dan struktur halaman atau aplikasi tanpa detail desain visual.\n', '2024-04-03 09:18:46'),
(138, '', 'Stefani', 'Apa yang dimaksud dengan wireframe dalam desain UI/UX?\n', '2024-04-03 03:11:27'),
(137, '136', 'Green', 'UX penting karena memastikan produk memenuhi kebutuhan dan harapan pengguna, yang meningkatkan kepuasan dan retensi pengguna.\n', '2024-04-01 04:10:09'),
(136, '', 'Aca', 'Mengapa UX penting dalam pengembangan produk?\n', '2024-04-30 10:17:46'),
(135, '134', 'Nafla', 'UI adalah tentang desain visual dan interaksi pengguna dengan produk, sedangkan UX adalah tentang keseluruhan pengalaman pengguna saat menggunakan produk tersebut.\n', '2024-03-30 05:00:23'),
(134, '0', 'Erin', 'Apa perbedaan utama antara UI dan UX?', '2024-03-29 13:17:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `homepage`
--

INSERT INTO `homepage` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(15, 'Terus Maju, Terus Berkarya', 'Belajar Desain #DimanaAja', '<p><span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif; font-size: medium;\">Kuasai skill desain UI/UX dan Bersiaplah berkarir menjadi UI/UX Designer andal</span><img src=\"../gambar/8f53295a73878494e9bc8dd6c3c7104f.png\" style=\"width: 836px;\"></p>', '2024-05-16 02:11:40'),
(16, 'Online Course', 'Yang Akan Kita Pelajari Di Coursify', '<p><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" medium;\"=\"\">Pada kelas ini, kamu akan mempelajari UI/UX Design dari awal hingga mahir dan mengerjakan project untuk menjadikan kamu sebagai UI/UX Designer yang siap kerja</span><img style=\"width: 836px;\" src=\"../gambar/ec8956637a99787bd197eacd77acce5e.png\"><br></p>', '2024-05-28 08:44:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `agree` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `agree`) VALUES
(1, 'kay', 'kaykid369@gmail.com', '$2y$10$a3HWje4LV3z/KGc0bmdhu.4teCPS3i1.exlDLZy/l/PvGUMPHuP8e', 0),
(2, 'ibrahim', 'Ibrahim.22060@mhs.unesa.ac.id', '$2y$10$VHxj1IQZRou3UXlSetHL3eEBlkPT9UY6FIqpR3Zpsg2osR2rzi4eu', 1),
(3, 'papigurou', 'papigurou@gmail.com', '$2y$10$drcAj0J83PL7q4H4wx.tmOKjHPGwvDamaYz.oi2wYWY/Auf63zFVC', 0),
(4, 'jalutri', 'jalu@gmail.com', '$2y$10$87wTJOSW1n4Ed8UHAfz69ed7SEqo5PPP8GxEMnUgNGo/yropILD7G', 0),
(5, 'Nafla', 'Nafla@gmail.com', '$2y$10$vuBWZmP3s.YiWMcfgqDgF.X1rD6MD0PCjFmkYFL2pCik.f4P.Q/di', 0),
(6, 'Kaykid', 'Kaito1412@gmail.com', '$2y$10$CKRB/RLCb8cbkFh5w25Che5DcTmu5BmJv66nZNSZKZDvUwuuqVjZe', 0);

--
-- Trigger `login`
--
DELIMITER $$
CREATE TRIGGER `after_login_delete` AFTER DELETE ON `login` FOR EACH ROW BEGIN
    DELETE FROM Profile WHERE id = OLD.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_login_insert` AFTER INSERT ON `login` FOR EACH ROW BEGIN
    INSERT INTO Profile (id, username, email)
    VALUES (NEW.id, NEW.username, NEW.email);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_login_update` AFTER UPDATE ON `login` FOR EACH ROW BEGIN
    UPDATE Profile
    SET username = NEW.username,
        email = NEW.email
    WHERE id = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mycourses`
--

CREATE TABLE `mycourses` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mycourses`
--

INSERT INTO `mycourses` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(1, 'Figma UI/UX Design Essentials', '-', 'Kursus desain UX untuk pemula! Mulai dari dasar-dasar, Anda akan belajar membuat wireframe, mengelola warna dan gambar, memilih font yang tepat, serta membuat ikon dan tombol sendiri. Jangan khawatir dengan istilah rumit, kami akan jelaskan dengan mudah.Kami juga akan memanfaatkan kit UI gratis dan plugin Figma untuk mempercepat proses kerja Anda. Di akhir kursus, Anda akan memiliki panduan gaya yang siap diserahkan kepada klien dan menguasai interaksi mikro, transisi halaman, dan animasi<br>', '2024-05-28 08:31:03'),
(2, 'Figma Beginner to Pro Class.', '-', '<p>Ikuti kursus pemula lengkap dalam desain UX/UI dengan Figma! Dalam kurang dari 4 jam, Anda akan menguasai fitur-fitur canggih dari awal hingga akhir. Mulai dari pengaturan akun Figma hingga penguasaan fitur-fitur lanjutan, kami akan membimbing Anda melalui langkah-langkahnya. Cocok untuk pemula atau mereka yang beralih dari perangkat lunak desain lainnya. Bergabunglah dan kuasai Figma untuk proyek desain Anda!<br></p>', '2024-05-28 08:29:09'),
(3, 'Web UI Design Using Figma and Webflow.', '-', '<p>Kelas online ini terdiri dari empat bagian yang berfokus pada berbagai aspek desain web. Mulai dari memahami dasar-dasar desain yang baik hingga praktek langsung dalam pengembangan dengan Webflow, Anda akan belajar secara mendalam. Setelah menguasai keterampilan dasar, Anda akan diberikan kesempatan untuk menerapkannya dalam proyek klien nyata, memperoleh pengalaman berharga dalam dunia desain web yang praktis dan bermanfaat.<br></p>', '2024-05-28 08:27:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(1, 'Unesa', 'partners_1716278490_unesa.png', '<p>Unesa</p>', '2024-05-21 08:01:30'),
(2, 'Kominfo', 'partners_1716276072_kominfo.jpg', '<p>Kominfo</p>', '2024-05-21 07:21:12'),
(3, 'Google', 'partners_1716276099_google.png', '<p>Google</p>', '2024-05-21 07:21:39'),
(4, 'Microsoft', 'partners_1716276126_microsoft.png', '<p>Microsoft</p>', '2024-05-21 07:22:06'),
(5, 'Telkom University', 'partners_1716276157_telkomuniversity.png', '<p>Telkom University</p>', '2024-05-21 07:22:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `username`, `email`, `password`, `phone_number`) VALUES
(5, 'Nafla Aurelia', 'Nafla@gmail.com', 'naflacantik', '081556778225'),
(6, 'Kaykid', 'Kaito1412@gmail.com', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tutors`
--

INSERT INTO `tutors` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(5, 'Daniel Scott', 'tutors_1716223755_daniel scott.jpg', '<p>Mentor</p>', '2024-05-20 16:49:15'),
(6, 'Christine Vallaure', 'tutors_1716220807_christine vallaure.jpg', '<p>Mentor</p>', '2024-05-20 16:00:07'),
(7, 'Vako Shvili', 'tutors_1716220834_Vako Shvili.jpg', '<p>Mentor</p>', '2024-05-20 16:00:34'),
(8, 'Jalu', 'tutors_1716868566_jalu.jpeg', '<p>System Analyst<br></p>', '2024-05-28 03:56:06'),
(9, 'Gracia', 'tutors_1716868720_20220927_120316.jpg', '<p>Back End Devloper<br></p>', '2024-05-28 03:58:40'),
(10, 'Erinda ', 'tutors_1716868863_erin.jpeg', '<p>UI/UX Designer<br></p>', '2024-05-28 04:01:03'),
(11, 'Kayyis', 'tutors_1716869362_kys.jpg', '<p>Front End Developer<br></p>', '2024-05-28 04:09:22'),
(12, 'Flau', 'tutors_1716869502_NAFLA.jpg', '<p>Project Manager</p><p><br></p>', '2024-05-28 04:11:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments2`
--
ALTER TABLE `comments2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments3`
--
ALTER TABLE `comments3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `mycourses`
--
ALTER TABLE `mycourses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `comments2`
--
ALTER TABLE `comments2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `comments3`
--
ALTER TABLE `comments3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mycourses`
--
ALTER TABLE `mycourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
