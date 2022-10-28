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
        require_once "../menu.php";
        include "../koneksi.php";
        $disableButton = "";
        

        if(isset($_POST['id'])) {
            $editID = $_POST['id'];
            $editJudul = $_POST['judul'];
            $queryUpdateSQL = "UPDATE artikel SET judul=$editJudul WHERE id=$editID";
            $execUpdateSQL = mysqli_query($koneksi, $queryUpdateSQL);
            
            if($execUpdateSQL) {
                echo "
                <div class=\"alert alert-success alert-dismissible fade show mt-2\" role=\"alert\">
                <strong>Success!</strong> Data berhasil diupdate.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
                ";
                
                // $disableTahun = true;
                $disableTahun = "readOnly";
                
            } else {
                echo "
                <div class=\"alert alert-success alert-dismissible fade show mt-2\" role=\"alert\">
                <strong>Success!</strong> Data tidak berhasil diupdate.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
                ";
            }

            
        } else {
            $id = $_GET['id'];
        }

        $id = $_GET['id'];
        $querySQL = "SELECT * FROM angkatan WHERE id=".$id;
        $execSQL = mysqli_query($koneksi, $querySQL);
    ?>

    <div class="container-fluid mt-03">
        <h3>Edit Berita</h3>
        <form action="editBerita.php?id=<?= $id ?>" method="post">
            <?php
                if(mysqli_num_rows($execSQL) > 0) {
                    while($row = mysqli_fetch_assoc($execSQL)) {
                        $tahun = $row['tahun'];
            ?>

            <input type="hidden" name="id" value="<?=$id ?>">
            <div class=" form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="tahun" placeholder="input tahun" name="tahun"
                    value="<?php echo $tahun ?>" <?= $disableTahun?>>
                <label for=" tahun">Tahun</label>
            </div>

            <?php           
                    }     
                }
            ?>

            <button type=" submit" class="btn btn-warning">Update</button>
            <!-- <button type=" submit" class="btn btn-warning" disabled>Update</button> -->
        </form>
    </div>
</body>

</html>