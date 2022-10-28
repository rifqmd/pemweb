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
        include_once "koneksi.php";

        if(isset ($_POST['nama']) && isset ($_POST['jurusan']) && isset ($_POST['tahun'])){
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $tahun = $_POST['tahun'];
            $QuerySQL = "INSERT INTO angkatan (nama, jurusan, tahun) VALUES ('$nama', '$jurusan', $tahun)";
            $execSQL = mysqli_query($koneksi,$QuerySQL);
        }

        // if(isset ($_POST['nama'])){
        //     $nama = $_POST['nama'];
        //     $QuerySQL = "INSERT INTO angkatan (nama) VALUES ('$nama')";
        //     $execSQL = mysqli_query($koneksi,$QuerySQL);
        // }
        
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