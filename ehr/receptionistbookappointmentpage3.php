<?php 
    include ('receptionistindexpage.php');
	session_start();
	$num=$_SESSION['np'];
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql="SELECT * FROM adharcarddetails WHERE adharcardnumber='$num' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result) == 1)
		{			
			echo	"<img"." src=" . $row['image'] ." style='position:relative;left:1125px;top:115px;width:100px;height:100px;border:solid black 2px;'   />";
			$adharcardnumber=$row['adharcardnumber'];
			$_SESSION['number']=$adharcardnumber;
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

<html>
    <head>
        <style>
        b
        {
	        font-size:22px;
        }
        input,textarea
        {               
            width:350px;
            height:30px;
            font-size:20px;
            border-radius:25px;
            text-align:center;
            position:relative;
            left:450px;
        }
        </style>
    </head>
    <body style="background-color:AliceBlue">
        <div style="position:fixed;left:300px;top:80px;">
            <form>
                <br>
                <br>
                <input  id="text" type="text" value='<?php echo $adharcardnumber; ?>' readonly />
				<br>			     
				<br>
                <input  id="Text1" type="text" value='<?php echo $firstname; ?>' readonly />
				<br>	
				<br>				
               <input  id="Text" type="text" value='<?php echo $lastname; ?>' readonly />
				<br>
				<br>				
                <input  id="Text" type="text" value='<?php echo $gender; ?>' readonly />
				<br>
				<br>			
                <input  id="birth_date" type="text" value='<?php echo $dob; ?>' readonly />
				<br>
				<br>			
                <input  id="age" type="text" value='<?php echo $age; ?>' readonly />
				<br>
				<br>			
                <input id="text" type="text" value='<?php echo $phonenumber; ?>' readonly />
				<br>
				<br>				
                <Textarea style="font-size:20px;" rows="2" type="text" readonly ><?php echo $adress; ?></Textarea>
				<br>
				<br>				
                <input  id="text" type="text" value='<?php echo $state; ?>' readonly />
				<br>
				<a  href="receptionistbookappointmentpage4.php">
			    <input style="position:relative;left:550px;margin-top:30px;background-color:black;color:red;width:150px;height:50px;" type="button" value="Submit" /></a>	                
        </form>
    </body>
</html>