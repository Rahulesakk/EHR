<?php 
include ('doctorindexpage2.php');
?>
<!doctype html>
<html>
    <head>
        <title>Appointment Pending</title>
        <style>
            #issue
                {
                     padding:0.6em 2em;
                     border-radius: 8px;
                     color:#fff;
                     background-color:#c62828;
                     font-size:1.1em;
                     border:0;
                     cursor:pointer;
                     margin:1em;
                }
            #exam
            {
                    padding:0.6em 2em;
                     border-radius: 8px;
                     color:blank;                   
                     font-size:1.1em;
                     border:0;
                     cursor:pointer;
                     margin:1em;

            }
        </style>
<?php
function bgc($adharcardnumber) 
{
$servername = "sql310.epizy.com";
$username = "epiz_26370859";
$password = "qh0aetllFTM";
$dbname = "epiz_26370859_mainproject";
$conn = new mysqli($servername, $username, $password, $dbname);
$status01=$conn->query("select * from lab where adharcardnumber='$adharcardnumber' and (status=0 or status=1)");
$status0=$conn->query("select * from lab where adharcardnumber='$adharcardnumber' and status=0");
$status1=$conn->query("select * from lab where adharcardnumber='$adharcardnumber' and status=1");
if($status01->num_rows ==0)
{		
    echo "#DCDCDC";
}
else if($status0->num_rows !=0)
{			
    echo "red";
}
else if($status1->num_rows !=0)
{			
    echo "green";
}
}
?>
    </head>
    <body>
        <div style="position:fixed;left:300px;top:80px;">
			<h1>List of Patients</h1>
			<hr>
            	<div style="width:1150px;height:425px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;">
					<h1>Patient List</h1>
						<hr>
						<br>
						<br>
						<table  border="1" cellspacing="0">
							<thead>
                            	<tr height="75">
									<th style="width:50px;">#</th>
									<th style="width:250px;">Name</th>
									<th style="width:100px;"> Age</th>
									<th style="width:250px;">History</th>
									<th style="width:250px;">Exam</th>
									<th style="width:250px;">Prescibe</th>												
								</tr>
							</thead>
						    <tbody>
<?php
 $sql = "SELECT * FROM adharcarddetails as ad INNER JOIN appointment as ap ON ad.adharcardnumber=ap.adharcardnumber INNER JOIN history as hs ON ad.adharcardnumber=hs.adharcardnumber  where roomthatalloted='Room2'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>	
							<tr height="75">
								<td style="width:50px;"  align="center"><?php echo htmlentities($cnt);?></td>
								<td style="width:250px;" align="center"><?php echo htmlentities($result->firstname);?></td>
								<td style="width:100px;" align="center"><?php echo htmlentities($result->age);?></td>
								<td style="width:250px;" align="center"><p><a style="text-decoration:none;"
	        							href="<?php echo htmlentities($result->report);?>" target="_blank"> Click Here </a></p></td>
<?php $adcno=$result->adharcardnumber;?>
								<form action="doctorexampage2.php" method="post" >
								<td align='center'><button id="exam" style="background-color:<?php bgc($adcno)?>";  value='<?php echo $adcno ?>' name='adharcardnumber' >Exam  </button></td>
								</form>
								<form action="doctorprescribepage2.php" method="post" >
								<td align='center'><button  id="issue"  value='<?php echo $adcno?>' name='adharcardnumber' >Prescribe </button></td>
								</form>
							</tr>							
						<?php $cnt=$cnt+1; }} ?>							
					</tbody>
				</table>								
			</div>											
		</div>
	</body>
</html>