<?php include('adminindexpage.php');?>
<!doctype html>
<html>
	<head>
	    <title>View Patients</title>
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
		    <h1>Patient's List </h1>
			<hr>
			<div style="width:1150px;height:425px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;">
				<div >Patient's List</div>
					<hr>
					<br>
					<br>
					<table border="1" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th style="width:25px;">#</th>
								<th style="width:300px;">Patient Name</th>
								<th style="width:200px;">Age</th>
								<th style="width:200px;">Gender</th>
								<th style="width:200px;">Phonenumber</th>
								<th style="width:200px;">Address</th>	
								<th style="width:300px;">State</th>												
							</tr>
						</thead>
						<tbody>
<?php $sql = "SELECT * from  adharcarddetails";
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
								<td style="width:300px;"><?php echo htmlentities($result->firstname);?></td>
								<td style="width:200px;"><?php echo htmlentities($result->age);?></td>
								<td style="width:200px;"><?php echo htmlentities($result->gender);?></td>
								<td style="width:200px;"><?php echo htmlentities($result->phonenumber);?></td>
								<td style="width:200px;"><?php echo htmlentities($result->address);?></td>
								<td style="width:200px;"><?php echo htmlentities($result->state);?></td>
							</tr>	
<?php $cnt=$cnt+1; }} ?>								
						</tbody>
					</table>								
				</div>											
			</div>
		</body>
    </html>