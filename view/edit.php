<?php
	include '../controller/controller.php';
$id = $_GET['id'];
$idpasien=$pasien->ambil_data('id');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
	<?php include 'navbar.php'; ?>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<h1 class="page-header"><center>Pendaftaran Pasien</center></h1>
	</div>

	<br/>



	<br/>
	<div class="container">
		<h3>Edit data</h3>
		<a href="tampil.php" class="btn btn-primary"><i class="glyphicon glyphicon-list-alt"></i>Lihat Semua Data</a>
		<br/>
		<br/>
	<form method="post">

			<div class="form-group">
				<label>Nama Pasien</label>
				<input type="hidden" name="id" value="<?php echo $id['id'] ?>">
				<input class="form-control" type="text" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
			</div>
			<div class="form-group">
				<label>No.Telepon</label>
				<input class="form-control" type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option>-------Pilih Jenis Kelamin-------</option>
					<option value="<?php echo $data['jenis_kelamin'] ?>"><?php echo $data['jenis_kelamin'] ?>"</option>
				</select>
			</div>
			<div class="form-group">
				<label>Poli</label>
				<select id="poli" name="poli" class="form-control">
		    <option value="">-------------Pilih Poli--------------</option>
		   		<?php foreach ($datapoli as $key => $value): ?>
					<option value="<?php echo $value['id_poli'];?>"><?php echo $value['nama_poli'];?>
					</option>
				<?php endforeach ?>
			</select>
			</div>
			<div class="form-group">
				<label>Dokter</label>
				<select id="dokter" name="dokter" class="form-control">
				<option value="">-----------Pilih Dokter-------------</option>
				<?php foreach ($datadokter as $key => $value): ?>
					<option id="dokter" class="<?php echo $value['id_poli'];?>" value="<?php echo $value['id_dokter']?>"><?php echo $value['nama_dokter'];?>
					</option>
				<?php endforeach ?>
			</select>
			</div>
			<input class="btn btn-primary" type="submit" value="Simpan" class="glyphicon glyphicon-edit">
			<?php
			if (isset($_POST["simpan"])){
			 $pasien->tambah($_POST['nama_pasien'],$_POST['alamat'],$_POST['no_telp'],$_POST['jenis_kelamin'],$_POST['poli'],$_POST['dokter']);
			 echo "<script>alert('Data berhasil disimpan');</script>";
			 echo "<script>location='../view/tampil.php';</script>";
			}?>
	</form>
</div>
</body>
</html>
