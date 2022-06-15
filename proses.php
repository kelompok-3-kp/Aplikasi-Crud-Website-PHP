<?php
	include "database.php";
	$db = new database();

	$aksi = $_GET['aksi'];
	if($aksi == "login"){
		$db->cek_login($_POST['username'], ($_POST['password']));

	}else if($aksi == "tambah_siswa"){
		$db->input_siswa($_POST['nis'], $_POST['nm_siswa'], $_POST['tmp_lahir'], $_POST['tgl_lahir'], $_POST['jkel'], $_POST['alamat'], $_POST['telp'], $_POST['nm_wali'], $_POST['kd_kelas'], $_POST['username'], $_POST['password']);
		header("location:tampil_siswa.php");

	}else if($aksi == "hapus_siswa"){
		$db->hapus_siswa($_GET['nis']);
		header("location:tampil_siswa.php");

	}else if($aksi == "update_siswa"){
		$db->update_siswa($_POST['nis'], $_POST['nm_siswa'], $_POST['tmp_lahir'], $_POST['tgl_lahir'], $_POST['jkel'], $_POST['alamat'], $_POST['telp'], $_POST['nm_wali'], $_POST['kd_kelas'], $_POST['username'], $_POST['password']);
		header("location:tampil_siswa.php");

	}else if($aksi == "tambah_guru"){
		$db->input_guru($_POST['nip'], $_POST['nm_guru'], $_POST['tmp_lahir_guru'], $_POST['tgl_lahir_guru'], $_POST['jkel_guru'], $_POST['alamat'], $_POST['telp'], $_POST['kd_mapel'], $_POST['nm_mapel']);
		header("location:tampil_guru.php");

	}else if($aksi == "update_guru"){
		$db->update_guru($_POST['nip'], $_POST['nm_guru'], $_POST['tmp_lahir_guru'], $_POST['tgl_lahir_guru'], $_POST['jkel_guru'], $_POST['alamat'], $_POST['telp'], $_POST['kd_mapel'], $_POST['nm_mapel']);
		header("location:tampil_guru.php");

	}else if($aksi == "hapus_guru"){
		$db->hapus_guru($_GET['nip']);
		header("location:tampil_guru.php");
	}
?>
