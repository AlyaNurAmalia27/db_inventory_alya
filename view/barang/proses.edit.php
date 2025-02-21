<?php

$id_barang=$_GET['id_barang'];
$nama_barang=$_POST['nama_barang'];
$id_jenis=$_POST['id_jenis'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE  SET nama_barang='$nama_barang'
WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Edit Jenis Berhasil')</script>";
echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "<script>alert('Edit Jenis Gagal')</script>";
echo "<script>window.location.href='tambah.php'</script>";
}