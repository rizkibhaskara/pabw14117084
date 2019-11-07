<?php 
$cari=$_POST['snama'];
$conn=mysql_connect("localhost","root","");
mysql_selectdb("itera",$conn);
$hasil=mysql_query("select *from mahasiswa where nama like '%$cari%'",$conn);
$jumlah=mysql_num_rows($hasil);
echo "<br>";
echo "Ditemukan : $jumlah";
echo "<br>";
while ($baris=mysql_fetch_array($hasil)) {
	echo "ID Nama : ";
	echo $baris[0];
	echo "<br>";
	echo "NAMA : ";
	echo $baris[1];
	echo "<br>";
	echo "ALAMAT : ";
	echo $baris[2];
	echo "<br>";
	echo "JURUSAN : ";
	echo $baris[3];
	echo "<br> <br>";
}
 ?>