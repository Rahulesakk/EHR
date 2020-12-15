 <?php 
    include ('doctorindexpage1.php'); 
    $adharcardnumber = $_POST['adharcardnumber'];
?>
<!doctype html>
<html>
	<head>
	    <title>Exam</title>
        <style>
        </style>
	</head>
    <body>
<?php 
function bgc($adharcardnumber) 
{
$servername = "sql310.epizy.com";
$username = "epiz_26370859";
$password = "qh0aetllFTM";
$dbname = "epiz_26370859_mainproject";
$conn = new mysqli($servername, $username, $password, $dbname);
$status1=$conn->query("select * from lab where adharcardnumber='$adharcardnumber' and status=1");
if($status1->num_rows !=0)
{			
echo "none";
}
else
{
echo "normal";	
}
}
function rep($adharcardnumber) 
{
$servername = "sql310.epizy.com";
$username = "epiz_26370859";
$password = "qh0aetllFTM";
$dbname = "epiz_26370859_mainproject";
$conn = new mysqli($servername, $username, $password, $dbname);
$status1=$conn->query("select * from lab where adharcardnumber='$adharcardnumber' and status=1");
if($status1->num_rows !=0)
{			
echo "normal";
}
else
{
echo "none";	
}
}
?>
	<div style="position:fixed;left:300px;top:80px;">
		<div style="width:1150px;height:500px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;display:<?php bgc($adharcardnumber)?>";>
			<form method="post" action="doctorexampagephp1.php" enctype='multipart/form-data'>
					<div align="center" style="margin-bottom:10px;margin-top:100px;">
						<h2> Choose Recommended Test </h2><br>
						<input style="display:none" type="text" value="<?php echo" $adharcardnumber";?>" name="adharcardnumber" >
		                <input style="position:fixed;left:850px;" type='checkbox' id='test1' name='test1' value='1'><strong style="position:fixed;left:875px;"> Complete Blood Count</strong><br>
		                <input style="position:fixed;left:850px;" type='checkbox' id='test2' name='test2' value='1'><strong style="position:fixed;left:875px;"> Blood Pressure</strong><br>
		                <input style="position:fixed;left:850px;" type='checkbox' id='test3' name='test3' value='1'><strong style="position:fixed;left:875px;"> Blood Sugar</strong><br>
		                <input style="position:fixed;left:850px;" type='checkbox' id='test4' name='test4' value='1'><strong style="position:fixed;left:875px;"> ECG</strong><br>
						<input style="position:fixed;left:850px;" type='checkbox' id='test5' name='test5' value='1'><strong style="position:fixed;left:875px;"> Urineanalysis</strong><br>
	         			<input style="position:fixed;left:850px;" type='checkbox' id='test6' name='test6' value='1'><strong style="position:fixed;left:875px;"> Thyroid</strong><br>
	         			 <br>
						 <br>
						 <br>
						<input style="background-color:black;color:red;width:100px;height:50px;border-radius:25px;" type="submit"  value="Send To Lab"  name="submit">&nbsp;
					</div>
			</form>
		</div>
		<div style="width:1150px;height:500px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;display:<?php rep($adharcardnumber)?>";>
			<p ><a  style="text-decoration:none;position:fixed;left:750px;bottom:350px;font-size:35px;" href="doctorreportviewpage.php?adharcardnumber=<?php echo $adharcardnumber;?>"                  target="_blank" > Click Here For Lab Report</a></p>
		</div>
	</div>
	</body>
</html>