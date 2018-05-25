<?php 
include '../controller/controller.php';
$data=$pasien->lihat();
?>
<html>
<head>
<title>Pendaftaran Pasien</title>
<link rel="icon" type="image/png" href="logo/rs.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.chained.min.js"></script>
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
        <h3>Data keseluruhan pasien</h3>
<form action="" method="post">
    <table border="1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <td class="success"><center>No</center></td>
            <td class="success"><center>Nama Pasien</center></td>
            <td class="success"><center>Alamat</center></td>
            <td class="success"><center>No.Telepon</center></td>
            <td class="success"><center>Jenis Kelamin</center></td>
            <td class="success"><center>Poli</center></td>
            <td class="success"><center>Dokter</center></td>
            <td class="success"><center>Aksi</center></td>
        </tr>
        </thead>
        
        
            <tbody>
            <?php foreach ($data as $key => $value): ?>
            <tr>
            <td><center><?php echo $key+1 ?></center></td>
            <td><center><?php echo $value["nama_pasien"];?></center></td>
            <td><center><?php echo $value["alamat"];?></center></td>
            <td><center><?php echo $value["no_telp"];?></center></td>
            <td><center><?php echo $value["jenis_kelamin"];?></center></td>
            <td><center><?php echo $value["nama_poli"];?></center></td>
            <td><center><?php echo $value["nama_dokter"];?></center></td>
            <td>
                <a class="btn btn-danger btn-block" href="hapus.php?id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                <a class="btn btn-primary btn-block" href="edit.php?id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-edit"></i> Update</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
        
    </table>
</form>
<br><br>
</div>
</body>
</html>

