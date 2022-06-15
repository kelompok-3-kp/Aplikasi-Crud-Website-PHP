<?php
	include "database.php";
	$db = new database();
?>

<h3>Edit Data Siswa</h3>
<form action="proses.php?aksi=update_siswa" method="POST">
	<?php
		foreach($db->edit_siswa($_GET['nis']) as $d) { ?>
			<table>
				<tr>
					<!-- <td>Nis Siswa</td>
					<td>
						<input type="text" name="nis" value="<?php echo $d['nis'] ?>">
					</td>
				</tr> -->
				<tr>
					<td>Nama Siswa</td>
					<td>
						<input type="hidden" name="nis" value="<?php echo $d['nis'] ?>">
						<input type="text" name="nm_siswa" value="<?php echo $d['nm_siswa'] ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>
						<input type="text" name="tmp_lahir" value="<?php echo $d['tmp_lahir'] ?>">
					</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>
						<input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir'] ?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="text" name="jkel" value="<?php echo $d['jkel'] ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						<input type="text" name="alamat" value="<?php echo $d['alamat'] ?>">
					</td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td>
						<input type="text" name="telp" value="<?php echo $d['telp'] ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Wali</td>
					<td>
						<input type="text" name="nm_wali" value="<?php echo $d['nm_wali'] ?>">
					</td>
				</tr>
				<tr>
					<td>Kode Kelas</td>
					<td>
						<input type="text" name="kd_kelas" value="<?php echo $d['kd_kelas'] ?>">
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username" value="<?php echo $d['username'] ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="text" name="password" value="<?php echo $d['password'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="simpan">
						<input type="button" name="kembali" value="Kembali">
					</td>
				</tr>
			</table>
			<?php } ?>
</form>
