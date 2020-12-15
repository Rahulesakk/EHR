<?php include ('receptionistindexpage.php');?>
<!doctype html>
    <html>
        <head>
            <title>Book Appointment</title>
             <style>
                input
                {
	                float:right;
	                bottom:35px;
	                width:350px;
                    height:50px;
	                font-size:25px;
                    border-radius:25px;
                    text-align:center;
	            }
        </style>
        </head>
        <body style="background-color:AliceBlue;">
            <div style="position:fixed;left:300px;top:80px;">
            <br>
            <br>
            <br>
            <br>
            <form action="receptionistbookappointmentpage2.php" method="post" >
                <br>
                <br>
                <br>
                <input style="position:relative;left:450px;top:120px;" type="text" id="number" name="number" placeholder="Enter The Patient Id"required />
                <br>
                <br>
                <br>
                <button style="position:relative;left:575px;top:150px;width:100px;font-size:18px;background-color:black;color:red;height:50px;border-radius:25px;">Next</button>
            </form>						
        </div>
    </body>
</html>
