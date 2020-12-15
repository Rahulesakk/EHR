<?php include ('receptionistindexpage.php');?>
<html>
    <head>
        <style>
            b
            {
                font-size:22px;
            }
            input,textarea
            {               
	            width:350px;
                height:30px;
                font-size:20px;
                border-radius:25px;
                text-align:center;
                position:relative;
                left:450px;
            }
        </style>
    </head>
    <body style="background-color:AliceBlue">
        <div style="position:fixed;left:300px;top:80px">
        <form action="receptionistpatientregisterpagephp.php" method="post" enctype="multipart/form-data">
                <input  id="text" type="text" name="adharcardnumber" placeholder=" The Patient ID" required />
                <br> 
                 <br>   
                <input  id="text" type="text" name="firstname" placeholder="First Name" required />                    
                <br>
                 <br>
               <input  id="text" type="text" name="lastname" placeholder="Last Name" required />
                <br>
                 <br>
                <input  id="text" type="text" name="gender"  placeholder="Gender" required />
                <br>
                 <br>
                <input type="text" name="dob" placeholder="Date Of Birth" onfocus="(this.type='date')" required>
                <br>
                 <br>
                <input  id="age" type="text" name="age" placeholder="Age" required />
                <br>
                 <br>
                <input  id="text" type="text" name="phonenumber" placeholder="Phonenumber" required />
                <br>
                 <br>
                <Textarea style="font-size:22px;" rows="3" type="text" name="address" placeholder="Address" required ></Textarea>
                <br>
                 <br>
                <input id="text" type="text" name="state" placeholder="State" required />				
                <br>
                 <br>
                <input  id="text" type="text" name="father" placeholder="Father Name"required />				
                <br>
                 <br>
                <input  type="text" name="image" id="text" placeholder="Image" onfocus="(this.type='file')" required />   				
                <br>
                 <br>
                <input style="background-color:black;color:red;height:40px;width:150px;position:relative;left:550px;" type="submit" value="Submit" />                
        </form>
    </body>
</html>




		