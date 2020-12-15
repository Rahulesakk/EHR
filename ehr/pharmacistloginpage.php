<!doctype html>
    <html>
        <head>
            <title>Pharmacist Login</title>
         <style>
                body
                {
                   background: #355C7D;  /* fallback for old browsers */
                   background: -webkit-linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);  /* Chrome 10-25, Safari 5.1-6 */
                   background: linear-gradient(to right, #C06C84, #6C5B7B, #355C7D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                }
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
        <body>
            <div>
                <br>
                <br>
                <br>
                <br>
                <h1 style="color:black;font-size:40px;" align="center" >Welcome to EHR Based Health Care System</h1>
                <form action="pharmacistloginpagephp.php" method="post" >
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
	                <input style="position:relative;right:600px;top:1px;" type="text" id="name" name="username" placeholder="Enter The Username" required>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input style="position:relative;right:600px;top:1px;" type="password" id="password" name="password" placeholder="Enter The Password" required>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <button style="color:black;width:135px;position:relative;left:675px;font-size:23px;border-radius:25px;">Login</button>
                </form>						
            </div>
        </body>
    </html>

