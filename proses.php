<?php
	$hostname  = "localhost";
	$username = "root";
	$pass     = "";
	$db       = "mahasiswa";
	$con     = new mysqli($hostname, $username, $pass, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
		if (isset($_POST['submit'])) {
			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$Kelas=$_POST['Kelas'];
			$jeniskelamin=$_POST['jeniskelamin'];
			$fakultas=$_POST['fakultas'];
			$Alamat=$_POST['Alamat'];
		
	
	$sql="INSERT INTO mahasiswaa(nama,nim,Kelas,jeniskelamin,hobi,fakultas,Alamat) 
	VALUES ('$nama','$nim','$Kelas','$jeniskelamin','$hobi','$fakultas','$Alamat')";
	if(mysqli_query($con,$sql)){
		echo "Database sudah Masuk";
	}else{
		die(mysqli_error($con));
		echo "Database Salah";
	}
}
	?>