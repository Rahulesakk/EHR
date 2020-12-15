<?php
    $servername = "sql310.epizy.com";
    $username = "epiz_26370859";
    $password = "qh0aetllFTM";
    $dbname = "epiz_26370859_mainproject";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }
    $image =$_FILES['image']['name'];
    $image1="images/".$_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
    $sql = "INSERT INTO adharcarddetails (adharcardnumber,firstname,lastname ,dob,age,gender,phonenumber,fathername,address,state, image)values('$_POST[adharcardnumber]','$_POST[firstname]','$_POST[lastname]','$_POST[dob]','$_POST[age]','$_POST[gender]','$_POST[phonenumber]','$_POST[father]','$_POST[address]','$_POST[state]','$image1')";
    if ($conn->query($sql) === TRUE) 
        {
            header("location:receptionistbookappointmentpage1.php");
        }
     else 
        {
            header("location:receptionistpatientregisterpage.php");
        }
$conn->close();
?>