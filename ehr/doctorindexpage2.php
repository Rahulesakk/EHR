<?php 
define('DB_HOST','sql310.epizy.com');
define('DB_USER','epiz_26370859');
define('DB_PASS','qh0aetllFTM');
define('DB_NAME','epiz_26370859_mainproject');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
<!doctype html>
	<html>
	    <title>EHR Based Healthcare System</title>
	    <head>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <style>
			.sidenav
            {
			  height:100%;
			  width:250px;
			  position:fixed;
			  top:60px;
			  left:0px;
			  background-color:rgb(44, 49, 54);
			  overflow-x:hidden;
			  padding-top:20px;
			}
			.sidenav a
             {
			  text-decoration:none;
			  font-size:18px;
			  color:white;
			  display:block;
			}
			ul
            {
                list-style-type:none;
            }
			i
            {
			color:#babfbb;
			}				
	    </style>
	</head>
	<body>
        <div class="adminheader" style="position:fixed;top:0px;left:0px;width:100%;height:61px;background-color:#3c4545">
	        <div>
	            <h1  style="position:fixed;font-size:28px;color:#34ebe8;">&nbsp &nbsp EHR Based Healthcare System | Doctor </h1>  
	        </div>
	        <div>
	        <a href="indexpage.php"><button  style="position:fixed;border:none;left:1338px;width:200px;height:60px;background-color:rgb(44, 49, 54);border:none;color:red;font-size:22px;">             <i  class="fa fa-user-circle-o" style="font-size:30px;color:red"></i>&nbsp Logout</button>	</a>
	         </div>
	    </div>
	    <div class="sidenav">
	        <ul>
				<li style="font-size:26px;color:#34ebe8;">&nbsp &nbsp &nbsp Main Menu</li>
				<br>
				<br>
				<br>
				<li><a href="doctorappoinmentpendingpage2.php"><i class="fa fa-user-o"></i>&nbsp Appointment Pending</a></li>	
				<br>
				<br>
				<li><a href="doctordiseasepredictorpage2.php"><i class="fa fa-tachometer"></i>&nbsp Disease Predictor </a></li>
				<br>
				<br>
				<li><a href="doctorupdateavailabilitypage2.php"><i class="fa fa-refresh"></i>&nbsp Update Availability</a></li>				
	        </ul>
	    </div>
	</body>
</html>