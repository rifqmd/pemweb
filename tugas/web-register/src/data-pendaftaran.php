<?php
// memanggil file koneksi dan file proses
require_once 'koneksi.php';
// include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo-upj-light.png" alt="Bootstrap" width="113" height="60" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seleksi.php">Jalur Seleksi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Program Studi</a></li>
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item active" href="#">Data Pendaftaran</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid mt-3">
        <h3>List Data Pendaftaran</h3>
        <table>
            <thead>
                <tr>ID</tr>
                <tr>Nama Lengkap</tr>
                <tr>Jurusan</tr>
                <tr>Aksiiii</tr>
            </thead>
            <tbody>
                <?php
                $querySQL = "SELECT * from pendaftaran";
                $execSQL = mysqli_query($koneksi, $querySQL);

                // CEK DATA

                ?>
            </tbody>
        </table>
    </div>

    <?php

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>