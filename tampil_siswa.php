<?php
	include "database.php";
	$db = new database();
?>

<h1><center>Aplikasi Penilaian Siswa</center></h1>
<h3>Data Siswa</h3>

<a href="input_siswa.php">Tambah Data Siswa</a>
<table border="1">
	<tr>
		<th>No</th>
        <th>Nis</th> 
        <th>Nama Siswa</th> 
        <th>Tempat Lahir</th> 
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Nama Wali</th>
        <th>Kode Kelas</th>
        <th>Username</th>
        <th>Password</th>
        <th>Opsi</th>
	</tr>
<?php
	$no = 1;
	if(!empty($db->tampil_siswa())){
		foreach($db->tampil_siswa() as $d) { ?>
		
			<tr>
				<td><?php echo $no++; ?> </td>
				<td><?php echo $d['nis']; ?> </td>
				<td><?php echo $d['nm_siswa']; ?> </td>
				<td><?php echo $d['tmp_lahir']; ?> </td>
				<td><?php echo $d['tgl_lahir']; ?> </td>
				<td><?php echo $d['jkel']; ?> </td>
				<td><?php echo $d['alamat']; ?> </td>
				<td><?php echo $d['telp']; ?> </td>
				<td><?php echo $d['nm_wali']; ?> </td>
				<td><?php echo $d['kd_kelas']; ?> </td>
				<td><?php echo $d['username']; ?> </td>
				<td><?php echo $d['password']; ?> </td>
				<td>
					<a href="edit_siswa.php?nis=<?php echo $d['nis']; ?>
					&aksi=edit_siswa">edit | </a>
					<a href="proses.php?nis=<?php echo $d['nis']; ?>
					&aksi=hapus_siswa">Hapus </a>
				</td>
			</tr>
	<?php	}
	}
	?>
</table>
