<?php 
include_once("../class/Pemberitahuan.php");
include_once("../class/User.php");

session_start();

$user = new User;
$u = $user->find($_SESSION["id"]);

$pemberitahuan= new Pemberitahuan;
$data_pemberitahuan= $pemberitahuan->notifAktif();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
</head>
<body>
    <div class="table">
        <table>
            <tr>
                <th>No.</th>
                <th>Isi</th>
            </tr>

            <?php foreach($data_pemberitahuan as $key => $p){ ?>
            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $p["isi"] ?></td>
                <td> <a href="baca_notif.php?id=<?= $p["id"] ?>">Baca</a></td>
            </tr>
            <?php } ?>
            <tr>

            </tr>
        </table>
    </div>
</body>
</html>