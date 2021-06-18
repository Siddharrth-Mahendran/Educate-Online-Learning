<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $connection= mysqli_connect('localhost','root','','turf');

     $username= $_SESSION['username'];
    //echo $username;
    
    $query= "SELECT  `first_name`, `last_name`, `email` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}    
</style>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Booking</h1>
                 <?php //echo $msg; ?>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="animated bounce" action="bookingaction.php" method="post">
                   
                    <div class="input-group">
                      <span class="input-group-addon"><b>Name</b></span>
                      <input id="name" type="text" class="form-control" name="name" placeholder="Name"required>
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Turf Type</b></span> &nbsp;
                      <label><input type="radio" name="type" value="hourly">Hourly</label> &nbsp;
                      <label><input type="radio" name="type" value="day">Day</label>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Booking On</b></span>
                      <input id="req_date" type="date" class="form-control" name="req_date" placeholder="Date" required>
                      <select id="req_time" type="text" class="form-control" name="req_time" required/>
							 	<option value="">Select Starting Time</option>
							 	<option value="1 a.m - 3 am">1 am - 3 am</option>
							 	<option value="3.30 am - 5.30am">3.30 am - 5.30am</option>
							 	<option value="6 am - 8 am">6 am - 8 am</option>
							 	<option value="8.30 am - 10.30 am">8.30 am - 10.30 am</option>
							 	<option value="11 am - 1 pm">11 am - 1 pm</option>
							 	<option value="1.30 pm - 3 pm">1.30 pm - 3 pm</option>
							 	<option value="3.30 pm - 5.30 pm">3.30 pm - 5.30 pm</option>
							 	<option value="6 pm - 8 pm">6 pm - 8 pm"</option>
							 	<option value="8.30 pm - 10.30 pm">8.30 pm - 10.30 pm</option>
							 </select>
                      
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#req_date" ).datepicker();
                        $("#req_time").wickedpicker();
                        
                      } ); 
                        
                        
                        
                    </script> 
                    <br>
                    
		   <div class="input-group">
                      <span class="input-group-addon"><b>Turf List:</b></span>
                      <select id="turf_list" type="text" class="form-control" name="turf_list" required="true">
							 	<option value="">Select Turf</option>
							 	<option value="turf365">Turf 365</option>
							 	<option value="playqube">Play Qube</option>
							 	<option value="sportsvillage">Sports Village</option>
			 </select>
                    </div>
                    <br> 
		    
		    <div class="input-group">
                      <span class="input-group-addon"><b>Event Type</b></span>
                      <select id="event_type" type="text" class="form-control" name="event_type" required="true">
							 	<option value="">Select Event</option>
							 	<option value="cricket">Cricket</option>
							 	<option value="batminton">Batminton</option>
							 	<option value="tennis">Tennis</option>
							 	<option value="volleyball">Volley Ball</option>
							 	<option value="football">Football</option>
							 	<option value="rugby">Rugby</option>
							 	<option value="hockey">Hockey</option>
							 	<option value="Drill">Drill Training</option>
							 </select>
                    </div>
                    <br> 

                    <div class="input-group">
                      <span class="input-group-addon"><b>Customer Address</b></span>
                      <input id="addres" type="textarea" class="form-control" name="addres" placeholder="Address here!!">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Email ID" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Mobile</b></span>
                      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile No" required>
                    </div>
                    <br>
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                     
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>