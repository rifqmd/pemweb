<?php
    $namaServer = "localhost";
    $username = "root";
    $password = "";
    $namadb = "web22";

    // create connection
    $koneksi = mysqli_connect($namaServer,$username,$password,$namadb);

    // cek kondisi
    if(!$koneksi) {
        // die ("Gagal melakukan ke database. ");
        die ("Gagal melakukan ke database. ". mysqli_connect_error()); // apabila production maka jgn menggunakan connect_errro
    }
?>