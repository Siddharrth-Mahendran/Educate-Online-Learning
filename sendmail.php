<?php
    
    $connection= mysqli_connect("localhost","root","","turf");
    session_start();
    
    $id= $_GET['id'];

    $sql= "SELECT * FROM `booking` WHERE booking_id='$id'"; 

    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = $row['email'];
    
    //echo $email_to;
    
 
     
 
     
 
 
 
     
 
    // validation expected data exists
 /*
    if(!isset($_POST['first_name']) ||
 
        // !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['comment'])) {
 
        died('');       //enter msg within this string
 
    }*/
 
     
 
    $first_name = $row['name']; // required
 
    // $last_name = $_POST['last_name']; // required
 
    $email_from = "siddhumahi01@gmail.com"; // required
 
    $telephone = $row['mobile']; // not required
 
    //$comments = $_POST['comment']; // required
    $manid= $_POST['manid'];
    //echo $man_id;
    
    $turf_name= $_POST['turf_name'];
    //$turf_name= $_POST['turf_name'];
    //echo $turf_name;
    
    $sql2="SELECT * FROM `manager` WHERE manid='$manid'";
    $res2= mysqli_query($connection,$sql2);
    $row2= mysqli_fetch_assoc($res2);
    
    $manname=$row2['manname'];
    $manmobile=$row2['manmobile'];
    //echo $manname;
    //echo $manmobile;
     
 
   
 
    $email_message = " This is an email form RUET Vehicle Management to confirm your vehicle. Details are given below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "first Name: ".clean_string($first_name)."\n";
 
    // $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Phone: ".clean_string($telephone)."\n\n";
 
    $email_message .= "manger's Name: ".clean_string($manname)."\n";
    $email_message .= "turf name: ".clean_string($turf_name)."\n";
    $email_message .= "manager's Phone Number: ".clean_string($manmobile)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
    
 
$update_query="UPDATE `booking` SET `confirmation`='1',`turf_name`='$turf_name' WHERE booking_id='$id'; UPDATE `turfdetail` SET `turf_available`='1' WHERE turf_name='$turf_name';UPDATE `manager` SET `man_available`='1' WHERE manid='$manid'";
    
//$update_query="UPDATE `booking` SET `confirmation`='1' WHERE booking_id='$id'";
//echo $update_query;
    

    
//$res3=mysqli_query($connection,$update_query);
$res3=mysqli_multi_query($connection,$update_query);  //to run multiple query
 
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>success</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="animate.css">
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <?php include 'navbar_admin.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <br><br><br><br><br>
                <div class="alert alert-success animated tada">
                      <strong>Success!</strong> Mail has been sent successfully.
                </div>
                
                <a class="btn btn-default" href="bookinglist.php">Go Back</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
     
 </body>
 </html>
 

 
 <?php
 
}
 
?>
