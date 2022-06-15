<?php
	include "database.php";
	$db = new database();
?>

<h1><center>Aplikasi Penilaian Siswa</center></h1>
<h3>Data Nilai Siswa</h3>

<a href="input_nilai.php">Tambah Data Nilai</a>
<table border="1">
	<tr>
		<th>No</th>
        <th>Kode Nilai</th> 
        <th>Nis</th> 
        <th>Nama Siswa</th> 
        <th>Kode Matapelajaran</th>
        <th>Nama Matapelajaran</th>
        <th>UTS Ganjil</th>
        <th>UAS Ganjil</th>
        <th>UTS Genap</th>
        <th>UAS Genap</th>
        <th>Opsi</th>
	</tr>
<?php
	$no = 1;
	if(!empty($db->tampil_nilai())){
		foreach($db->tampil_nilai() as $d) { ?>
		
			<tr>
				<td><?php echo $no++; ?> </td>
				<td><center><?php echo $d['kd_nilai']; ?> </center></td>
				<td><?php echo $d['nis']; ?> </td>
				<td><?php echo $d['nm_siswa']; ?> </td>
				<td><center><?php echo $d['kd_mapel']; ?> </center></td>
				<td><?php echo $d['nm_mapel']; ?> </td>
				<td><center><?php echo $d['uts_sem_ganjil']; ?> </center></td>
				<td><center><?php echo $d['uas_sem_ganjil']; ?> </center></td>
				<td><center><?php echo $d['uts_sem_genap']; ?> </center></td>
				<td><center><?php echo $d['uas_sem_genap']; ?> </center></td>
				<td>
					<a href="edit_nilai.php?kd_nilai=<?php echo $d['kd_nilai']; ?>
					&aksi=edit_nilai">edit | </a>
					<a href="proses.php?kd_nilai=<?php echo $d['kd_nilai']; ?>
					&aksi=hapus_nilai">Hapus </a>
				</td>
			</tr>
	<?php	}
	}
	?>
</table>