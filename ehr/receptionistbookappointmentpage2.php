<?php include ('receptionistindexpage.php');
    session_start();
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$num = mysqli_real_escape_string($conn, $_POST["number"]);
	$_SESSION['np']=$num;
	$sql="SELECT * FROM adharcarddetails WHERE adharcardnumber='$num' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result) == 1)
		{					
			header("location:receptionistbookappointmentpage3.php");
		}
	else
		{
			header("location:receptionistpatientregisterpage.php");
		}		
		$conn->close();
?>
