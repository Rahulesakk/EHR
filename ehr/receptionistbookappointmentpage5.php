<?php 
    include ('receptionistindexpage.php');
	session_start();
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$roomalloted=$_GET['w1'];
	$number=$_SESSION['number'];
    $conn = new mysqli($servername, $username, $password, $dbname); 
	if ($conn->connect_error)
     {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql ="INSERT into appointment(adharcardnumber,roomthatalloted)values ('$number','$roomalloted')";
	if ($conn->query($sql) === TRUE) {
	}
     else
    {
		echo '<script>alert("Appointment Was Unsuccessfull")</script>';
        header("location:receptionistbookappointmentpage1.php");
	}
		
	$sql="SELECT * FROM adharcarddetails WHERE adharcardnumber='$number' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result) == 1)
	    {			
			$adharcardnumber=$row['adharcardnumber'];
			$firstname= $row['firstname'];	
			$lastname=$row['lastname'];
			$dob=$row['dob'];
			$age=$row['age'];
			$gender=$row['gender'];
			$phonenumber=$row['phonenumber'];
			$father=$row['fathername'];
			$adress=$row['address'];
			$state=$row['state'];	
		}
	$conn->close();
?>
<!DOCTYPE HTML>
<html>
	<head>
	    <script>
	       function printDiv(divName) 
           {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
	    </script>
	</head>
	<body>
	    <div id="printableArea">
	        <?php
            echo "<h1 style='position:relative;top:80px;left:625px;'>EHR Based Healthcare System</h1>";
            echo "<b style='font-size:22px;position:relative;left:400px;top:100px'>Name: ".$firstname."</b>";
            echo "<b style='font-size:22px;position:relative;left:600px;top:100px'>Age:".$age."</b>";
            echo "<b style='font-size:22px;position:relative;left:800px;top:100px'>Gender: ".$gender."</b>";
            echo "<b style='font-size:22px;position:relative;left:50px;top:150px'>Alloted Room: ".$roomalloted."</b>";
            echo "<b style='font-size:22px;position:relative;left:190px;top:150px'>Consultancy Fees:250</b>";
	        ?>
	    </div>
        <input style="position:relative;left:750px;top:250px;background-color:black;color:red;height:50px;width:100px;border-radius:25px;" type="button" onclick="printDiv('printableArea')" value="Print"/>   
    </body>
</html>












