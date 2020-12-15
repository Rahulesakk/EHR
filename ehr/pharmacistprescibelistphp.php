<?php
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
    $conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error)
    {
         die("Connection failed: " . $conn->connect_error);
    }		
	$sql="delete from prescribe where adharcardnumber='$_POST[adharcardnumber]'";
	$result=mysqli_query($conn,$sql);
	$result = $conn->query($sql);
	if($result)
		{
			header("location:pharmacistprescribelist.php");
		}
	else
		{
			
		}		
?>