<?php
// Panggil koneksi database
require_once "../config/koneksi.php";

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	
	// perintah query untuk menghapus data pada tabel guru
	$query = mysqli_query($koneksi, "DELETE FROM guru WHERE id='$id'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: daftar_guru.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: daftar_guru.php?alert=1');
	}	
}							
?>