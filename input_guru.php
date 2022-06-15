<?php
	include "database.php";
	$db = new database();
?>

<h2>Input Data Guru</h2>

<form action="proses.php?aksi=tambah_guru" method="POST">
	<table>
		<tr>
			<td>NIP</td>
			<td><input type="text" name="nip"></td>
		</tr>
		<tr>
			<td>Nama Guru</td>
			<td><input type="text" name="nm_guru"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="tmp_lahir_guru"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgl_lahir_guru"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text" name="jkel_guru"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type="text" name="telp"></td>
		</tr>
		<tr>
			<td>Kode Matapelajaran</td>
			<td><input type="text" name="kd_mapel"></td>
		</tr>
		<tr>
			<td>Nama Matapelajaran</td>
			<td><input type="text" name="nm_mapel"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Input Data">
				<input type="button" name="kembali" value="Kembali">
			</td>
		</tr>
	</table>
</form>