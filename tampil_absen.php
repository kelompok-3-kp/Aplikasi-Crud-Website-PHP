<?php
	include "database.php";
	$db = new database();
?>

<h1><center>Aplikasi Penilaian Siswa</center></h1>
<h3>Data Absensi Siswa</h3>

<a href="input_absen.php">Tambah Data Absensi</a>
<table border="1">
	<tr>
		<th>No</th>
        <th>Kode Absen</th> 
        <th>Bulan</th> 
        <th>Nis</th> 
        <th>Nama Siswa</th>
        <th>Jumlah Hadir</th>
        <th>Alfa</th>
        <th>Izin</th>
        <th>Sakit</th>
        <th>Opsi</th>
	</tr>
<?php
	$no = 1;
	if(!empty($db->tampil_absen())){
		foreach($db->tampil_absen() as $d) { ?>
		
			<tr>
				<td><?php echo $no++; ?> </td>
				<td><?php echo $d['kd_absen']; ?> </td>
				<td><?php echo $d['nm_bulan']; ?> </td>
				<td><?php echo $d['nis']; ?> </td>
				<td><?php echo $d['nm_siswa']; ?> </td>
				<td><?php echo $d['jml_hadir']; ?> </td>
				<td><?php echo $d['alfa']; ?> </td>
				<td><?php echo $d['izin']; ?> </td>
				<td><?php echo $d['sakit']; ?> </td>
				<td>
					<a href="edit_absen.php?kd_absen=<?php echo $d['kd_absen']; ?>
					&aksi=edit_absen">edit | </a>
					<a href="proses.php?kd_absen=<?php echo $d['kd_absen']; ?>
					&aksi=hapus_absen">Hapus </a>
				</td>
			</tr>
	<?php	}
	}
	?>
</table>