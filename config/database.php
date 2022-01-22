 
<?php
// deklarasi parameter koneksi database
$hostname = "178-18-253-214.cprapid.com";
$username = "root";
$password = "";
$database = "db_mahasiswa";

try {
	// buat koneksi database
	$pdo = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
	// set error mode
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	// tampilkan kesalahan jika koneksi gagal
	echo "Koneksi Database Gagal! : ".$e->getMessage();
}
?>