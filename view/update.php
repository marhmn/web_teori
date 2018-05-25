<?php 
include '../controller/controller.php';
$pasien->tambah($_POST['nama_pasien'],$_POST['alamat'],$_POST['no_telp'],$_POST['jenis_kelamin'],$_POST['poli'],$_POST['dokter']);
echo "<script>alert('Data berhasil disimpan');</script>";
echo "<script>location='../view/tampil.php';</script>";
?>