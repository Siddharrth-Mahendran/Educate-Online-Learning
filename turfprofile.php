<?php
    $connection= mysqli_connect("localhost","root","","turf");
    
    session_start();

    $turf_name= $_GET['turf_name']; 

    $sql= "SELECT * FROM `turfdetail` WHERE turf_name='$turf_name' or description='$description'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Turf Booking</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>  
  
   <?php  include 'navbar.php';?>
   <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
       
        <div class="container">
          <div class="row"> 
          <div class="fb-profile-text" id="h1" >
                            <h2><?php echo $row['description']; ?></h2>
            </div>
            <hr>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="vehicle picture/<?php echo $row['turf_photo'] ?>" alt="unavaible"/>
                        
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      About Turf </a>
                    </li>
                   
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                     <h4><strong>Name</strong></h4>
                      <p><?php echo $row['turf_name']; ?></p>
                      
                      <h4><strong>Address</strong></h4>
                      <p><?php echo $row['address']; ?></p>
                      
                      <h4><strong>Description</strong></h4>
                      <p><?php echo $row['description']; ?></p>
                      <!--
                      
                      -->

                    </div>
                    
                    <?php //if($_SESSION['username']!= null) {  ?>
                    
                    <div class="tab-pane" id="tab_default_2">
                      <div class="row">
                      <div class="col-sm-10">
                       <?php include 'insertbill.php';?>
                          
                          <?php  //} ?>
                      </div>
                      </div>
                    </div>  
                  
                 </div> 
                </div>
              </div>
           </div>
          </div>
        
          <!-- /container fluid-->  
        <div class="container">
          <div class="col-sm-12"> 
              
          </div>
    </div>
    
</body>
</html>