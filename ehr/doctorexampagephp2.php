<?php 
    $servername = "sql310.epizy.com";
    $username = "epiz_26370859";
    $password = "qh0aetllFTM";
    $dbname = "epiz_26370859_mainproject";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $adharcardnumber=$_POST['adharcardnumber'];
    if(!empty($_POST['test1']))
    {
        $test1=1;	
    }
    else
    {
        $test1=0;	
    }
    if(!empty($_POST['test2']))
    {
        $test2=1;	
    }
    else
    {
        $test2=0;	
    }
    if(!empty($_POST['test3']))
    {
        $test3=1;	
    }
    else
    {
        $test3=0;	
    }
    if(!empty($_POST['test4']))
    {
        $test4=1;	
    }
    else
    {
        $test4=0;	
    }
    if(!empty($_POST['test5']))
    {
        $test5=1;	
    }
    else
    {
        $test5=0;	
    }
    if(!empty($_POST['test6']))
    {
        $test6=1;	
    }
    else
    {
        $test6=0;	
    }
    $doctor='Dr Mohan Bhat';
    $status='0';
    $sql="insert into lab (adharcardnumber,completebloodcount,bloodpressure,bloodsugar,ecg,urineanalysis,thyroid,doctor,status) values ('$adharcardnumber','$test1','$test2','$test3','$test4','$test5','$test6','$doctor','$status')";
    if ($conn->query($sql) === TRUE)
    {
        header("location:doctorappoinmentpendingpage2.php");
    }
    else 
    {
        header("location:doctorexampage2.php");
    }
$conn->close();
?>
