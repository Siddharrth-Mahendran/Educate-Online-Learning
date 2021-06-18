<?php
    $data1= $_POST['manname1'];
    $data2= $_POST['manmobile1'];
    $data3= $_POST['turfnam1'];
    $data4= $_POST['manaddress1'];
    $data5= $_POST['manphoto1'];  

    

    $connection=mysqli_connect("localhost","root","","turf");

    if(isset($_POST['drname1']))
    {
        //$sql= "INSERT INTO `status`(`post_id`, `name`, `status`) VALUES ('','$data1','$data2')";
        
       // $sql= "INSERT INTO `driver`(`driverid`, `drname`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`) VALUES ('','$data1','$data2','$data3','$data4','$data5','$data6','$data7'"; 
        
        $sql= "INSERT INTO `manager`(`manid`, `manname`, `manmobile`, `turfnam`, `manaddress`, `manphoto`) VALUES ('','$data1','$data2','$data3','$data4','$data5')";
        
        
        
        
        $result = mysqli_query($connection,$sql);
        
        if ($result)
             echo "done";
         else
             echo "not done"; 
        
         //$data1= $_GET['namee'];
       
        
    } 
	
?>