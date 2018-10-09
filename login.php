<form action=" " method="POST">
	<table>
		<tr>
			<td>Username : </td>
			<td><input type="text" name="user" count="30"></td>
		</tr>
		<tr>
	 		<td>Password :</td>
	 		<td><input type="Password" name="pass"></td>
	 	</tr>
	 	<tr>
	 		<td></td>
	 		<td><input type="submit" name="submit"></td>
	 	</tr>
	 </table>
	</form>

<?php
session_start();
$rizal=array(
	"user"=>"rizal",
	"pass" =>"234"
);
		if(isset($_POST['submit'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];


			if($user== $rizal["user"] && $pass==$rizal["pass"]){
				$_session['user']=$user;
				header("location:regristasi.php");
			}else{
				header("location:login.php");
			}

		}
?>