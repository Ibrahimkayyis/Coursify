<?php
include_once ("inc/inc_koneksi.php");
include_once ("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="./assets/logo.png" sizes="192x192" />
    <title>Forum Diskusi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css" />
    <link rel="stylesheet" href="./css/diskusi.css" />
    <script src="./js/diskusi.js"></script>
</head>

<body>
    <!-- NavBar Section Start -->
    <div class="hero">
        <img src="./assets/logo.svg" style="
          filter: invert(46%) sepia(95%) saturate(1242%) hue-rotate(158deg)
            brightness(91%) contrast(101%);
        " alt="" />
        <nav>
            <img src="./assets/Screenshot 2024-03-16 161331.jpg.png" alt="" class="logo" />
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./Member-Area.php">Member Area</a></li>
                <li><a href="./Diskusi.php">Forum Diskusi</a></li>
            </ul>
            <img src="./assets/user.png" alt="" class="user-pic"
                onclick="toggleMenu()" />

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="./assets/user.png" alt="" />
                        <h4><?php echo ambil_username_terbaru(); ?></h4>
                    </div>
                    <hr />

                    <a href="Edit-profile.php" class="sub-menu-link">
                        <img src="./assets/profile.png" alt="" />
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>

                    <a href="#" class="sub-menu-link">
                        <img src="./assets/logout.png" alt="" />
                        <p>Log-Out</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>

        <script>
            let subMenu = document.getElementById("subMenu");

            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }
        </script>
        <!-- NavBar Section End -->

        <div id="ReplyModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Pertanyaan Balasan</h4>
                    </div>
                    <div class="modal-body">
                        <form name="frm1" method="post">
                            <input type="hidden" id="commentid" name="Rcommentid">
                            <div class="form-group">
                                <label for="usr">Nama:</label>
                                <input type="text" class="form-control" name="Rname" required>
                            </div>
                            <div class="form-group">
                                <label for="comment">Balasan:</label>
                                <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
                            </div>
                            <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Balas">
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="panel panel-default" style="margin-top:50px">
                <div class="panel-body">
                    <h3>Forum Diskusi</h3>
                    <hr>
                    <form name="frm" method="post">
                        <input type="hidden" id="commentid" name="Pcommentid" value="0">
                        <div class="form-group">
                            <label for="usr">Nama:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Pertanyaan:</label>
                            <textarea class="form-control" rows="5" name="msg" required></textarea>
                        </div>
                        <input type="button" id="butsave" name="save" class="btn btn-primary" value="Kirim">
                    </form>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Histori Pertanyaan</h4>
                    <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
                        <tbody id="record">

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <?php include("inc_footer.php") ?>
        <!-- Footer section end -->

</body>

</html>