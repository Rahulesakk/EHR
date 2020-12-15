<?php 
    include ('receptionistindexpage.php');
    session_start();
	$servername = "sql310.epizy.com";
	$username = "epiz_26370859";
	$password = "qh0aetllFTM";
	$dbname = "epiz_26370859_mainproject";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$number=$_SESSION['number'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
    else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
?>		
<?php
date_default_timezone_set('Asia/Kolkata');
?>
<html>
    <head>
        <style>
        b
        {
	        font-size:22px;
        }
        input
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
<?php
$ra="SELECT * FROM allotment";
$result=mysqli_query($conn,$ra);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) == 1)
{			
$roomavailable = [];
$doctor1=$row['doctor1'];
$doctor2=$row['doctor2'];
if($doctor1 ==1)
{
array_push($roomavailable,"Room1");
}
if($doctor2 ==1)
{
array_push($roomavailable,"Room2");
}
?>			
        <script type="text/javascript">
        var randomStrings = <?php echo json_encode($roomavailable); ?>;
        function RndMsg() 
        {
        var msg = randomStrings[Math.floor(Math.random()*randomStrings.length)];
        alert(msg);
        window.location.href="receptionistbookappointmentpage5.php?w1=" +msg;
        }
        </script>   
<?php } ?>
    </head>
    <body style="background-color:AliceBlue">
        <div style="position:fixed;left:300px;top:80px;">
        <br>
        <br>
        <br>        
            <form>
                <br>
                <br>
                <br>
                <br>
                <b style="position:relative;left:550px;">Doctor Specilization</b><br>
                <input  id="text" type="text" value='OPD' readonly />
				<br>			     
				<br>
				<b style="position:relative;left:550px;">Consultancy Fees</b><br>
                <input id="text" type="text" value='250' readonly />
				<br>	
				<br>
				<b style="position:relative;left:550px;">Date and Time</b><br>
                <input id="text" value='<?php echo date("d/m/yy").' '.date("h:i:s") ?>'/>
				<br>
                <br>	
				<br>
				<br>
				<input style="background-color:black;color:red;width:150px;height:50px;position:relative;left:550px;" id="rm"type="button" value="Submit" name="sessionid" onclick="RndMsg()"/>          
            </form>
        </div>
    </body>
</html>