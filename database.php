<?php
	class database{
		var $host = "localhost";
		var $username = "root";
		var $password = "";
		var $db = "databasesekolah";

		function __construct(){
			$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
		}

		function cek_login($username, $password){
			session_start();
 
			$username = $_POST['username'];
			$password = $_POST['password'];

			$data = mysqli_query($this->koneksi,"select * from tbl_admin where username='$username' and password='$password'");
			 
			$cek = mysqli_num_rows($data);
			 
			if($cek > 0){
				$_SESSION['username'] = $username;
				$_SESSION['status'] = "login";
				header("location:tampil_siswa.php");
			}else{
				header("location:login.php?pesan=gagal");
			}
		}

		function input_siswa($nis, $nm_siswa, $tmp_lahir, $tgl_lahir, $jkel, $alamat, $telp, $nm_wali, $kd_kelas, $username, $password){
			mysqli_query($this->koneksi, "insert into tbl_siswa values('$nis', '$nm_siswa', '$tmp_lahir', '$tgl_lahir', '$jkel', '$alamat', '$telp', '$nm_wali', '$kd_kelas', '$username', '$password')");
		}

		function tampil_siswa(){
			$data = mysqli_query($this->koneksi, "select * from tbl_siswa");
			if(mysqli_num_rows($data) > 0){
				while ($d = mysqli_fetch_array($data)) {
					$hasil[] = $d;
				}
				return $hasil;
			}
		}

		function hapus_siswa($nis){
			mysqli_query($this->koneksi, "delete from tbl_siswa where nis = '$nis'");
		}

		function update_siswa($nis, $nm_siswa, $tmp_lahir, $tgl_lahir, $jkel, $alamat, $telp, $nm_wali, $kd_kelas, $username, $password){
			mysqli_query($this->koneksi, "update tbl_siswa set nm_siswa = '$nm_siswa', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', jkel = '$jkel', alamat = '$alamat', telp = '$telp', nm_wali='$nm_wali', kd_kelas='$kd_kelas', username='$username', password='$password' where nis = '$nis'");
		}

		function edit_siswa($nis){
			$data = mysqli_query($this->koneksi, "select * from tbl_siswa where nis = '$nis'");
			if(mysqli_num_rows($data) > 0){
				while ($d = mysqli_fetch_array($data)) {
					$hasil[] = $d;
				}
				return $hasil;
			}
		}

		function input_guru($nip, $nm_guru, $tmp_lahir_guru, $tgl_lahir_guru, $jkel_guru, $alamat, $telp, $kd_mapel, $nm_mapel){
			mysqli_query($this->koneksi, "insert into tbl_guru values('$nip', '$nm_guru', '$tmp_lahir_guru', '$tgl_lahir_guru', '$jkel_guru', '$alamat', '$telp', '$kd_mapel', '$nm_mapel')");
		}

		function tampil_guru(){
			$data = mysqli_query($this->koneksi, "select * from tbl_guru");
			if(mysqli_num_rows($data) > 0){
				while ($d = mysqli_fetch_array($data)) {
					$hasil[] = $d;
				}
				return $hasil;
			}
		}

		function hapus_guru($nip){
			mysqli_query($this->koneksi, "delete from tbl_guru where nip = '$nip'");
		}

		function update_guru($nip, $nm_guru, $tmp_lahir_guru, $tgl_lahir_guru, $jkel_guru, $alamat, $telp, $kd_mapel, $nm_mapel){
			mysqli_query($this->koneksi, "update tbl_guru set nm_guru = '$nm_guru', tmp_lahir_guru = '$tmp_lahir_guru', tgl_lahir_guru = '$tgl_lahir_guru', jkel_guru = '$jkel_guru', alamat = '$alamat', telp = '$telp', kd_mapel='$kd_mapel', nm_mapel='$nm_mapel' where nip = '$nip'");
		}

		function edit_guru($nip){
			$data = mysqli_query($this->koneksi, "select * from tbl_guru where nip = '$nip'");
			if(mysqli_num_rows($data) > 0){
				while ($d = mysqli_fetch_array($data)) {
					$hasil[] = $d;
				}
				return $hasil;
			}
		}

		function tampil_absen(){
			$data = mysqli_query($this->koneksi, "select * from tbl_absen order by nm_siswa");
			if(mysqli_num_rows($data) > 0){
				while ($d = mysqli_fetch_array($data)) {
					$hasil[] = $d;
				}
				return $hasil;
			}
		}

		function tampil_nilai(){
			$data = mysqli_query($this->koneksi, "select * from tbl_nilai order by nm_siswa");
			if(mysqli_num_rows($data) > 0){
				while ($d = mysqli_fetch_array($data)) {
					$hasil[] = $d;
				}
				return $hasil;
			}
		}

	}
?>