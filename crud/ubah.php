<?php 
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data karyawan berdasarkan id nya
$kar = query("SELECT * FROM datakaryawan WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	# code...
	
	
 	if (ubah($_POST) > 0) {
		# code...
		echo "
			<script>
				alert('selamat data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
		<script>
			alert('yahh data gagal diubah');
			document.location.href = 'index.php';
		</script>
		";
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah atau Update data karyawan</title>
	<style>
		ul li {
			list-style: none;
		}
	</style>
</head>
<body>
	<h1>Tambah data karyawan</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $kar["id"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required value="<?= $kar["nama"]; ?>">
			</li>
			<li>
				<label for="jabatan">Jabatan :</label>
				<input type="text" name="jabatan" id="jabatan" required value="<?= $kar["jabatan"]; ?>">
			</li>
			<li>
				<label for="nik">NIK :</label>
				<input type="text" name="nik" id="nik" required value="<?= $kar["nik"]; ?>">
			</li>
			<li>
				<label for="tanggal_masuk">Tanggal Masuk :</label>
				<input type="text" name="tanggal_masuk" id="tanggal_masuk" required value="<?= $kar["tanggal_masuk"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" value="<?= $kar["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>