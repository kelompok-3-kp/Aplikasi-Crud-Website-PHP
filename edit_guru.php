<?php
	include "database.php";
	$db = new database();
?>

<h3>Edit Data Guru</h3>
<form action="proses.php?aksi=update_guru" method="POST">
	<?php
		foreach($db->edit_guru($_GET['nip']) as $d) { ?>
			<table>
				<tr>
					<!-- <td>Nis Siswa</td>
					<td>
						<input type="text" name="nis" value="<?php echo $d['nis'] ?>">
					</td>
				</tr> -->
				<tr>
					<td>Nama Guru</td>
					<td>
						<input type="hidden" name="nip" value="<?php echo $d['nip'] ?>">
						<input type="text" name="nm_guru" value="<?php echo $d['nm_guru'] ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>
						<input type="text" name="tmp_lahir_guru" value="<?php echo $d['tmp_lahir_guru'] ?>">
					</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>
						<input type="date" name="tgl_lahir_guru" value="<?php echo $d['tgl_lahir_guru'] ?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="text" name="jkel_guru" value="<?php echo $d['jkel_guru'] ?>">
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
					<td>Kode Matapelajaran</td>
					<td>
						<input type="text" name="kd_mapel" value="<?php echo $d['kd_mapel'] ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Matapelajaran</td>
					<td>
						<input type="text" name="nm_mapel" value="<?php echo $d['nm_mapel'] ?>">
					</td>
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