<?php
	include "database.php";
	$db = new database();
?>

<h2>Input Data Siswa</h2>

<form action="proses.php?aksi=tambah_siswa" method="POST">
	<table>
		<tr>
			<td>NIS</td>
			<td><input type="text" name="nis"></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><input type="text" name="nm_siswa"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="tmp_lahir"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgl_lahir"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text" name="jkel"></td>
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
			<td>Nama Wali</td>
			<td><input type="text" name="nm_wali"></td>
		</tr>
		<tr>
			<td>Kode Kelas</td>
			<td><input type="text" name="kd_kelas"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Input Data">
				<input type="submit" name="kembali" value="Kembali">
			</td>
		</tr>
	</table>
</form>
