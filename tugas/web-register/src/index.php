<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>

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
                            <a class="nav-link active" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seleksi.php">Jalur Seleksi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Program Studi</a></li>
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="data-pendaftaran.php">Data Pendaftaran</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1611872336305-2bb819409c3f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" class="d-block w-100" alt="image pendaftaran" />
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1617713431219-7ab6939a769f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="image pendaftaran" />
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1511250503134-89501c53a815?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="image pendaftaran" />
                </div>
            </div>
            <div class="program-class container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <img src="../img/blended.png" alt="blended image">
                            <div class="card-body">
                                <h4>Kelas Blended</h4>
                                <p>Penerimaan Mahasiswa Baru</p>
                                <button type="button" class="btn lihat-detail__button" data-bs-toggle="button">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <img src="../img/reguler.png" alt="reguler image">
                            <div class="card-body">
                                <h4>Kelas Reguler</h4>
                                <p>Penerimaan Mahasiswa Baru</p>
                                <button type="button" class="btn lihat-detail__button" data-bs-toggle="button">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>