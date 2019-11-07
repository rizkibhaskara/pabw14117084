<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Koneksi database dengan mysql_fetch_array</h1>
<?php 
$conn=mysql_connect ("localhost","root","") or die ("koneksi gagal");
mysql_selectdb("minggu8",$conn);
$hasil=mysql_query("select *from liga",$conn);
while ($row=mysql_fetch_array($hasil)) {
	echo "Liga " .$row["negara"];
	echo " mempunyai " .$row[2];
	echo " wakil di liga champion <br>";
}
 ?>
</body>
</html>