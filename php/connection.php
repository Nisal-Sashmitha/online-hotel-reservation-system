<?php
    $conn=mysqli_connect("localhost","root","","hotelreservationsystem");

    if(!$conn){
        die("connection failed: ".mysqli_connect_error());
    }
    
?>