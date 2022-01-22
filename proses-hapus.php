<?php
// Panggil koneksi database
require_once "config/database.php";

$nim = $_GET['nim'];

if (isset($nim)) {
	try {
		// sql statement untuk menghapus data pada tabel is_mahasiswa
        $query = "DELETE FROM is_mahasiswa WHERE nim=:nim";
        // membuat prepared statements
		$stmt = $pdo->prepare($query);

		//mengikat parameter 
		$stmt->bindParam(':nim', $nim);

		// eksekusi query
		$stmt->execute();

        // jika berhasil tampilkan pesan berhasil delete data
		header('location: index.php?alert=3');

		// tutup koneksi database
        $pdo = null;
	} catch (PDOException $e) {
		// tampilkan pesan kesalahan
        echo "ada kesalahan : ".$e->getMessage();
	}
}					
?>