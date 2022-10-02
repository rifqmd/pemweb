<?php
// memanggil file koneksi dan file proses
require_once 'koneksi.php';
// include 'proses_siswa.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
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
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Program Studi</a></li>
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="#">Data Pendaftaran</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $QuerySQL = "INSERT INTO pendaftaran (nama) VALUES ($nama)";
        $execSQL = mysqli_query($koneksi, $QuerySQL);
    }
    ?>

    <div class="container-fluid mt-03">
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <?php
                    if ($execSQL) {
                        $lastId = mysqli_insert_id($koneksi);
                        echo "Data dengan ID $lastId berhasil diinput ke dalam database";
                    } else {
                        echo "Data tidak berhasil di input ke database";
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>