<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<center>
		<h2><p>Regristasi Mahasiswa Baru</p></h2>
	<form action="proses.php" method="POST">
		<table>

			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" maxlength="35"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" maxlength="10"></td>
			</tr>
		
			<tr>
				<td>Kelas</td>
				<td><input type="radio" name="Kelas" value="D3 MI 41 01" >D3 MI 41 01</td><td><input type="radio" name="Kelas" value="D3 MI 41 02" >D3 MI 41 02</td><td><input type="radio" name="Kelas" value="D3 MI 41 03" >D3 MI 41 03</td><td><input type="radio" name="Kelas" value="D3 MI 41 04" >D3 MI 41 04</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jeniskelamin" value="Male" required="">Male<br></td>
				<td><input type="radio" name="jeniskelamin" value="Female">Female<br></td>
			</tr>
			<tr>
				<td><b>hobi</b></td>
				<td>
				<input type="checkbox" name="hobi" value="Tidur">Tidur <br>
				<input type="checkbox" name="hobi" value="Makan">Makan 
			</td>
			<td>
				<input type="checkbox" name="hobi" value="Main Bola">Main bola<br>
				<input type="checkbox" name="hobi" value="Membaca">Membaca
			</td>
			<td>
				<input type="checkbox" name="hobi" value="Main">Main<br>
				<input type="checkbox" name="hobi" value="Traveling">Traveling
			</td>

			<td>
				<input type="checkbox" name="hobi" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi" value="Other Hobby">Dan lain-lain
			</td>
		    </tr>
			<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select>
    			</td>
    		</tr>
			
			<tr>
				<td>Alamat</td>
				<td><textarea style="height: 100;width: 150;" name="Alamat"></textarea>
			</tr>
		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$Kelas=$_POST['Kelas'];
		$jeniskelamin=$_POST['jeniskelamin'];
	    $hobi=implode(", ", $_POST['hobi']);
		$fakultas=$_POST['fakultas'];
		$Alamat=$_POST['Alamat'];
		$jumlahobi=count($hobi);

		for($x=0;$x<$jumlahobi;$x++){
			mysql_query("insert into data values('','$hobi[$x]')");
		}
		
		$error=array();
		if(strlen($_POST['nim']) != 10){
			$error['nim']=="Harus 10";
		} if(strlen($_POST['nama']) <= 25){
			$error['nama']=="Harus 25";
		} if(empty($email)){
			$error['email']=="Email harus diisi";
		}if(empty($progstud)){
			$error['studi']=="Program Studi harus diisi";
		}if(empty($jenisk)){
			$error['jeniskelamin']=="Jenis Kelamin harus diisi";
		}if(empty($hobi)){
			$error['hobi']=="Hobby harus diisi";
		}if(empty($foto)){
			$error['poto']=="Foto harus diisi";
		}
}
?>

	