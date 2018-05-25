<?php
include '../controller/controller.php';
?>
<html>
<head>
<title>Pendaftaran Pasien</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.min.js"></script>>
<script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="page-header"><center>Pendaftaran Pasien</center></h1>
	</div>

	<div class="container">
		<h3>Formulir pendaftaran pasien baru</h3>
    <form method="post">
	    <table border="1" class="table table-bordered table-hover">
		<tr>
		<td>Nama Pasien</td>
		<td><input class="form-control" type="text" name="nama_pasien" placeholder="Masukkan nama"></td>
		</tr>
		<tr>
		<td>Alamat</td>
		<td><textarea name="alamat" class="form-control" placeholder="Masukkan alamat lengkap"></textarea></td>
		</tr>
		<tr>
		<td>No.Telepon</td>
		<td><input class="form-control" type="text" name="no_telp" placeholder="Masukkan nomor telepon"></td>
		</tr>
		<tr>
		<td>Jenis Kelamin</td>
		<td>
		<select name="jenis_kelamin" class="form-control">
		<option>-------Pilih Jenis Kelamin-------</option>
		<option value="L">Laki-laki</option>
		<option value="P">Perempuan</option>
		</select>
		</td>
		</tr>
		<tr>
		<tr>
		<td>Poli</td>
		<td>
		<select id="poli" name="poli" class="form-control">
		    <option value="">-------------Pilih Poli--------------</option>
		    <?php foreach ($datapoli as $key => $value): ?>
						<option value="<?php echo $value['id_poli'];?>">
							<?php echo $value['nama_poli'];?>
						</option>
							<?php endforeach ?>
		</select>
		</td>
		</tr>
		<td>Dokter</td>
		<td>
		<select id="dokter" name="dokter" class="form-control">
		<option value="">-----------Pilih Dokter-------------</option>
		<?php foreach ($datadokter as $key => $value): ?>
						<option id="dokter" class="<?php echo $value['id_poli'];?>" value="<?php echo $value['id_dokter']?>">
							<?php echo $value['nama_dokter'];?>
						</option>

						<?php endforeach ?>
		</select>
		</td>
		</tr>

		<tr>
		<td colspan="2"><Button class="btn btn-primary btn-block" type="submit" name="simpan">Simpan</button></td>
		</tr>
		<tr>
			<td colspan="2"><a class="btn btn-default btn-block" href="tampil.php">Lihat</a></td>
		</tr>

		</table>
		<?php
		if (isset($_POST["simpan"])){
		 $pasien->tambah($_POST['nama_pasien'],$_POST['alamat'],$_POST['no_telp'],$_POST['jenis_kelamin'],$_POST['poli'],$_POST['dokter']);
		 echo "<script>alert('Data berhasil disimpan');</script>";
		 echo "<script>location='../view/index.php';</script>";
		}?>
	</form>
	    <script>
		$("#dokter").chained("#poli");
		</script>

	</div>
</body>

</html>
