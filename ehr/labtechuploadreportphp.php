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
	$report =$_FILES["report"]["name"];
	$report1="images/".$_FILES["report"]["name"];
	move_uploaded_file($_FILES["report"]["tmp_name"],"images/".$_FILES["report"]["name"]);
	$sql="update lab set report='$report1',status=1 where adharcardnumber='$_POST[adharcardnumber]'";
	$result=mysqli_query($conn,$sql);
	$result = $conn->query($sql);
	if($result)
	{
		header("location:labtechuploadreport.php");
	}
	else
	{
	}	
?>