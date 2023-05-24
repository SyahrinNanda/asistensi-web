<?php
include "koneksi.php";

// error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
$nama = $_POST['nama'];
$alamat        = $_POST['alamat'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['nomor_telepon'];
$email         = $_POST['email'];
$kota          = $_POST['kota'];

// $nama_lengkap = $_GET['nama_lengkap'];
// $alamat = $_GET['alamat'];
// $tempat_lahir = $_GET['tempat_lahir'];
// $tanggal_lahir = $_GET['tanggal_lahir'];
// $jenis_kelamin = $_GET['jenis_kelamin'];
// $nomor_telepon = $_GET['nomor_telepon'];
// $email = $_GET['email'];
// $kota = $_POST['kota'];

$sql = "INSERT INTO input_data (nama_lengkap, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, nomor_telepon, email, kota)
        VALUES 
            ('$nama_lengkap', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$nomor_telepon', '$email', '$kota')";
$execute = mysqli_query($koneksi, $sql);

if ($execute) {
    // header('Loaction:tampil.php');
    echo "<script>alert('Data Berhasil disimpan ')</script>";
    echo '<script type="text/javascript">window.location="tampil.php"</script>';
} else {
    echo"Gagal Simpan Data!";
}
?>
