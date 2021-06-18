<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','turf'); 

    $sql1="SELECT `turf_name`, `manid` FROM `booking` WHERE booking_id='$id'";
    $result1=mysqli_query($conn,$sql1);
    $row= mysqli_fetch_assoc($result1);
    $turf_name=$row['turf_name']; 
    $manid=$row['manid'];
echo $turf_name;
echo $manid;
    
    
    
   $sql="UPDATE `turfdetail` SET `turf_available`='0' WHERE turf_name='$turf_name'; UPDATE `manager` SET `man_available`='0' WHERE manid='$manid'; UPDATE `booking` SET `finished`='1' WHERE booking_id='$id'";
    //echo $sql;
   $result=mysqli_multi_query($conn,$sql);
   if($result){
       header("Location: bookinglist.php");
   }else{
         echo "Not freed";
   }
   
?>