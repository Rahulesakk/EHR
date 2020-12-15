<?php
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
    $conn = new mysqli($servername, $username, $password, $dbname);
		
	$name = mysqli_real_escape_string($conn, $_POST['username']);
	$passwd = mysqli_real_escape_string($conn, $_POST['password']);
	if ($name=='abc' AND $passwd==123)
        {
			header("location:doctorindexpage1.php");
	    }
	else if ($name=='abcd' AND $passwd==1234) 
        {
			header("location:doctorindexpage2.php");
		}
	else
		{
			header("location:doctorloginpage.php");
		}
?>