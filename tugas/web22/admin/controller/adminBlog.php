<?php
include_once "../koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>Page admin blog</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi doloremque expedita error soluta distinctio
            commodi, unde qui voluptas nisi aut quaerat fugiat molestias similique, quas numquam excepturi incidunt quae
            libero.</p>
    </div>

    <?php
require_once "../menu.php";
    ?>

    <div class="container-fluid mt-03">
        <h3 class="mt-3">List Data Berita <a href="inputBerita.php" class="btn btn-primary m-2">Input Data</a>
        </h3>
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
                    <th>Judul</th>
                    <th width="200">Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $querySQL = "SELECT * from artikel";
                $execSQL = mysqli_query($koneksi, $querySQL);

                // cek data?
                if (mysqli_num_rows($execSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execSQL)) {

                        //ambil data
                        $getterId = $row['id'];
                        $getterJudul = $row['judul'];
                        $getterGambar = $row['gambar'];
                ?>
                <tr>
                    <td>
                        <a href="view-detail-angkatan.php?id=<?php echo $getterId; ?>">
                            <?php echo $getterId; ?>
                        </a>
                    </td>
                    <td><?php echo $getterJudul; ?></td>
                    <td align="center"><?php echo "<img src='../../images/$getterGambar' width='500' height='100'>" ?>
                    </td>
                    <td>
                        <a href=""></a>
                        <!-- edit angkatan -->
                        <a href="editBlog.php?id=<?php echo $id; ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen"></i>
                            Edit</a>
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