<?php
$nameServer = "localhost";
$username = "root";
$password = "";
$namedb = "web-register"; //name database

// CREATE CONNECTION
$conn = mysqli_connect($nameServer, $username, $password, $namedb);

// CEK
if(!$conn) {
    die ("Gagal melakukan koneksi ke database". mysqli_connect());
}
?>