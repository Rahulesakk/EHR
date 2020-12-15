<?php?>
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
	            <h1  style="position:fixed;font-size:28px;color:#34ebe8;">&nbsp &nbsp EHR Based Healthcare System | Lab Technician</h1>  
	        </div>
	        <div>
	        <a href="indexpage.php"><button  style="position:fixed;border:none;left:1338px;width:200px;height:60px;background-color:rgb(44, 49, 54);border:none;color:red;font-size:22px;">             <i class="fa fa-user-circle-o" style="font-size:30px;color:red"></i>&nbsp Logout</button>	</a>
	        </div>
	    </div>
	    <div class="sidenav">
	    <ul>
			<li style="font-size:26px;color:#34ebe8;">&nbsp &nbsp &nbsp Main Menu</li>
			<br>
			<br>
			<br>
			<li><a href="labtechuploadreport.php"><i class="fa fa-user-md"></i>&nbsp Exam & Report </a></li>	
			<br>
			<br>					
	    </ul>
	    </div>
	</body>
</html>