<?php
	include "database.php";
	$db = new database();
?>

<h1><center>Aplikasi Penilaian Siswa</center></h1>
<h3>Data Guru</h3>

<a href="input_guru.php">Tambah Data Guru</a>
<table border="1">
	<tr>
		<th>No</th>
        <th>Nip</th> 
        <th>Nama Guru</th> 
        <th>Tempat Lahir</th> 
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Kode Matapelajaran</th>
        <th>Nama Matapelajaran</th>
        <th>Opsi</th>
	</tr>
<?php
	$no = 1;
	if(!empty($db->tampil_guru())){
		foreach($db->tampil_guru() as $d) { ?>
		
			<tr>
				<td><?php echo $no++; ?> </td>
				<td><?php echo $d['nip']; ?> </td>
				<td><?php echo $d['nm_guru']; ?> </td>
				<td><?php echo $d['tmp_lahir_guru']; ?> </td>
				<td><?php echo $d['tgl_lahir_guru']; ?> </td>
				<td><?php echo $d['jkel_guru']; ?> </td>
				<td><?php echo $d['alamat']; ?> </td>
				<td><?php echo $d['telp']; ?> </td>
				<td><?php echo $d['kd_mapel']; ?> </td>
				<td><?php echo $d['nm_mapel']; ?> </td>
				<td>
					<a href="edit_guru.php?nip=<?php echo $d['nip']; ?>
					&aksi=edit_guru">edit | </a>
					<a href="proses.php?nip=<?php echo $d['nip']; ?>
					&aksi=hapus_guru">Hapus </a>
				</td>
			</tr>
	<?php	}
	}
	?>
</table>