<?php
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
    $conn = new mysqli($servername, $username, $password, $dbname);
		
	$name = mysqli_real_escape_string($conn, $_POST['username']);
	$passwd = mysqli_real_escape_string($conn, $_POST['password']);
	$sql="SELECT * FROM login where id='6' and username='$name' and password='$passwd'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result)==1)
		{
			header("location:adminindexpage.php");
		}
	else
		{
			header("location:adminloginpage.php");
		}
?>