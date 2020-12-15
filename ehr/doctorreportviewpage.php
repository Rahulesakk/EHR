<?php
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
    $dbname = "epiz_26370859_mainproject";
	$conn = new mysqli($servername, $username, $password, $dbname);
     if(isset($_REQUEST['adharcardnumber']))
	{
	$adharcardnumber=$_GET['adharcardnumber'];
	$sql="SELECT * FROM lab WHERE adharcardnumber='$adharcardnumber' and status=1 ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result) == 1)
	{			
	$report=$row['report']; 
	$file = $report; 
	$filename = $report;  
	header('Content-type: application/pdf'); 
	header('Content-Disposition: inline; filename="' . $filename . '"'); 
	header('Content-Transfer-Encoding: binary'); 
	header('Accept-Ranges: bytes'); 

	// Read the file 
	@readfile($file); 
	} 
	}
	$sql1="update lab set status=2 where adharcardnumber='$adharcardnumber'";
	$result=mysqli_query($conn,$sql1);
?>

