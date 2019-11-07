<!DOCTYPE html>
<html>
<head>
	<title>Simpan MAHASISWA</title>
</head>
<body>
<h1>Simpan MAHASISWA MySQL</h1>
<?php 
$nrp = $_POST["nrp"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$jurusan=$_POST["jurusan"];
$conn=mysql_connect("localhost","root","") or die ("koneksi gagal");
mysql_select_db("itera",$conn);
echo "NRP 			: $nrp <br>";
echo "NAMA		 	: $nama <br>";
echo "ALAMAT 		: $alamat <br>";
echo "JURUSAN		: $jurusan";
$sqlstr="insert into mahasiswa (nrp,nama,alamat,id_jurusan) values('$nrp','$nama','$alamat','$jurusan')";
$hasil=mysql_query($sqlstr,$conn);
echo "<br>";
if ($hasil) {
	echo "Simpan MAHASISWA BERHASIL dilakukan";
}
 ?>
</body>
</html>