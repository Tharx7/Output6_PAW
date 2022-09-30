<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Tambah Mahasiswa</title>
</head>
<body>
	
<h1> Form Tambah Mahasiswa </h1>
	<form method="post" action="action.php">
		ID Mahasiswa : <input type="number" name="id_mhs"><br>
		Nama Mahasiswa : <input type="text" name="nama_mhs"><br>
		Prodi Mahasiswa : <input type="number" name="nama_prodi" min="1" max="4"><br>
		Alamat Mahasiswa : <input type="text" name="alamat_mhs"><br>
		<button type="submit">Kirim</button>
	</form>

</body>
</html>