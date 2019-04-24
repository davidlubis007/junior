<?php 
session_start();

if( !isset($_SESSION["login"]) ){
    header("location: login.php");
    exit;
}

require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
	



	//cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ){
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index.php';
			</script>
		";
	} else{
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index.php';
			</script>
		";
	}

	}
 ?>

<html>
<head>
	<title>tambah data pelanggan</title>
</head>
<body>
<h1>tambah data pelanggan</h1>

<form action="" method="post">
	<ul>
		<li>
			<label for="nama">nama</label>
			<input type="teext" name="nama" id="nama"required>
		</li>
		<li>
			<label for="umur">umur</label>
			<input type="teext" name="umur" id="umur" required>
		</li>
		<li>
			<label for="asalDaerah">asalDaerah</label>
			<input type="teext" name="asalDaerah" id="asalDaerah" required>
		</li>
		<li>
			<label for="noHp">noHp</label>
			<input type="teext" name="noHp" id="noHp">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>	
	</ul>
</form>
</body>
</html>