<?php
    include 'connection.php';

    
    $recordid1=$_GET['rid'];
    $paymentID="";
    $totalAmount="";
    $sql="SELECT paymentID,totalAmount FROM payment WHERE reservationID='$recordid1'";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
            {
                
                $paymentID=$row['paymentID'];
                $totalAmount=$row['totalAmount'];


        }
    }
    $paidAmount=$totalAmount*0.4;

    $sql="UPDATE payment SET paymentStatus='Fulfilled',paidAmount='$paidAmount'  WHERE paymentID='$paymentID' ";

    $conn->query($sql);
    header("location:feedback.php?id=$recordid1");
    
    
    


?>