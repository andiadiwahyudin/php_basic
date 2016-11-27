<?php 
	$nim    	= $_POST['nim'];
	$nama		= $_POST['nama'];
	$jurusan	= $_POST['jurusan'];
	$jk			= $_POST['jk'];
	$alamat		= $_POST['alamat'];

	$dataValid="YA";

	if (strlen(trim($nim)) == 0){
	echo "Nim harus di isi! <br />";
	$dataValid = "TIDAK";
	}
	if (strlen(trim($nama)) == 0){
	echo "Nama harus diisi ! <br />";
	$dataValid = "TIDAK";
	}
	if (strlen(trim($jurusan)) == 0){
	echo "Jurusan harus diisi ! <br />";
	$dataValid = "TIDAK";
	}
	if (strlen(trim($jk)) == 0){
	echo "Jenis kelamin harus diisi ! <br />";
	$dataValid = "TIDAK";
	}
	if (strlen(trim($alamat)) == 0){
	echo "Alamat harus diisi ! <br />";
	$dataValid = "TIDAK";
	}
	if ($dataValid == "TIDAK") {
	echo "Masih ada kesalahan, silahkan perbaiki! <br />";
	echo "<input type='button' value='kembali' onClick='self.history.back()'>";
	exit;
	}

	include "koneksi.php";
	$sql = "insert into mahasiswa(nim,nama,jurusan,jk,alamat) values ('$nim','$nama','$jurusan','$jk','$alamat')";
	$hasil = mysqli_query($kon, $sql);

	if (!$hasil){
	echo "Gagal simpan, silahkan di ulangi! <br />";
	echo mysqli_error($kon);
	echo "<br /> <input type='button' value='kembali' onClick='self.history.back()'>";
	exit;
	}else{
	header("Location: ../index.php"); 
	}
?>