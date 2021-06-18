<?php 
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 
    
    $username= $_GET['id'];
    //echo $username;
    
    $connection= mysqli_connect('localhost','root','','turf');

    $query= "SELECT booking.booking_id, booking.req_date,booking.`turf_name`, booking.`manid`, cost.turf_cost, cost.extra_cost, cost.total_cost, cost.paid FROM `booking` LEFT JOIN `cost` ON booking.username=cost.username WHERE booking.username='$username' AND booking.booking_id=cost.booking_id;";

    //echo $query;

    $result= mysqli_query($connection,$query);
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Billing</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align: center;">My Bill</h1>
            </div>
        </div>
        
        
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking Id</th>
                        <th>Requested Date</th>
                        <th>Turf_name</th>
                        <th>Manager</th>
                        <th>Turf Cost</th>
                        <th>Extra Cost</th>
                        <th>Total Cost</th>
                        <th>Paid</th>
                    </tr>  
                </thead>

                <tbody>
<?php
    while($row=mysqli_fetch_assoc($result)) {
                
?>
                    <tr>
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['req_date']; ?></td>
                        <td><a href="turfprofile.php?turf_name=<?php echo $row['turf_name'] ?>"><?php echo $row['turf_name'] ?></a></td>
                        <td><a href="managerprofile.php?manid=<?php echo $row['manid'] ?>"><?php echo $row['manid'] ?></a></td>
                        
                        <td><?php echo $row['turf_cost']; ?></td>
                        <td><?php echo $row['extra_cost']; ?></td>
                        <td><?php echo $row['total_cost']; ?></td>
                        
                       <?php if($row['paid']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                    </tr>                    
                </tbody>
<?php } ?>
            </table>
        </div>
    </div>
</body>
</html>