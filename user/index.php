<?php
include_once("../class/User.php");
include_once("../class/Buku.php");

session_start();

$user = new User;
$data_user = $user->find($_SESSION["id"]);

if (isset($_SESSION['id'])) {
    $data_user = $user->find($_SESSION['id']);
    if ($data_user['role'] == 'admin') {
        header("Location: https://localhost/perpus/admin/index.php");
    }
}
// var_dump($data_user);
// return exit;

$buku = new Buku;
$data_buku = $buku->all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../partials/link_css.php") ?>
    <?php include("../partials/t_script_js.php") ?>

    <title>Dashboard User</title>
</head>

<body>
    <div class="row">
        <div class="container">
            <?php include("../partials/sidebar_user.php") ?>
        </div>

        <div class="row bawah">
            <!-- biru -->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                    <img src="../assets/img_buku/Tate.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 kata">Tate no yusha</h6>
                            <a href="http://localhost/perpus/user/form_peminjaman.php" class="card-link lihat">Pinjam</a>
                        </div>
                    </div>
                </div>
            <!-- biru -->

            <!-- hijau -->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                    <img src="../assets/img_buku/Maou.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 kata">Maou Demon King</h6>
                            <a href="http://localhost/perpus/user/form_peminjaman.php" class="card-link lihat">Pinjam</a> 
                        </div>
                    </div>
                </div>
            <!-- hijau -->

            <!-- oren -->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                    <img src="../assets/img_buku/Meliodas.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title"><td></td></h5>
                            <h6 class="card-subtitle mb-2 kata">Seven deadly sin</h6>
                            <a href="http://localhost/perpus/user/form_peminjaman.php" class="card-link lihat">Pinjam</a>
                        </div>
                    </div>
                </div>
            <!-- oren -->

            <!-- merah -->
            <div class="col-3">
                    <div class="card" style="width: 18rem;">
                    <img src="../assets/img_buku/Naruto.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title"><td></td></h5>
                            <h6 class="card-subtitle mb-2 kata">Naruto Shipuden</h6>
                            <a href="http://localhost/perpus/user/form_peminjaman.php" class="card-link lihat">Pinjam</a>
                        </div>
                    </div>
                </div>
            <!-- merah -->

        </div>
        <?php include("../partials/b_script_js.php") ?>
</body>

</html>