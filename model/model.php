<?php
// session_start();
// $mysqli = new mysqli("localhost","root","","rumah_sakit");
//
// class pasien
// {
// 	public $koneksi;
//
// 	function __construct($mysqli)
// 	{
// 		$this->koneksi=$mysqli;
// 	}

	// function tambah($nama_pasien,$alamat,$no_telp,$jenis_kelamin,$id_poli,$id_dokter)
	// {
	// 	$this->koneksi->query("INSERT INTO pasien (nama_pasien,alamat,no_telp,jenis_kelamin,id_poli,id_dokter)
	// 		VALUES ('$nama_pasien','$alamat','$no_telp','$jenis_kelamin','$id_poli','$id_dokter')");
	// }

	// function lihat()
	// {
	// 	$data=array();
	// 	$ambil=$this->koneksi->query("SELECT * FROM pasien inner join dokter on pasien.id_dokter=dokter.id_dokter inner join poli on pasien.id_poli=poli.id_poli");
	// 	while($pecah=$ambil->fetch_assoc())
	// 	{
	// 		$data[]=$pecah;
	// 	}
	// 	return $data;
	// }

// 	function hapus($id)
// 	{
// 		$this->koneksi->query("DELETE FROM pasien WHERE id='$id'");
// 	}
// 	function update($id,$nama_pasien,$alamat,$no_telp,$jenis_kelamin,$id_poli,$id_dokter)
// 	{
// 		$this->koneksi->query("UPDATE pasien SET nama_pasien='$nama_pasien', alamat='$alamat', no_telp='$no_telp', jenis_kelamin='$jenis_kelamin', poli='$poli', dokter='$dokter', WHERE id='$id'");
// 	}
// 	function ambil_data($id)
// 	{
// 		$ambil=$this->koneksi->query("SELECT * FROM pasien WHERE id='$id'");
// 		// $pecah=$ambil->fetch_assoc();
//
// 		return $pecah;
// 	}
// }
// class dokter
// {
// 	public $koneksi;
//
// 	function __construct($mysqli)
// 	{
// 		$this->koneksi = $mysqli;
// 	}
// 	function tampildokter()
// 	{
// 		$ambildata=$this->koneksi->query("SELECT * FROM dokter INNER JOIN poli on dokter.id_poli=poli.id_poli ORDER BY nama_dokter");
// 		while ($pecahdata=mysqli_fetch_array($ambildata))
// 		{
// 			$semuadata[]=$pecahdata;
// 		}
// 		return $semuadata;
// 	}
// }
//
// class poli
// {
// 	public $koneksi;
//
// 	function __construct($mysqli)
// 	{
// 		$this->koneksi = $mysqli;
// 	}
// 	function tampilpoli()
// 	{
// 		$ambildata=$this->koneksi->query("SELECT * FROM poli");
// 		while ($pecahdata=mysqli_fetch_array($ambildata))
// 		{
// 			$semuadata[]=$pecahdata;
// 		}
// 		return $semuadata;
// 	}
// }


?>
