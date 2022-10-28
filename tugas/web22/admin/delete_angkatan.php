<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    require_once "menu.php";
    require_once "koneksi.php";

    

    $id = $_GET['id'];
    $querySQL = "SELECT * FROM angkatan WHERE id=$id";
    $execSQL = mysqli_query($koneksi, $querySQL);

    // cek data
    $tahun = '-';
    if (mysqli_num_rows($execSQL) > 0) {
        while ($row = mysqli_fetch_assoc($execSQL)) {

            //ambil data
            $tahun = $row['tahun'];
        }
    }
    ?>

    <div class="container-fluid mt-03">
        <h3>Konformasi Hapus Data</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td><?php echo $id; ?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tahun Angkatan</td>
                    <td><?php echo $tahun; ?></td>
                </tr>
            </tbody>
        </table>

        <a href="view-angkatan.php" class="btn btn-success">
            Kembali</a>
        <a href="delete.php?id_delete=<?= $id ?>" class="btn btn-danger">
            Hapus Data</a>

        
    </div>
</body>

</html>