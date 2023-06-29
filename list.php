<?php
include 'database.php';

if(isset($_POST['save'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$job = $_POST['job'];	

	$simpan = "INSERT INTO uasweb (first_name, last_name, email, nohp, alamat, job)
	VALUES ('$first_name', '$last_name' ,'$email','$nohp', '$alamat', '$job')";

	$result = mysqli_query($conn,$simpan);

	if ($result) {
		echo "<script>alert('Data Berhasil Di Tambahkan');window.location='buy.php</script>";
	}
}
?>