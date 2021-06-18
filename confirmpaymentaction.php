<?php
    $connection= mysqli_connect('localhost','root','','turf');
    session_start();

    $id= $_GET['id'];

    $sql= "UPDATE `cost` SET `paid`='1' WHERE booking_id='$id'";
    $result= mysqli_query($connection,$sql);

    if($result){
        header ('Location: bookinglist.php');
    }
?>