<?php
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";

	$conn = new mysqli($servername, $username, $password, $dbname);
	$drug = mysqli_real_escape_string($conn, $_POST['drug']);
	$m_d = mysqli_real_escape_string($conn, $_POST['m_d']);
	$e_d = mysqli_real_escape_string($conn, $_POST['e_d']);
	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
	$sql="Update drugs set m_d='$m_d',e_d='$e_d',quantity='$quantity' where drug='$drug'";
	$result=mysqli_query($conn,$sql);
	$result = $conn->query($sql);
	if($result)
	{
		header("location:pharmacistviewdrugs.php");
	}
	else
	{
	}
?>