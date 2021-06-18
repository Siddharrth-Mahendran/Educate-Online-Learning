<?php

   $id=$_GET['turf_id'];
   $salary=$_POST['service'];
   $equipment=$_POST['equipment'];
   $oil=$_POST['extra_charge'];
   $tcost=$_POST['tcost'];

   $conn=mysqli_connect('localhost','root','','turf');
   $sql="INSERT INTO bill VALUES('','$id','$service','$equipment','$extra_charge','$tcost')";
   if(mysqli_query($conn,$sql)){
	   
				$msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        
      header("Location: indexbill.php"); 
   }else{
        echo "Not inserted";
   }
?>