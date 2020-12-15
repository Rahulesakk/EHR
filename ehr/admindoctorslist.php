<?php include('adminindexpage.php');?>
<!doctype html>
    <html>
	    <head>
	        <title>View Doctors</title>
	        <style>
	            body
	            {
	                background-color:#F8F8F8;
	            }
	            table
	            {
                    height:350px;
                    background-color:white;
                    display: inline-block;
                    width: 100%;
                    overflow: auto;
	            }
	            th
	            {
	                height:50px;
	            }
	            table,td, th
	            {
	                border:1px solid #c2c2a3;
                    text-align:center;
	            }
	        </style>
	    </head>
	    <body>
	        <div style="position:fixed;left:300px;top:80px;">
		        <h1>Doctor's list</h1>
			    <hr>
				    <div style="width:1150px;height:425px;border:0.5px white;padding:25px;margin:10px;background-color:white;">
					    <div >Doctor's list</div>
						<hr>
						<br>
						<br>
						<table border="1" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th style="width:25px;">#</th>
									<th style="width:300px;">Doctor Name</th>
									<th style="width:200px;">Moblie Number</th>
									<th style="width:200px;">Department</th>
									<th style="width:200px;">Consultancy Charge</th>
									<th style="width:200px;">Education</th>												
								</tr>
							</thead>
							<tbody>
<?php $sql = "SELECT * from  doctor";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				
?>	
								<tr>
									<td style="width:25px;"><?php echo htmlentities($cnt);?></td>
									<td style="width:300px;"><?php echo htmlentities($result->doctorname);?></td>
									<td style="width:200px;"><?php echo htmlentities($result->moblienumber);?></td>
									<td style="width:200px;"><?php echo htmlentities($result->Department);?></td>
									<td style="width:200px;"><?php echo htmlentities($result->consultancycharge);?></td>
									<td style="width:200px;"><?php echo htmlentities($result->education);?></td>
								</tr>	
<?php $cnt=$cnt+1; }} ?>								
						</tbody>
					</table>								
				</div>											
			</div>
		</body>
    </html>