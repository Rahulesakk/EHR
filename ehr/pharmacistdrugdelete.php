<?php 
    $servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
	$conn = new mysqli($servername, $username, $password, $dbname);
		
    if(isset($_REQUEST['drug']))
	{
        $drug=$_GET['drug'];
        $sql="delete from drugs where drug='$drug'";
	    $result=mysqli_query($conn,$sql);
		$result = $conn->query($sql);
		if($result)
		{
			header("location:pharmacistviewdrugs.php");
		}
		else
		{	
		}
		$conn->close();
	}
?>