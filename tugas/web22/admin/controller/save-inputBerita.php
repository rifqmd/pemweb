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
    include_once "../koneksi.php";

    if(isset($_POST['judul']) and isset($_POST['deskripsi']) and isset($_POST['tgl']) and isset($_POST['gambar']) and isset($_POST['isi'])){
        $uploadJudul = $_POST['judul'];
        $uploadDeskripsi = $_POST['deskripsi'];
        $uploadTgl = $_POST['tgl'];
        $uploadGambar = $_POST['gambar'];
        $uploadIsi = $_POST['isi'];

        $querySQL = "INSERT INTO artikel (judul, deskripsi, tgl, gambar, isi) VALUES('$uploadJudul','$uploadDeskripsi',$uploadTgl,$uploadGambar,'$uploadIsi')";
        $execSQL = mysqli_query($koneksi, $querySQL);
    }
    ?>

    <div class="container-fluid mt-03">
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <?php
                    if($execSQL){
                        $lastId = mysqli_insert_id($koneksi);
                        echo "Data dengan ID $lastId berhasil diinput ke dalam database";
                    } else {
                        echo"Data tidak berhasil di input ke database";
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>