<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    require_once "menu.php";
    include_once "koneksi.php";
    ?>

    <div class="container-fluid mt-03">
        <h3>List Data User</h3>

        <button type="button" class="btn btn-primary m-2 mb-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Input Data</button>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="simpan-data-all.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama <var style="color: red;">*</var>
                                    :</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Jurusan <var
                                        style="color: red;">*</var> :</label>
                                <select class="form-select" name="jurusan" id="jurusan"
                                    aria-label="Default select example">
                                    <option selected>Pilih jurusan</option>
                                    <option value="Informatika">Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Angkatan <var
                                        style="color: red;">*</var> :</label>
                                <input type="text" class="form-control" id="angkatan">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php

        if (isset($_GET['hapus'])) {
            if ($_GET['hapus'] == 1) {
                echo "
                <div class=\"alert alert-danger alert-dismissible fade show mt-2\" role=\"alert\">
                <strong>Success!</strong> Data berhasil dihapus.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
                ";
            } else {
                echo "
                <div class=\"alert alert-warning alert-dismissible fade show mt-2\" role=\"alert\">
                <strong>Warning!</strong> Data tidak berhasil hapus.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
                ";
            }

            // alert animate
            echo "
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
                <script>
                $(document).ready(function(){
                    $('.alert').delay(2000).slideUp(200, function(){
                        $(this).alert('close');
                    });
                });
                </script>
            ";
        }


        ?>
        <table class="table table-hover" id="list-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Jurusan</th>
                    <th>Tahun Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $querySQL = "SELECT * from angkatan";
                $execSQL = mysqli_query($koneksi, $querySQL);

                // cek data?
                if (mysqli_num_rows($execSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execSQL)) {

                        //ambil data
                        $id = $row['id'];
                        $nama = $row['nama'];
                        $jurusan = $row['jurusan'];
                        $tahun = $row['tahun'];
                ?>
                <tr>
                    <td>
                        <a href="view-detail-mahasiswa.php?id=<?php echo $id; ?>">
                            <?php echo $id; ?>
                        </a>
                    </td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $jurusan; ?></td>
                    <td><?php echo $tahun; ?></td>
                    <td>
                        <!-- edit angkatan -->
                        <a href="edit-angkatan.php?id=<?php echo $id; ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen"></i>
                            Edit Data</a>
                        <!-- delete angkatan -->
                        <a href="delete_angkatan.php?id=<?php echo $id; ?>" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                            Delete</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#list-table').DataTable();
    });
    </script>

</body>

</html>