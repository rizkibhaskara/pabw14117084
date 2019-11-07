<?php 
$cari=$_POST['dnama'];
$conn=mysql_connect("localhost","root","");
mysql_selectdb("itera",$conn);
$hasil=mysql_query("delete from mahasiswa where nama like '%$cari%'",$conn);
if ($hasil) {
	echo "DATA MAHASISWA BERHASIL DIHAPUS";
}
 ?>