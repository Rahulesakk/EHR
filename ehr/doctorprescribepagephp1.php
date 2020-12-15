<?php 
    $servername = "sql310.epizy.com";
    $username = "epiz_26370859";
    $password = "qh0aetllFTM";
    $dbname = "epiz_26370859_mainproject";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $adharcardnumber = mysqli_real_escape_string($conn, $_POST['adharcardnumber']);
    $med = mysqli_real_escape_string($conn, $_POST['med']);
    $status=0;
    $sql="insert into prescribe (adharcardnumber,med,status)VALUES ('$adharcardnumber','$med','$status')";
    $result=$conn->query($sql);
    $sql1="delete from appointment where adharcardnumber='$adharcardnumber'";				
    if ($conn->query($sql1) === TRUE) 
		{
			header("location:doctorappoinmentpendingpage1.php");				
		} 
	else
		{	
		}
?>