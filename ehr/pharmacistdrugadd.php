<?php include('pharmacistindexpage.php');?>
<!doctype html>
<html>
	<head>
    	 <title>Add Drug</title>
	     <style>
             input
            {
	            bottom:35px;
                width:300px;
                height:50px;
	            font-size:22px;
                border-radius:25px;
                text-align:center;
                position:relative;
                left:400px;
                top:25px;
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
	        }
	        </style>
	    </head>
	    <body>
	    <div style="position:fixed;left:300px;top:80px;">
		    <h1>Add Drug</h1>
			<hr>
				<div style="width:1150px;height:425px;border:0.5px solid #c2c2a3;padding:25px;margin:10px;background-color:white;">
					<div >Add Drug</div>
						<hr>
						<br>
						<br>
						<form action="pharmacistdrugaddphp.php" method="post">
						    <input name="drug" id="drug" placeholder="Enter The Drug Name" required />
                            <br>
                            <br>
                            <input type="text" name="m_d" placeholder="Manufacture Date" onfocus="(this.type='date')" required>
                            <br>
                            <br>
                            <input type="text" name="e_d" placeholder="Expiry Date" onfocus="(this.type='date')" required>
                            <br>
                            <br>
                            <input type="number"  placeholder="Enter The Quantity " name="quantity" required />
                            <br>
                            <br>
                            <input id="up" type="submit" value="submit" />      
	                    </form>										
				    </div>											
                </div>
		    </body>
        </html>