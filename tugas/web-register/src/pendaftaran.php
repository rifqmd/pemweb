<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi</title>

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
                                <li><a class="dropdown-item" href="data-pendaftaran.php">Data Pendaftaran</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <div class="container-fluid">
            <div class="container">
                <form action="data-pendaftaran.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap *</label>
                                <input type="nama" class="form-control" id="nama" placeholder="Isi nama lengkap Anda">
                                <small class="form-text text-muted">Gunakan huruf kapital semua</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Jenis Kelamin *</label><br>
                                <div>
                                    <input type="radio" id="laki-laki" name="contact" value="laki=laki" style="margin: .4rem;">
                                    <label for="l">Laki-Laki</label>

                                    <input type="radio" id="perempuan" name="contact" value="perempuan" style="margin: .4rem;"  >
                                    <label for="p">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">No HP *</label>
                                <input type="text" class="form-control" id="name" placeholder="081234567890">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="email@domain.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal-lahir">Tanggal Lahir *</label>
                                <input type="date" class="form-control" id="tanggal-lahir">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat-lahir">Tempat Lahir *</label>
                                <input type="text" class="form-control" id="tempat-lahir" placeholder="Isi tempat lahir Anda">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan *</label>
                                <select id="kewarganegaraan" class="form-control" name="kewarganegaraan">
                                    <option value="Amerika">Amerika</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia" selected>Indonesia</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Singapura">Singapura</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK / No. KTP *</label>
                                <input type="text" class="form-control" id="nik" placeholder="Isi No. KTP Anda">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="asal-sekolah">Asal Sekolah *</label>
                                <input type="text" class="form-control" id="asal-sekolah" placeholder="Asal sekolah Anda">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pil-prodi">Pilihan Prodi *</label>
                                <select id="pil-prodi" class="form-control" name="pil-prodi">
                                    <option>PILIH PROGRAM STUDI</option>
                                    <option value="kom">Ilmu Komunikasi</option>
                                    <option value="psi">Psikologi</option>
                                    <option value="akt">Akuntansi</option>
                                    <option value="mnj">Menejemen</option>
                                    <option value="tsp">Teknik Sipil</option>
                                    <option value="ars">Arsitektur</option>
                                    <option value="inf">Informatika</option>
                                    <option value="sif">Sistem Informasi</option>
                                    <option value="dkv">Desain Komunikasi Visual</option>
                                    <option value="dp">Desain Produk</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>