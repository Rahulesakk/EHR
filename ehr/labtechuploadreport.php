<?php 
    include('labtechindexpage.php'); 
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
	    <head>
	        <title>Lab Technician </title>
	        <style>
            #up
            {              
                padding:0.6em 2em;
                border-radius: 8px;
                color:#fff;
                background-color:red;
                font-size:1.1em;
                border:0;
                cursor:pointer;
                margin:1em;
            }
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
		        <h1> Exam</h1>
			    <hr>
				    <div style="width:1150px;height:425px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;">
					    <div >Exam</div>
						    <hr>
						    <br>
						    <br>
						    <table border="1" cellspacing="0" width="100%">
							    <thead>
								    <tr>
									    <th style="width:25px;">#</th>
									    <th style="width:175px;">Patient Name</th>
									    <th style="width:175px;">Doctor Name</th>
									    <th style="width:350px;">Test To Be Carried</th>
									    <th style="width:300px;">Report <br> [Pdf Only]</th>
									    <th style="width:100px;">Action</th>									
								    </tr>
							    </thead>
							    <tbody>
<?php
$sql ="SELECT * from  lab INNER JOIN adharcarddetails
ON lab.adharcardnumber=adharcarddetails.adharcardnumber where status=0 ";
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
								<td style="width:175px;"><?php echo htmlentities($result->firstname);?></td>
								<td style="width:175px;"><?php echo htmlentities($result->doctor);?></td>
								<td style="width:350px;"><?php

									$completebloodcount=$result->completebloodcount;
									$bloodpressure =$result->bloodpressure; 
									$bloodsugar=$result->bloodsugar;
									$ecg=$result->ecg;
									$urineanalysis=$result->urineanalysis;
								    $thyroid=$result->thyroid;
									
									if($completebloodcount==1)
									{
										echo 'Complete Blood Count';
										echo '<html><br></html>';
									}
									if($bloodpressure==1)
									{
										echo 'Blood Pressure';
										echo '<html><br></html>';
									}
									if($bloodsugar==1)
									{
										echo 'Blood Sugar';
										echo '<html><br></html>';
									}
									if($ecg==1)
									{
										echo 'ECG';
										echo '<html><br></html>';
									}
									if($urineanalysis==1)
									{
										echo 'Urineanalysis';
										echo '<html><br></html>';
									}
									if($thyroid==1)
									{
										echo 'Thyroid';
										echo '<html><br></html>';
									}
									
									?>
                                    </td>
									<td style="width:300px;">
									<form action="labtechuploadreportphp.php" enctype="multipart/form-data" method="post">
									<input  name="adharcardnumber" id="adharcardnumber" value="<?php echo htmlentities($result->adharcardnumber);?>"  style="display:none;" required />
									<input type="file" name="report" id="report" required />
									</td>
									<td style="width:100px;">
									<input id="up" type="submit" value="Submit" />   
									</form>
                                    </td>									
<?php $cnt=$cnt+1; }} ?>								
						</tbody>
					</table>								
				</div>											
			</div>
		</body>
    </html>