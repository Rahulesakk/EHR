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
	$sql="insert into drugs (drug,m_d,e_d,quantity)VALUES ('$drug','$m_d','$e_d','$quantity')";
	if ($conn->query($sql) === TRUE) 
		{
			header("location:pharmacistviewdrugs.php");		
		} 
	else
		{
            header("location:pharmacistviewdrugs.php"); 		
		}
?>