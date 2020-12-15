<?php include('pharmacistindexpage.php');?>
<!doctype html>
    <html>
    	<head>
	        <title>View Drugs</title>
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
                width:100%;
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
		        <h1>View Drug's</h1>
			    <hr>
				<div style="width:1150px;height:425px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;">
					<div >View Drug's</div>
						<hr>
						<br>
						<br>
						<table border="1" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th style="width:25px;">#</th>
									<th style="width:300px;">Name</th>
									<th style="width:200px;">Manufacture Date</th>
									<th style="width:200px;">Expiry Date</th>
									<th style="width:200px;">Quantity</th>
									<th style="width:200px;">Remaining Days</th>	
									<th style="width:300px;">Action</th>												
								</tr>
							</thead>
							<tbody>
<?php $sql = "SELECT * from  drugs";
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
									<td style="width:300px;"><?php echo htmlentities($result->drug);?></td>
									<td style="width:200px;"><?php echo htmlentities($result->m_d);?></td>
									<td style="width:200px;"><?php echo htmlentities($result->e_d);?></td>
									<td style="width:200px;"><?php echo htmlentities($result->quantity);?></td>
<?php
$future = strtotime($result->e_d);
$now = time();
$timeleft = $future-$now;
$daysleft = round((($timeleft/24)/60)/60);
?>
									<td style="width:200px;"><?php echo htmlentities($daysleft)?></td>
									<td style="width:300px;"><a style="color:green;" href="pharmacistdrugupdate.php?drug=<?php echo htmlentities($result->drug);?>"                                                                     onclick="return confirm('Do you really want to Update Details??')"> Update</a> /
									<a style="color:red;" href="pharmacistdrugdelete.php?drug=<?php echo htmlentities($result->drug);?>"                                                                                                onclick="return confirm('Do you really want to delete this Drugs??')"> Delete</a>
                                    </td>
								</tr>	
<?php $cnt=$cnt+1; }} ?>								
						</tbody>
					</table>								
				</div>											
			</div>
		</body>
</html>