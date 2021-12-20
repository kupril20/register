<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_register";
$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Gagal konek ke Database" . mysqli_connect_errno();
}
