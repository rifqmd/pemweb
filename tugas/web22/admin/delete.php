<?php
include_once 'koneksi.php';

if (isset($_GET['id_delete'])) {
    $id_delete = $_GET['id_delete'];
    $queryUpdateSQL = "DELETE FROM angkatan WHERE id=$id_delete";
    $execUpdateSQL = mysqli_query($koneksi, $queryUpdateSQL);

    if ($execUpdateSQL) {
        header("location: view-angkatan.php?hapus=1");
    } else {
        header("location: view-angkatan.php?hapus=0");
    }
} else {
    $id_delete = $_GET['id_delete'];
}

?>