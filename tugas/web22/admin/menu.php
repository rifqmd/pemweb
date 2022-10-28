<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!--expand buat nyesuaikan ukuran layar-->
    <div class="container-fluid">
        <!--Container Fluid buat 1 halaman-->
        <a class="navbar-brand" href="index.php">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Master Data</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Data User</a></li>
                        <li><a class="dropdown-item" href="view-data-mahasiswa.php">Data Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="view-jurusan.php">Data Jurusan</a></li>
                        <li><a class="dropdown-item" href="view-angkatan.php">Data Angkatan</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- left link -->
        <div class="d-flex align-items-center">
            <a href="controller/adminBlog.php" class="btn btn-primary me-3">
                Admin Blog
            </a>
        </div>
    </div>
</nav>