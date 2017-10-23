<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP SUCCESS</title>
</head>
<body>
	<?php 
		$host ="localhost";
		$user="root";
		$password="";
		$email=$_POST['email'];
		$nama_lengkap=$_POST['nama'];
		$username=$_POST['username'];
		$pass=$_POST['pssword'];

		$con=mysqli_connect($host,$user,$password);
		mysqli_select_db ($con,'dbform');
		$sql="insert into tbdaftar values ('$email','$nama_lengkap','$username','$pass')";
		$hasil=mysqli_query ($con,$sql);

 	?>
<p align="center"><font size="5px"><b>Berhasil</b></font></p>
	<table align="center">
		<tr>
			<td>Mobile Number or Email</td><td>:</td><td><?php echo $_POST["email"]; ?></td>
		</tr>
		<tr>
			<td>Full Name</td><td>:</td><td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td>Username</td><td>:</td><td><?php echo $_POST["username"]; ?></td>
		</tr>
		<tr>
			<td>Password</td><td>:</td><td><?php echo $_POST["pssword"]; ?></td>
		</tr>
		</table>
</body>
</html>