<!DOCTYPE html>
<html>
<head>
	<title>Cari Database</title>
</head>
<body>
<h1>Searching Buku Tamu untuk Database MySQL</h1>
<form action="hasilsearch.php" method="POST">
	<select name="kolom">
		<option value="nama">Nama</option>
		<option value="email">Email</option>
	</select>
Masukkan kata yang anda cari : <input type="text" name="cari">
<input type="submit" value="cari">
</form>
</body>
</html>