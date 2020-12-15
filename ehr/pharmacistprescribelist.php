<?php include('pharmacistindexpage.php'); ?>
<!doctype html>
    <html>
        <head>
            <title>Prescribe Medicine</title>
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
             </style>
        </head>
        <body>
            <div style="position:fixed;left:300px;top:80px;">
				<h1>Prescribe Medicine</h1>
				<hr>
					<div style="width:1150px;height:425px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;">
						<h1>Prescribe Medicine</h1>
						<hr>
						<br>
						<br>
						<table  border="1" cellspacing="0">
							<thead>
								<tr height="75">
								    <th style="width:50px;">#</th>
					  			    <th style="width:250px;">Name</th>
									<th style="width:150px;">Age</th>
									<th style="width:150px;">Gender</th>
									<th style="width:450px;">Medicine</th>
								    <th style="width:100px;">Action</th>												
								</tr>
            				</thead>
							<tbody>
<?php $sql = "SELECT * FROM prescribe as pr INNER JOIN adharcarddetails as ad ON ad.adharcardnumber=pr.adharcardnumber   where status=0";
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
								<td style="width:150px;" align="center"><?php echo htmlentities($result->age);?></td>
                				<td style="width:150px;" align="center"><?php echo htmlentities($result->gender);?></td>
<?php $adcno=$result->adharcardnumber;?>
								<td style="width:450px;" align="center"><?php echo htmlentities($result->med);?></td>
						    	<form action="pharmacistprescibelistphp.php" method="post" >
								<td align='center'><button id="issue"  value='<?php echo $adcno?>' name='adharcardnumber' >Issue </button>
                                </td>
								</form>						
							</tr>							
<?php $cnt=$cnt+1; }} ?>							
					</tbody>
				</table>								
			</div>											
		</div>
	</body>
</html>