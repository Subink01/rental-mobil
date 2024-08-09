<?php
include 'koneksi.php';
$id = $_POST['id_mobil'];
$nama_mobil = $_POST['nama_mobil'];
$tahun = $_POST['tahun'];
$warna = $_POST['warna'];
$id = $_POST['id_kategori'];
$sql = "INSERT INTO mobil (id_mobil, nama_mobil, tahun, warna, id_kategori) VALUES ('$id','$nama_mobil', '$tahun', '$warna', '$id')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>+