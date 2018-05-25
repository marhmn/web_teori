<?php  
	include '../controller/controller.php';

$id = $_GET['id'];
$pasien->hapus($id);
echo "<script>alert('Data telah terhapus');</script>";
echo "<script>location='tampil.php?pesan=hapus';</script>";
?>