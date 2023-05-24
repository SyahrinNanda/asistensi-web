<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_nonton_yuk";

    $koneksi = mysqli_connect($hostname, $username, $password, $database);

    // if ($koneksi -> connect_error)
    // {
    //     die("Database Tidak terkoneksi".$koneksi -> connect_error);
    // }
    if( !$koneksi ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>